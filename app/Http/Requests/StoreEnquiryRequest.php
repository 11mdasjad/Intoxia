<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEnquiryRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'min:2', 'max:100'],
            'email' => ['required', 'email:rfc,dns', 'max:150'],
            'phone' => ['nullable', 'string', 'min:7', 'max:25'],
            'company' => ['nullable', 'string', 'max:150'],
            'service' => ['required', 'string', 'max:100'],
            'budget' => ['nullable', 'string', 'max:50'],
            'timeline' => ['nullable', 'string', 'max:50'],
            'message' => ['required', 'string', 'min:10', 'max:5000'],
            // Honeypot field (hidden from real users, filled by spam bots)
            'website_hp' => ['nullable', 'max:0'],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Please provide your full name.',
            'email.required' => 'Please provide a valid work email address.',
            'email.email' => 'Please provide a valid email format.',
            'service.required' => 'Please select the service or technology you are looking for.',
            'message.required' => 'Please provide details about your project or enquiry.',
            'message.min' => 'Please provide at least 10 characters describing your requirement.',
            'website_hp.max' => 'Spam detection triggered.',
        ];
    }
}
