<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\CaseStudy;
use App\Models\Industry;
use App\Models\PortfolioProject;
use App\Models\Service;
use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function __invoke(): Response
    {
        $baseUrl = config('app.url', 'https://www.intoxiatechnologies.com');

        $staticRoutes = [
            '',
            '/about',
            '/services',
            '/industries',
            '/work',
            '/technologies',
            '/process',
            '/why-intoxia',
            '/testimonials',
            '/insights',
            '/careers',
            '/contact',
            '/faq',
            '/privacy-policy',
            '/terms-and-conditions',
            '/cookie-policy',
        ];

        $services = Service::published()->select('slug', 'updated_at')->get();
        $industries = Industry::published()->select('slug', 'updated_at')->get();
        $caseStudies = CaseStudy::published()->select('slug', 'updated_at')->get();
        $posts = BlogPost::published()->select('slug', 'updated_at')->get();

        $content = view('sitemap', compact(
            'baseUrl',
            'staticRoutes',
            'services',
            'industries',
            'caseStudies',
            'posts'
        ))->render();

        return response($content, 200, [
            'Content-Type' => 'application/xml',
        ]);
    }
}
