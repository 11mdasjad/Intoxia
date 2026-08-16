<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\CaseStudy;
use App\Models\Industry;
use App\Models\PortfolioProject;
use App\Models\Service;
use App\Models\Statistic;
use App\Models\Technology;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __invoke(Request $request): View
    {
        $featuredServices = Service::published()
            ->with('category')
            ->orderBy('sort_order')
            ->take(8)
            ->get();

        $aiServices = Service::published()
            ->whereHas('category', fn ($q) => $q->where('name', 'like', '%AI%'))
            ->orWhere('name', 'like', '%AI%')
            ->orWhere('name', 'like', '%Machine Learning%')
            ->orderBy('sort_order')
            ->take(6)
            ->get();

        $stats = Statistic::published()
            ->orderBy('sort_order')
            ->get();

        $featuredProjects = PortfolioProject::published()
            ->with(['category', 'technologies', 'caseStudy'])
            ->orderBy('sort_order')
            ->take(6)
            ->get();

        $industries = Industry::published()
            ->orderBy('sort_order')
            ->take(8)
            ->get();

        $technologies = Technology::published()
            ->with('category')
            ->orderBy('sort_order')
            ->take(16)
            ->get();

        $testimonials = Testimonial::published()
            ->orderBy('sort_order')
            ->take(6)
            ->get();

        $latestArticles = BlogPost::published()
            ->with(['category', 'author'])
            ->orderBy('published_at', 'desc')
            ->take(3)
            ->get();

        return view('pages.home', compact(
            'featuredServices',
            'aiServices',
            'stats',
            'featuredProjects',
            'industries',
            'technologies',
            'testimonials',
            'latestArticles'
        ));
    }
}
