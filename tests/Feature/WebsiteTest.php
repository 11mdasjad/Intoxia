<?php

namespace Tests\Feature;

use App\Models\BlogPost;
use App\Models\Industry;
use App\Models\PortfolioProject;
use App\Models\Role;
use App\Models\Service;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Tests\TestCase;

class WebsiteTest extends TestCase
{
    use RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed();
    }

    public function test_homepage_loads_successfully(): void
    {
        $response = $this->get('/');
        $response->assertStatus(200);
        $response->assertSee('Intoxia Technologies', false);
        $response->assertSee('Move Businesses Forward', false);
    }

    public function test_about_page_loads(): void
    {
        $response = $this->get('/about');
        $response->assertStatus(200);
        $response->assertSee('About Our Firm');
    }

    public function test_services_index_and_detail_load(): void
    {
        $response = $this->get('/services');
        $response->assertStatus(200);

        $service = Service::published()->first();
        if ($service) {
            $detailResponse = $this->get('/services/' . $service->slug);
            $detailResponse->assertStatus(200);
            $detailResponse->assertSee($service->name);
        }
    }

    public function test_industries_index_and_detail_load(): void
    {
        $response = $this->get('/industries');
        $response->assertStatus(200);

        $industry = Industry::published()->first();
        if ($industry) {
            $detailResponse = $this->get('/industries/' . $industry->slug);
            $detailResponse->assertStatus(200);
            $detailResponse->assertSee($industry->name);
        }
    }

    public function test_portfolio_loads(): void
    {
        $response = $this->get('/work');
        $response->assertStatus(200);
        $response->assertSee('Selected Work');
    }

    public function test_pricing_page_loads(): void
    {
        $response = $this->get('/pricing');
        $response->assertStatus(200);
        $response->assertSee('Transparent Engineering Pricing');
        $response->assertSee('MVP Launchpad');
    }

    public function test_insights_blog_loads(): void
    {
        $response = $this->get('/insights');
        $response->assertStatus(200);
        $response->assertSee('Engineering Insights');

        $post = BlogPost::published()->first();
        if ($post) {
            $postResponse = $this->get('/insights/' . $post->slug);
            $postResponse->assertStatus(200);
            $postResponse->assertSee($post->title);
        }
    }

    public function test_contact_page_loads_and_accepts_submission(): void
    {
        Mail::fake();

        $response = $this->get('/contact');
        $response->assertStatus(200);

        $postResponse = $this->post('/contact', [
            'name' => 'Dr. Test User',
            'email' => 'client@enterprise.com',
            'phone' => '+91 99999 88888',
            'company' => 'Enterprise Corp',
            'service' => 'Web Development',
            'budget' => '₹5 Lakh - ₹10 Lakh',
            'timeline' => '1-3 Months',
            'message' => 'We need an enterprise Laravel platform built with AI integration.',
            'website_hp' => '', // Clean honeypot
        ]);

        $postResponse->assertRedirect(route('contact'));
        $postResponse->assertSessionHas('success');

        $this->assertDatabaseHas('enquiries', [
            'email' => 'client@enterprise.com',
            'service' => 'Web Development',
        ]);
    }

    public function test_contact_form_rejects_spam_honeypot(): void
    {
        $postResponse = $this->post('/contact', [
            'name' => 'Spam Bot',
            'email' => 'bot@spammer.com',
            'service' => 'Web Development',
            'message' => 'Spam message content here',
            'website_hp' => 'http://spam-site.com', // Filled honeypot
        ]);

        $postResponse->assertSessionHasErrors('website_hp');
    }

    public function test_sitemap_and_robots_load(): void
    {
        $sitemapResponse = $this->get('/sitemap.xml');
        $sitemapResponse->assertStatus(200);
        $sitemapResponse->assertHeader('Content-Type', 'application/xml');

        $robotsResponse = $this->get('/robots.txt');
        $robotsResponse->assertStatus(200);
        $robotsResponse->assertSee('User-agent: *');
    }

    public function test_admin_login_accessible(): void
    {
        $response = $this->get('/admin/login');
        $response->assertStatus(200);
    }

    public function test_authenticated_admin_can_access_all_resources(): void
    {
        $admin = User::where('email', 'admin@intoxiatechnologies.com')->first();
        $this->actingAs($admin);

        $adminRoutes = [
            '/admin',
            '/admin/enquiries',
            '/admin/services',
            '/admin/portfolio-projects',
            '/admin/case-studies',
            '/admin/blog-posts',
            '/admin/industries',
            '/admin/technologies',
            '/admin/testimonials',
            '/admin/team-members',
            '/admin/faqs',
            '/admin/statistics',
            '/admin/site-settings',
        ];

        foreach ($adminRoutes as $route) {
            $response = $this->get($route);
            $response->assertStatus(200);
        }
    }
}
