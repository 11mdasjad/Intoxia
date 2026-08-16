<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEnquiryRequest;
use App\Mail\EnquiryConfirmationMail;
use App\Mail\EnquiryReceivedMail;
use App\Models\Enquiry;
use App\Models\SiteSetting;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(): View
    {
        return view('pages.contact');
    }

    public function store(StoreEnquiryRequest $request): RedirectResponse
    {
        // Rate limiting check: max 5 submissions per hour per IP
        $ip = $request->ip();
        $rateKey = 'contact_submit:' . $ip;

        if (RateLimiter::tooManyAttempts($rateKey, 5)) {
            $seconds = RateLimiter::availableIn($rateKey);
            return back()
                ->withInput()
                ->with('error', "Too many enquiries submitted from this network. Please try again in {$seconds} seconds, or contact us directly on WhatsApp at +91 70116 39618.");
        }

        RateLimiter::hit($rateKey, 3600);

        // Sanitize and create enquiry record
        $data = $request->validated();
        unset($data['website_hp']); // Remove honeypot

        $enquiry = Enquiry::create([
            'name' => strip_tags(trim($data['name'])),
            'email' => strtolower(trim($data['email'])),
            'phone' => isset($data['phone']) ? strip_tags(trim($data['phone'])) : null,
            'company' => isset($data['company']) ? strip_tags(trim($data['company'])) : null,
            'service' => strip_tags(trim($data['service'])),
            'budget' => isset($data['budget']) ? strip_tags(trim($data['budget'])) : null,
            'timeline' => isset($data['timeline']) ? strip_tags(trim($data['timeline'])) : null,
            'message' => strip_tags(trim($data['message'])),
            'source' => 'contact_page',
            'status' => 'new',
            'ip_address' => $ip,
            'user_agent' => substr((string) $request->userAgent(), 0, 500),
        ]);

        // Attempt transactional emails (fail gracefully without breaking user experience)
        try {
            $adminEmail = SiteSetting::get('email', 'contact@intoxiatechnologies.com');
            Mail::to($adminEmail)->send(new EnquiryReceivedMail($enquiry));
            Mail::to($enquiry->email)->send(new EnquiryConfirmationMail($enquiry));
        } catch (\Throwable $e) {
            Log::warning('Contact enquiry email failed to send: ' . $e->getMessage());
        }

        return redirect()->route('contact')
            ->with('success', 'Thank you! Your enquiry has been received successfully. A technology consultant from Intoxia Technologies will connect with you within 4–8 business hours.');
    }
}
