<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use App\Models\SiteSetting;
use App\Models\Statistic;
use App\Models\TeamMember;
use App\Models\Technology;
use App\Models\TechnologyCategory;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    public function about(): View
    {
        $team = TeamMember::published()->orderBy('sort_order')->get();
        $stats = Statistic::published()->orderBy('sort_order')->get();
        $testimonials = Testimonial::published()->orderBy('sort_order')->take(4)->get();

        return view('pages.about', compact('team', 'stats', 'testimonials'));
    }

    public function process(): View
    {
        return view('pages.process');
    }

    public function whyIntoxia(): View
    {
        $stats = Statistic::published()->orderBy('sort_order')->get();
        return view('pages.why-intoxia', compact('stats'));
    }

    public function technologies(): View
    {
        $categories = TechnologyCategory::with(['technologies' => function ($q) {
            $q->published()->orderBy('sort_order');
        }])->orderBy('sort_order')->get();

        return view('pages.technologies', compact('categories'));
    }

    public function testimonials(): View
    {
        $testimonials = Testimonial::published()->orderBy('sort_order')->paginate(12);
        return view('pages.testimonials', compact('testimonials'));
    }

    public function careers(): View
    {
        return view('pages.careers');
    }

    public function faq(): View
    {
        $faqs = Faq::published()->orderBy('sort_order')->get()->groupBy('category');
        return view('pages.faq', compact('faqs'));
    }

    public function privacyPolicy(): View
    {
        return view('pages.legal.privacy-policy');
    }

    public function termsAndConditions(): View
    {
        return view('pages.legal.terms-and-conditions');
    }

    public function pricing(): View
    {
        $faqs = Faq::published()->orderBy('sort_order')->take(8)->get();
        return view('pages.pricing', compact('faqs'));
    }

    public function cookiePolicy(): View
    {
        return view('pages.legal.cookie-policy');
    }
}
