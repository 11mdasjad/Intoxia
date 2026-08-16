<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IndustryController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Intoxia Technologies
|--------------------------------------------------------------------------
*/

// Homepage
Route::get('/', HomeController::class)->name('home');

// Company & About
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/why-intoxia', [PageController::class, 'whyIntoxia'])->name('why-intoxia');
Route::get('/pricing', [PageController::class, 'pricing'])->name('pricing');
Route::get('/process', [PageController::class, 'process'])->name('process');
Route::get('/technologies', [PageController::class, 'technologies'])->name('technologies');
Route::get('/testimonials', [PageController::class, 'testimonials'])->name('testimonials');
Route::get('/careers', [PageController::class, 'careers'])->name('careers');

// Services
Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
Route::get('/services/{service:slug}', [ServiceController::class, 'show'])->name('services.show');

// Industries
Route::get('/industries', [IndustryController::class, 'index'])->name('industries.index');
Route::get('/industries/{industry:slug}', [IndustryController::class, 'show'])->name('industries.show');

// Portfolio & Case Studies
Route::get('/work', [PortfolioController::class, 'index'])->name('work.index');
Route::get('/work/{slug}', [PortfolioController::class, 'show'])->name('work.show');

// Insights / Blog
Route::get('/insights', [BlogController::class, 'index'])->name('insights.index');
Route::get('/insights/{post:slug}', [BlogController::class, 'show'])->name('insights.show');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'store'])
    ->middleware('throttle:10,1')
    ->name('contact.store');

// FAQ
Route::get('/faq', [PageController::class, 'faq'])->name('faq');

// Legal
Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms-and-conditions', [PageController::class, 'termsAndConditions'])->name('terms-and-conditions');
Route::get('/cookie-policy', [PageController::class, 'cookiePolicy'])->name('cookie-policy');

// XML Sitemap & Robots.txt
Route::get('/sitemap.xml', SitemapController::class)->name('sitemap');
Route::get('/robots.txt', function () {
    $content = "User-agent: *\nAllow: /\nDisallow: /admin\nDisallow: /admin/*\n\nSitemap: " . url('/sitemap.xml');
    return response($content, 200, ['Content-Type' => 'text/plain']);
})->name('robots');
