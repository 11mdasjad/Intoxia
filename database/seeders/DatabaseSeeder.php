<?php

namespace Database\Seeders;

use App\Models\BlogCategory;
use App\Models\BlogPost;
use App\Models\BlogTag;
use App\Models\CaseStudy;
use App\Models\Enquiry;
use App\Models\Faq;
use App\Models\Industry;
use App\Models\Permission;
use App\Models\PortfolioCategory;
use App\Models\PortfolioProject;
use App\Models\Role;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\SiteSetting;
use App\Models\Statistic;
use App\Models\TeamMember;
use App\Models\Technology;
use App\Models\TechnologyCategory;
use App\Models\Testimonial;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->seedRolesAndPermissions();
        $this->seedAdminUser();
        $this->seedSiteSettings();
        $this->seedStatistics();
        $this->seedServiceCategories();
        $this->seedServices();
        $this->seedIndustries();
        $this->seedTechnologyCategories();
        $this->seedTechnologies();
        $this->seedPortfolioCategories();
        $this->seedPortfolioProjects();
        $this->seedCaseStudies();
        $this->seedTestimonials();
        $this->seedTeamMembers();
        $this->seedBlogCategories();
        $this->seedBlogTags();
        $this->seedBlogPosts();
        $this->seedFaqs();
    }

    private function seedRolesAndPermissions(): void
    {
        $roles = [
            ['name' => 'super_admin', 'description' => 'Full system access'],
            ['name' => 'admin', 'description' => 'Administrative access'],
            ['name' => 'editor', 'description' => 'Content management access'],
            ['name' => 'sales', 'description' => 'Enquiry management access'],
        ];

        foreach ($roles as $role) {
            Role::create($role);
        }

        $permissionGroups = [
            'enquiries' => ['view', 'create', 'edit', 'delete', 'export'],
            'services' => ['view', 'create', 'edit', 'delete'],
            'portfolio' => ['view', 'create', 'edit', 'delete'],
            'blog' => ['view', 'create', 'edit', 'delete'],
            'testimonials' => ['view', 'create', 'edit', 'delete'],
            'industries' => ['view', 'create', 'edit', 'delete'],
            'team' => ['view', 'create', 'edit', 'delete'],
            'settings' => ['view', 'edit'],
            'users' => ['view', 'create', 'edit', 'delete'],
        ];

        foreach ($permissionGroups as $group => $actions) {
            foreach ($actions as $action) {
                Permission::create([
                    'name' => "{$group}.{$action}",
                    'group' => $group,
                ]);
            }
        }
    }

    private function seedAdminUser(): void
    {
        $admin = User::firstOrNew(['email' => 'admin@intoxiatechnologies.com']);
        $admin->name = 'Intoxia Admin';
        $admin->password = 'IntoxiaAdmin@2026';
        $admin->email_verified_at = now();
        $admin->save();

        // Attach super_admin role
        $role = Role::where('name', 'super_admin')->first();
        if ($role && !$admin->roles()->where('name', 'super_admin')->exists()) {
            $admin->roles()->attach($role);
        }
    }

    private function seedSiteSettings(): void
    {
        $settings = [
            // General
            ['key' => 'company_name', 'value' => 'Intoxia Technologies', 'group' => 'general'],
            ['key' => 'company_tagline', 'value' => 'Engineering intelligent digital experiences for ambitious businesses.', 'group' => 'general'],
            ['key' => 'logo', 'value' => null, 'group' => 'general'],
            ['key' => 'favicon', 'value' => null, 'group' => 'general'],

            // Contact
            ['key' => 'phone', 'value' => '+91 70116 39618', 'group' => 'contact'],
            ['key' => 'whatsapp', 'value' => '+917011639618', 'group' => 'contact'],
            ['key' => 'email', 'value' => 'contact@intoxiatechnologies.com', 'group' => 'contact'],
            ['key' => 'address', 'value' => '226 Second Floor, Main Kalindi Kunj Road, Jasola, New Delhi-110025, India', 'group' => 'contact'],
            ['key' => 'business_hours', 'value' => 'Mon-Fri: 9:00 AM - 7:00 PM IST | Sat: 10:00 AM - 4:00 PM IST', 'group' => 'contact'],

            // Social
            ['key' => 'linkedin', 'value' => null, 'group' => 'social'],
            ['key' => 'twitter', 'value' => null, 'group' => 'social'],
            ['key' => 'instagram', 'value' => null, 'group' => 'social'],
            ['key' => 'facebook', 'value' => null, 'group' => 'social'],
            ['key' => 'github', 'value' => null, 'group' => 'social'],

            // SEO
            ['key' => 'seo_title', 'value' => 'Intoxia Technologies — Software Development, AI & Digital Transformation', 'group' => 'seo'],
            ['key' => 'seo_description', 'value' => 'Intoxia Technologies builds intelligent digital products, AI-powered solutions, and scalable software for ambitious businesses across India and globally.', 'group' => 'seo'],
            ['key' => 'og_image', 'value' => null, 'group' => 'seo'],

            // Analytics
            ['key' => 'google_analytics_id', 'value' => null, 'group' => 'analytics'],
            ['key' => 'gtm_id', 'value' => null, 'group' => 'analytics'],

            // Footer
            ['key' => 'footer_text', 'value' => '© 2026 Intoxia Technologies. All rights reserved.', 'group' => 'footer'],
        ];

        foreach ($settings as $setting) {
            SiteSetting::create($setting);
        }
    }

    private function seedStatistics(): void
    {
        $stats = [
            ['label' => 'Projects Delivered', 'value' => '50', 'suffix' => '+', 'sort_order' => 1],
            ['label' => 'Client Satisfaction', 'value' => '98', 'suffix' => '%', 'sort_order' => 2],
            ['label' => 'Countries Served', 'value' => '5', 'suffix' => '+', 'sort_order' => 3],
            ['label' => 'Years of Experience', 'value' => '3', 'suffix' => '+', 'sort_order' => 4],
        ];

        foreach ($stats as $stat) {
            Statistic::create($stat);
        }
    }

    private function seedServiceCategories(): void
    {
        $categories = [
            ['name' => 'Development', 'sort_order' => 1],
            ['name' => 'AI & Intelligence', 'sort_order' => 2],
            ['name' => 'Design', 'sort_order' => 3],
            ['name' => 'Marketing & Growth', 'sort_order' => 4],
            ['name' => 'Infrastructure', 'sort_order' => 5],
            ['name' => 'Business Solutions', 'sort_order' => 6],
        ];

        foreach ($categories as $cat) {
            ServiceCategory::create($cat);
        }
    }

    private function seedServices(): void
    {
        $devCat = ServiceCategory::where('name', 'Development')->first()->id;
        $aiCat = ServiceCategory::where('name', 'AI & Intelligence')->first()->id;
        $designCat = ServiceCategory::where('name', 'Design')->first()->id;
        $marketingCat = ServiceCategory::where('name', 'Marketing & Growth')->first()->id;
        $infraCat = ServiceCategory::where('name', 'Infrastructure')->first()->id;
        $bizCat = ServiceCategory::where('name', 'Business Solutions')->first()->id;

        $services = [
            [
                'name' => 'Web Development',
                'icon' => 'globe',
                'short_description' => 'High-performance web applications built with modern frameworks, clean architecture, and scalable infrastructure.',
                'description' => 'We build web applications that handle complexity without compromising speed. From content-driven platforms to data-heavy dashboards, every project is architected for maintainability, performance, and growth. Our engineering team works with Laravel, PHP, and modern JavaScript to deliver production-grade web solutions.',
                'benefits' => ['Fast page loads and smooth interactions', 'SEO-optimized architecture', 'Scalable to handle growing traffic', 'Secure by design', 'Mobile-responsive from day one'],
                'technologies' => ['Laravel', 'PHP', 'JavaScript', 'Tailwind CSS', 'MySQL', 'PostgreSQL', 'Redis'],
                'service_category_id' => $devCat,
                'is_featured' => true,
                'sort_order' => 1,
            ],
            [
                'name' => 'Mobile App Development',
                'icon' => 'smartphone',
                'short_description' => 'Native and cross-platform mobile applications designed for performance, usability, and business impact.',
                'description' => 'We develop mobile applications that feel natural on every device. Whether native iOS and Android or cross-platform with React Native or Flutter, we focus on smooth performance, intuitive UX, and reliable offline functionality.',
                'benefits' => ['Cross-platform and native options', 'Offline-first architecture', 'Push notifications and real-time updates', 'App Store optimization', 'Continuous iteration support'],
                'technologies' => ['React Native', 'Flutter', 'Swift', 'Kotlin', 'Firebase'],
                'service_category_id' => $devCat,
                'is_featured' => true,
                'sort_order' => 2,
            ],
            [
                'name' => 'AI & Machine Learning',
                'icon' => 'brain',
                'short_description' => 'Production-ready AI systems that solve real business problems — from prediction to automation.',
                'description' => 'We build AI solutions that go beyond prototypes. Our team designs, trains, and deploys machine learning models that integrate into your business processes. From recommendation engines to predictive analytics, every solution is built for accuracy and scale.',
                'benefits' => ['Data-driven decision support', 'Automated repetitive processes', 'Predictive capabilities', 'Continuous model improvement', 'Integration with existing systems'],
                'technologies' => ['Python', 'TensorFlow', 'PyTorch', 'scikit-learn', 'OpenAI', 'LangChain'],
                'service_category_id' => $aiCat,
                'is_featured' => true,
                'sort_order' => 3,
            ],
            [
                'name' => 'Generative AI & AI Agents',
                'icon' => 'sparkles',
                'short_description' => 'Intelligent AI agents and generative AI applications that augment teams and automate complex workflows.',
                'description' => 'We help businesses harness the power of large language models, RAG systems, and AI agents. From custom chatbots to document intelligence and AI-powered content generation, we build solutions that augment your team\'s capabilities.',
                'benefits' => ['Custom AI chatbots and assistants', 'Document analysis and extraction', 'Workflow automation', 'Content generation systems', 'RAG-powered knowledge bases'],
                'technologies' => ['OpenAI', 'LangChain', 'Pinecone', 'Python', 'Node.js', 'Vector databases'],
                'service_category_id' => $aiCat,
                'is_featured' => true,
                'sort_order' => 4,
            ],
            [
                'name' => 'Custom Software Development',
                'icon' => 'code',
                'short_description' => 'Bespoke software solutions engineered to fit your exact business processes and growth trajectory.',
                'description' => 'Off-the-shelf software rarely fits exactly. We design and build custom software that maps precisely to your operations — whether that\'s an internal tool, a customer-facing platform, or a complex integration layer between systems.',
                'benefits' => ['Exact fit for business processes', 'Scalable architecture', 'Full ownership of codebase', 'Ongoing maintenance and support', 'Integration with existing tools'],
                'technologies' => ['Laravel', 'PHP', 'Python', 'Node.js', 'MySQL', 'PostgreSQL', 'Redis'],
                'service_category_id' => $devCat,
                'sort_order' => 5,
            ],
            [
                'name' => 'SaaS Development',
                'icon' => 'cloud',
                'short_description' => 'Multi-tenant SaaS platforms built for scalability, security, and recurring revenue.',
                'description' => 'We architect and build SaaS products from concept to launch. Multi-tenancy, subscription billing, role-based access, analytics dashboards — every component is designed for scale. We help you build products that grow with your customer base.',
                'benefits' => ['Multi-tenant architecture', 'Subscription and billing integration', 'Role-based access control', 'Analytics and reporting', 'API-first architecture'],
                'technologies' => ['Laravel', 'Vue.js', 'React', 'Stripe', 'PostgreSQL', 'Redis', 'AWS'],
                'service_category_id' => $devCat,
                'sort_order' => 6,
            ],
            [
                'name' => 'E-commerce Development',
                'icon' => 'shopping-cart',
                'short_description' => 'High-converting e-commerce experiences built for performance, trust, and business growth.',
                'description' => 'We build e-commerce platforms that convert visitors into customers. From product discovery to checkout optimization, every element is designed to reduce friction and increase revenue. We work with both custom solutions and established platforms.',
                'benefits' => ['Conversion-optimized checkout', 'Payment gateway integration', 'Inventory management', 'Multi-currency support', 'SEO-optimized product pages'],
                'technologies' => ['Laravel', 'Shopify', 'WooCommerce', 'Stripe', 'Razorpay', 'MySQL'],
                'service_category_id' => $devCat,
                'sort_order' => 7,
            ],
            [
                'name' => 'UI/UX Design',
                'icon' => 'palette',
                'short_description' => 'Research-driven design that balances visual excellence with usability and business outcomes.',
                'description' => 'Good design is invisible — it guides users naturally toward their goals. We create interfaces that are visually polished, structurally clear, and tested against real user behavior. Every design decision is grounded in research and business context.',
                'benefits' => ['User research and personas', 'Wireframes and prototypes', 'Visual design systems', 'Usability testing', 'Accessibility compliance'],
                'technologies' => ['Figma', 'Adobe XD', 'Framer', 'Tailwind CSS', 'Design Systems'],
                'service_category_id' => $designCat,
                'is_featured' => true,
                'sort_order' => 8,
            ],
            [
                'name' => 'Cloud & DevOps',
                'icon' => 'server',
                'short_description' => 'Cloud infrastructure and DevOps practices that ensure reliability, security, and efficient deployment.',
                'description' => 'We design cloud architectures and CI/CD pipelines that keep your applications running smoothly. From infrastructure setup to monitoring and auto-scaling, we handle the operational complexity so your team can focus on building.',
                'benefits' => ['Automated deployment pipelines', 'Infrastructure as code', 'Monitoring and alerting', 'Auto-scaling', 'Cost optimization'],
                'technologies' => ['AWS', 'Google Cloud', 'Docker', 'GitHub Actions', 'Nginx', 'Redis'],
                'service_category_id' => $infraCat,
                'sort_order' => 9,
            ],
            [
                'name' => 'SEO',
                'icon' => 'search',
                'short_description' => 'Technical and content SEO that drives organic traffic and improves search engine visibility.',
                'description' => 'We approach SEO as a technical discipline, not marketing fluff. Site speed, crawlability, structured data, content architecture — we optimize the foundations that search engines care about. Combined with keyword strategy and content planning, we help you rank for the terms that matter.',
                'benefits' => ['Technical SEO audit and fixes', 'Keyword research and strategy', 'Content optimization', 'Core Web Vitals improvement', 'Schema markup implementation'],
                'technologies' => ['Google Search Console', 'Ahrefs', 'Screaming Frog', 'PageSpeed Insights'],
                'service_category_id' => $marketingCat,
                'sort_order' => 10,
            ],
            [
                'name' => 'Digital Marketing',
                'icon' => 'megaphone',
                'short_description' => 'Data-driven digital marketing strategies that generate leads, build brand presence, and drive growth.',
                'description' => 'Marketing works when it\'s measurable. We build digital marketing campaigns grounded in data — from paid search and social media to email marketing and conversion rate optimization. Every campaign is tracked, analyzed, and refined.',
                'benefits' => ['PPC campaign management', 'Social media marketing', 'Email marketing automation', 'Conversion rate optimization', 'Analytics and reporting'],
                'technologies' => ['Google Ads', 'Meta Ads', 'Mailchimp', 'Google Analytics', 'HubSpot'],
                'service_category_id' => $marketingCat,
                'sort_order' => 11,
            ],
            [
                'name' => 'Branding',
                'icon' => 'award',
                'short_description' => 'Brand identity design that communicates your values, differentiates your business, and builds recognition.',
                'description' => 'A strong brand is more than a logo. We develop complete brand identities — visual language, tone, positioning, and guidelines — that help businesses stand out in competitive markets.',
                'benefits' => ['Logo and visual identity', 'Brand guidelines', 'Brand positioning strategy', 'Marketing collateral', 'Brand consistency across channels'],
                'technologies' => ['Figma', 'Adobe Creative Suite', 'Brand Guidelines'],
                'service_category_id' => $designCat,
                'sort_order' => 12,
            ],
            [
                'name' => 'Business Automation',
                'icon' => 'zap',
                'short_description' => 'Streamline operations with custom automation that eliminates repetitive tasks and reduces errors.',
                'description' => 'Manual processes slow businesses down. We identify bottlenecks in your operations and build automation solutions — from invoice processing to workflow management — that save time, reduce errors, and free your team for higher-value work.',
                'benefits' => ['Workflow automation', 'Document processing', 'Integration between systems', 'Scheduled tasks and reporting', 'Custom dashboards'],
                'technologies' => ['Laravel', 'Python', 'Zapier', 'API Integration', 'Redis', 'Queue systems'],
                'service_category_id' => $bizCat,
                'sort_order' => 13,
            ],
            [
                'name' => 'Billing & Business Software',
                'icon' => 'receipt',
                'short_description' => 'Custom billing, invoicing, and business management software tailored to your operational needs.',
                'description' => 'We build billing and business management software that handles the complexity of real-world operations — GST-compliant invoicing, multi-party billing, inventory management, and financial reporting, all tailored to Indian and global business requirements.',
                'benefits' => ['GST-compliant invoicing', 'Automated billing cycles', 'Financial reporting', 'Inventory management', 'Multi-currency support'],
                'technologies' => ['Laravel', 'PHP', 'MySQL', 'Razorpay', 'PDF generation'],
                'service_category_id' => $bizCat,
                'sort_order' => 14,
            ],
            [
                'name' => 'Web Applications',
                'icon' => 'layout',
                'short_description' => 'Complex web applications with real-time capabilities, role-based access, and enterprise-grade reliability.',
                'description' => 'We build web applications that handle complexity — multi-user dashboards, real-time collaboration tools, data visualization platforms, and more. Every application is designed for reliability, security, and scale.',
                'benefits' => ['Real-time capabilities', 'Role-based access control', 'Data visualization', 'API integrations', 'Progressive web app support'],
                'technologies' => ['Laravel', 'Vue.js', 'React', 'WebSockets', 'Redis', 'PostgreSQL'],
                'service_category_id' => $devCat,
                'sort_order' => 15,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }

    private function seedIndustries(): void
    {
        $industries = [
            [
                'name' => 'Healthcare',
                'icon' => 'heart-pulse',
                'short_description' => 'Digital health solutions that improve patient care, streamline operations, and ensure regulatory compliance.',
                'problem' => 'Healthcare providers struggle with fragmented patient data, manual scheduling, and compliance with evolving regulations like HIPAA and DISHA.',
                'solution' => 'We build integrated health platforms — patient portals, telemedicine systems, EHR integrations, and clinical dashboards — that connect care providers with the data they need.',
                'technologies' => ['HIPAA-compliant architecture', 'HL7/FHIR integration', 'Telemedicine', 'Patient portals', 'Clinical dashboards'],
                'potential_products' => ['Patient management systems', 'Telemedicine platforms', 'Health data analytics', 'Appointment scheduling', 'Lab management'],
                'sort_order' => 1,
            ],
            [
                'name' => 'Education',
                'icon' => 'graduation-cap',
                'short_description' => 'EdTech platforms that make learning accessible, engaging, and measurable across institutions and learners.',
                'problem' => 'Educational institutions face challenges in delivering engaging online content, tracking student progress, and managing administrative workflows across distributed campuses.',
                'solution' => 'We build learning management systems, virtual classrooms, assessment platforms, and institutional management software that bring education into the digital age.',
                'technologies' => ['LMS development', 'Video streaming', 'Assessment engines', 'Analytics', 'Mobile learning'],
                'potential_products' => ['Learning management systems', 'Virtual classrooms', 'Exam platforms', 'Student portals', 'Content delivery networks'],
                'sort_order' => 2,
            ],
            [
                'name' => 'FinTech',
                'icon' => 'landmark',
                'short_description' => 'Secure financial technology solutions that handle payments, compliance, and real-time transaction processing.',
                'problem' => 'Financial services need to balance rapid innovation with strict regulatory compliance, security requirements, and the need for real-time processing.',
                'solution' => 'We develop secure payment processing systems, KYC/AML compliance tools, financial dashboards, and investment platforms with enterprise-grade security and audit trails.',
                'technologies' => ['Payment gateways', 'KYC/AML', 'Real-time processing', 'Encryption', 'Audit systems'],
                'potential_products' => ['Payment platforms', 'Investment dashboards', 'Lending systems', 'Compliance tools', 'Financial analytics'],
                'sort_order' => 3,
            ],
            [
                'name' => 'E-commerce',
                'icon' => 'shopping-bag',
                'short_description' => 'Commerce platforms that convert visitors into customers through speed, personalization, and seamless checkout.',
                'problem' => 'Online retailers face high cart abandonment, slow page loads, poor mobile experiences, and difficulty personalizing the shopping journey at scale.',
                'solution' => 'We build high-performance e-commerce platforms with optimized checkout flows, AI-powered recommendations, inventory management, and analytics that drive revenue growth.',
                'technologies' => ['Headless commerce', 'Payment integration', 'Recommendation engines', 'Inventory management', 'Analytics'],
                'potential_products' => ['Custom storefronts', 'Marketplace platforms', 'B2B commerce', 'Subscription commerce', 'Omnichannel solutions'],
                'sort_order' => 4,
            ],
            [
                'name' => 'Real Estate',
                'icon' => 'building',
                'short_description' => 'PropTech solutions for property listing, virtual tours, CRM, and transaction management.',
                'problem' => 'Real estate businesses manage complex property portfolios, lead pipelines, and transaction workflows across multiple stakeholders and locations.',
                'solution' => 'We build property listing platforms, CRM systems, virtual tour experiences, and transaction management tools that streamline real estate operations.',
                'technologies' => ['Property listings', 'Virtual tours', 'CRM', 'Map integration', 'Document management'],
                'potential_products' => ['Property portals', 'Agent CRM', 'Virtual tour platforms', 'Property management systems', 'Lead management'],
                'sort_order' => 5,
            ],
            [
                'name' => 'Travel & Hospitality',
                'icon' => 'plane',
                'short_description' => 'Travel technology that simplifies booking, enhances guest experiences, and optimizes operations.',
                'problem' => 'Travel and hospitality businesses need to manage bookings, inventory, guest communications, and reviews across multiple channels and platforms.',
                'solution' => 'We develop booking engines, property management systems, guest experience platforms, and channel management tools for hotels, travel agencies, and tour operators.',
                'technologies' => ['Booking engines', 'Channel management', 'Guest portals', 'Payment processing', 'Review management'],
                'potential_products' => ['Booking platforms', 'Hotel management systems', 'Tour operator software', 'Travel marketplaces', 'Guest apps'],
                'sort_order' => 6,
            ],
            [
                'name' => 'Food & Restaurant',
                'icon' => 'utensils',
                'short_description' => 'Restaurant technology for ordering, delivery, inventory, and customer engagement.',
                'problem' => 'Restaurants and food businesses struggle with managing online orders, delivery logistics, kitchen operations, and customer loyalty across multiple locations.',
                'solution' => 'We build ordering systems, kitchen display systems, delivery management platforms, and loyalty programs that help food businesses serve more customers efficiently.',
                'technologies' => ['Online ordering', 'POS integration', 'Delivery management', 'Kitchen display', 'Loyalty programs'],
                'potential_products' => ['Online ordering platforms', 'Restaurant POS', 'Delivery apps', 'Menu management', 'Loyalty systems'],
                'sort_order' => 7,
            ],
            [
                'name' => 'Manufacturing',
                'icon' => 'factory',
                'short_description' => 'Industrial software for production planning, quality control, and supply chain management.',
                'problem' => 'Manufacturing businesses manage complex production schedules, quality requirements, inventory levels, and supply chain coordination with limited real-time visibility.',
                'solution' => 'We develop MES, quality management, inventory tracking, and supply chain visibility tools that give manufacturers real-time control over their operations.',
                'technologies' => ['IoT integration', 'Production planning', 'Quality management', 'Inventory tracking', 'Supply chain analytics'],
                'potential_products' => ['MES systems', 'Quality control software', 'Inventory management', 'Supply chain platforms', 'Production dashboards'],
                'sort_order' => 8,
            ],
            [
                'name' => 'Logistics',
                'icon' => 'truck',
                'short_description' => 'Logistics software for fleet management, route optimization, and real-time shipment tracking.',
                'problem' => 'Logistics companies manage complex delivery networks, fleet operations, and customer expectations with limited real-time tracking and optimization capabilities.',
                'solution' => 'We build fleet management systems, route optimization engines, shipment tracking platforms, and warehouse management tools that improve delivery performance.',
                'technologies' => ['GPS tracking', 'Route optimization', 'Warehouse management', 'Real-time tracking', 'API integration'],
                'potential_products' => ['Fleet management', 'Route planners', 'Tracking platforms', 'Warehouse systems', 'Last-mile delivery'],
                'sort_order' => 9,
            ],
            [
                'name' => 'Agriculture',
                'icon' => 'leaf',
                'short_description' => 'AgriTech solutions for crop monitoring, supply chain, and farm management.',
                'problem' => 'Agricultural businesses need better tools for crop monitoring, market access, supply chain coordination, and data-driven decision making across distributed operations.',
                'solution' => 'We develop farm management systems, crop monitoring tools, marketplace platforms, and supply chain solutions that connect farmers with markets and data.',
                'technologies' => ['IoT sensors', 'Satellite imagery', 'Supply chain', 'Marketplace platforms', 'Data analytics'],
                'potential_products' => ['Farm management systems', 'Crop monitoring', 'Agricultural marketplaces', 'Supply chain tools', 'Weather analytics'],
                'sort_order' => 10,
            ],
            [
                'name' => 'Professional Services',
                'icon' => 'briefcase',
                'short_description' => 'Business management software for consulting firms, agencies, and professional service providers.',
                'problem' => 'Professional service firms need to manage projects, track time, handle billing, and maintain client relationships across distributed teams and engagements.',
                'solution' => 'We build project management platforms, time tracking systems, client portals, and billing software that help service businesses run efficiently.',
                'technologies' => ['Project management', 'Time tracking', 'Client portals', 'Billing systems', 'Reporting'],
                'potential_products' => ['Project management tools', 'Client portals', 'Time and billing software', 'Resource management', 'Proposal systems'],
                'sort_order' => 11,
            ],
            [
                'name' => 'Startups',
                'icon' => 'rocket',
                'short_description' => 'MVP development and product engineering for startups building their first product or scaling to the next stage.',
                'problem' => 'Startups need to move fast, validate ideas quickly, and build products that can scale — all while managing limited resources and evolving requirements.',
                'solution' => 'We help startups go from idea to MVP to scale. Our agile engineering process delivers working products quickly while building foundations that can handle growth.',
                'technologies' => ['MVP development', 'Rapid prototyping', 'Scalable architecture', 'Cloud deployment', 'Analytics'],
                'potential_products' => ['MVP platforms', 'SaaS products', 'Mobile apps', 'Marketplace platforms', 'Internal tools'],
                'sort_order' => 12,
            ],
        ];

        foreach ($industries as $industry) {
            Industry::create($industry);
        }
    }

    private function seedTechnologyCategories(): void
    {
        $categories = [
            ['name' => 'Frontend', 'sort_order' => 1],
            ['name' => 'Backend', 'sort_order' => 2],
            ['name' => 'Mobile', 'sort_order' => 3],
            ['name' => 'AI / ML', 'sort_order' => 4],
            ['name' => 'Cloud', 'sort_order' => 5],
            ['name' => 'Database', 'sort_order' => 6],
            ['name' => 'DevOps', 'sort_order' => 7],
            ['name' => 'Analytics & Payments', 'sort_order' => 8],
        ];

        foreach ($categories as $cat) {
            TechnologyCategory::create($cat);
        }
    }

    private function seedTechnologies(): void
    {
        $categories = TechnologyCategory::all()->pluck('id', 'name');

        $technologies = [
            // Frontend
            ['name' => 'JavaScript', 'category' => 'Frontend', 'color' => '#F7DF1E'],
            ['name' => 'TypeScript', 'category' => 'Frontend', 'color' => '#3178C6'],
            ['name' => 'React', 'category' => 'Frontend', 'color' => '#61DAFB'],
            ['name' => 'Vue.js', 'category' => 'Frontend', 'color' => '#4FC08D'],
            ['name' => 'Tailwind CSS', 'category' => 'Frontend', 'color' => '#06B6D4'],
            ['name' => 'Alpine.js', 'category' => 'Frontend', 'color' => '#8BC0D0'],
            ['name' => 'Next.js', 'category' => 'Frontend', 'color' => '#000000'],

            // Backend
            ['name' => 'Laravel', 'category' => 'Backend', 'color' => '#FF2D20'],
            ['name' => 'PHP', 'category' => 'Backend', 'color' => '#777BB4'],
            ['name' => 'Node.js', 'category' => 'Backend', 'color' => '#339933'],
            ['name' => 'Python', 'category' => 'Backend', 'color' => '#3776AB'],

            // Mobile
            ['name' => 'React Native', 'category' => 'Mobile', 'color' => '#61DAFB'],
            ['name' => 'Flutter', 'category' => 'Mobile', 'color' => '#02569B'],
            ['name' => 'Swift', 'category' => 'Mobile', 'color' => '#FA7343'],
            ['name' => 'Kotlin', 'category' => 'Mobile', 'color' => '#7F52FF'],

            // AI/ML
            ['name' => 'TensorFlow', 'category' => 'AI / ML', 'color' => '#FF6F00'],
            ['name' => 'PyTorch', 'category' => 'AI / ML', 'color' => '#EE4C2C'],
            ['name' => 'OpenAI', 'category' => 'AI / ML', 'color' => '#412991'],
            ['name' => 'LangChain', 'category' => 'AI / ML', 'color' => '#1C3C3C'],
            ['name' => 'Hugging Face', 'category' => 'AI / ML', 'color' => '#FFD21E'],

            // Cloud
            ['name' => 'AWS', 'category' => 'Cloud', 'color' => '#FF9900'],
            ['name' => 'Google Cloud', 'category' => 'Cloud', 'color' => '#4285F4'],
            ['name' => 'Azure', 'category' => 'Cloud', 'color' => '#0089D6'],
            ['name' => 'DigitalOcean', 'category' => 'Cloud', 'color' => '#0080FF'],

            // Database
            ['name' => 'MySQL', 'category' => 'Database', 'color' => '#4479A1'],
            ['name' => 'PostgreSQL', 'category' => 'Database', 'color' => '#4169E1'],
            ['name' => 'MongoDB', 'category' => 'Database', 'color' => '#47A248'],
            ['name' => 'Redis', 'category' => 'Database', 'color' => '#DC382D'],

            // DevOps
            ['name' => 'Docker', 'category' => 'DevOps', 'color' => '#2496ED'],
            ['name' => 'GitHub Actions', 'category' => 'DevOps', 'color' => '#2088FF'],
            ['name' => 'Nginx', 'category' => 'DevOps', 'color' => '#009639'],
            ['name' => 'Linux', 'category' => 'DevOps', 'color' => '#FCC624'],

            // Analytics & Payments
            ['name' => 'Google Analytics', 'category' => 'Analytics & Payments', 'color' => '#E37400'],
            ['name' => 'Stripe', 'category' => 'Analytics & Payments', 'color' => '#635BFF'],
            ['name' => 'Razorpay', 'category' => 'Analytics & Payments', 'color' => '#0C2451'],
        ];

        foreach ($technologies as $tech) {
            Technology::create([
                'name' => $tech['name'],
                'color' => $tech['color'],
                'technology_category_id' => $categories[$tech['category']],
            ]);
        }
    }

    private function seedPortfolioCategories(): void
    {
        $categories = ['Web', 'Mobile', 'AI', 'SaaS', 'E-commerce', 'Healthcare', 'FinTech', 'EdTech'];

        foreach ($categories as $i => $cat) {
            PortfolioCategory::create(['name' => $cat, 'sort_order' => $i + 1]);
        }
    }

    private function seedPortfolioProjects(): void
    {
        $webCat = PortfolioCategory::where('name', 'Web')->first()->id;
        $aiCat = PortfolioCategory::where('name', 'AI')->first()->id;
        $saasCat = PortfolioCategory::where('name', 'SaaS')->first()->id;
        $ecomCat = PortfolioCategory::where('name', 'E-commerce')->first()->id;
        $healthCat = PortfolioCategory::where('name', 'Healthcare')->first()->id;

        // NOTE: These are demo projects. Replace with actual portfolio data from admin panel.
        $projects = [
            [
                'title' => 'Healthcare Patient Portal',
                'short_description' => 'A comprehensive patient management and telemedicine platform for a healthcare provider.',
                'portfolio_category_id' => $healthCat,
                'is_featured' => true,
                'sort_order' => 1,
            ],
            [
                'title' => 'AI-Powered Document Intelligence',
                'short_description' => 'Automated document processing system using computer vision and NLP for a financial services firm.',
                'portfolio_category_id' => $aiCat,
                'is_featured' => true,
                'sort_order' => 2,
            ],
            [
                'title' => 'Multi-vendor E-commerce Platform',
                'short_description' => 'Scalable marketplace platform with real-time inventory, payment processing, and vendor management.',
                'portfolio_category_id' => $ecomCat,
                'is_featured' => true,
                'sort_order' => 3,
            ],
            [
                'title' => 'SaaS Project Management Tool',
                'short_description' => 'Multi-tenant project management SaaS with time tracking, billing, and client portals.',
                'portfolio_category_id' => $saasCat,
                'is_featured' => true,
                'sort_order' => 4,
            ],
            [
                'title' => 'Restaurant Chain Ordering System',
                'short_description' => 'Online ordering and kitchen management system for a multi-location restaurant chain.',
                'portfolio_category_id' => $webCat,
                'sort_order' => 5,
            ],
            [
                'title' => 'Real Estate Listing Platform',
                'short_description' => 'Property listing and search platform with virtual tours and lead management.',
                'portfolio_category_id' => $webCat,
                'sort_order' => 6,
            ],
            [
                'title' => 'EdTech Learning Management System',
                'short_description' => 'Comprehensive LMS with live classes, assessments, and progress analytics.',
                'portfolio_category_id' => $saasCat,
                'sort_order' => 7,
            ],
            [
                'title' => 'AI Chatbot for Customer Support',
                'short_description' => 'Intelligent chatbot with RAG-powered knowledge base for automated customer support.',
                'portfolio_category_id' => $aiCat,
                'sort_order' => 8,
            ],
        ];

        foreach ($projects as $project) {
            PortfolioProject::create($project);
        }
    }

    private function seedCaseStudies(): void
    {
        $project = PortfolioProject::where('title', 'Healthcare Patient Portal')->first();

        // NOTE: This is demo data. Replace with actual case study content from admin panel.
        CaseStudy::create([
            'title' => 'Building a Patient Portal That Reduced Administrative Load by 40%',
            'portfolio_project_id' => $project?->id,
            'client' => 'Healthcare Provider (Name confidential)',
            'industry' => 'Healthcare',
            'duration' => '4 months',
            'challenge' => 'The client operated multiple clinics with paper-based patient management. Appointment scheduling, medical records, and billing were fragmented across locations, leading to long wait times and administrative overhead.',
            'business_context' => 'With growing patient volume, the client needed a digital system that could unify operations across clinics while maintaining strict data privacy compliance.',
            'solution' => 'We designed and built a comprehensive patient portal with appointment scheduling, secure medical records, telemedicine video consultations, and integrated billing. The system was built with role-based access for doctors, nurses, and administrators.',
            'design_approach' => 'We prioritized simplicity and accessibility. The interface was designed for patients of all ages and technical abilities, with large touch targets, clear navigation, and multi-language support.',
            'architecture' => 'Built on Laravel with a PostgreSQL database, Redis caching, and WebSocket-based real-time notifications. The telemedicine module used WebRTC for peer-to-peer video calls.',
            'technologies_used' => ['Laravel', 'PostgreSQL', 'Redis', 'WebRTC', 'Tailwind CSS', 'Alpine.js'],
            'implementation' => 'The project followed an agile process with 2-week sprints. We deployed incrementally — starting with appointment scheduling, then adding medical records, telemedicine, and billing over 4 months.',
            'results' => ['Selected project details available upon request.'],
            'is_published' => true,
        ]);
    }

    private function seedTestimonials(): void
    {
        // NOTE: These are demo testimonials. Replace with verified testimonials from admin panel.
        $testimonials = [
            [
                'name' => 'Demo Client',
                'role' => 'CTO',
                'company' => 'Demo Company',
                'rating' => 5,
                'testimonial' => 'This is demo testimonial content. Please replace with actual client testimonials through the admin panel.',
                'project' => 'Demo Project',
                'is_published' => false, // Unpublished by default — admin must add real testimonials
            ],
        ];

        foreach ($testimonials as $t) {
            Testimonial::create($t);
        }
    }

    private function seedTeamMembers(): void
    {
        // NOTE: Replace with actual team data from admin panel.
        $members = [
            [
                'name' => 'Team Member',
                'role' => 'Founder & CEO',
                'bio' => 'Demo team member. Please update with actual team data through the admin panel.',
                'is_published' => false, // Unpublished — admin must add real team data
                'sort_order' => 1,
            ],
        ];

        foreach ($members as $member) {
            TeamMember::create($member);
        }
    }

    private function seedBlogCategories(): void
    {
        $categories = [
            'AI', 'Technology', 'Software Development', 'Digital Transformation',
            'Business', 'SEO', 'Cybersecurity', 'Cloud', 'E-commerce',
        ];

        foreach ($categories as $i => $cat) {
            BlogCategory::create(['name' => $cat, 'sort_order' => $i + 1]);
        }
    }

    private function seedBlogTags(): void
    {
        $tags = [
            'Laravel', 'PHP', 'JavaScript', 'AI', 'Machine Learning',
            'React', 'Vue.js', 'Cloud Computing', 'DevOps', 'Startup',
            'SaaS', 'E-commerce', 'SEO', 'Digital Marketing', 'UI/UX',
        ];

        foreach ($tags as $tag) {
            BlogTag::create(['name' => $tag]);
        }
    }

    private function seedBlogPosts(): void
    {
        $admin = User::first();
        $aiCat = BlogCategory::where('name', 'AI')->first()->id;
        $techCat = BlogCategory::where('name', 'Technology')->first()->id;
        $devCat = BlogCategory::where('name', 'Software Development')->first()->id;

        $posts = [
            [
                'title' => 'How AI Agents Are Reshaping Business Operations in 2026',
                'excerpt' => 'AI agents are moving beyond chatbots into autonomous business process management. Here\'s what that means for your organization.',
                'body' => '<p>The landscape of AI in business has shifted dramatically. While 2024 was the year of generative AI experimentation, 2026 is the year of AI agents — autonomous systems that can plan, execute, and adapt workflows with minimal human oversight.</p><h2>What Are AI Agents?</h2><p>Unlike traditional chatbots or simple automation, AI agents combine large language models with tool use, memory, and planning capabilities. They can break complex tasks into steps, use external tools and APIs, and learn from outcomes to improve over time.</p><h2>Real Business Applications</h2><p>We\'re seeing AI agents deployed across several domains: customer support workflows that handle complex multi-step inquiries, document processing pipelines that extract, validate, and route information, and sales intelligence systems that research prospects and draft personalized outreach.</p><h2>Getting Started</h2><p>The key to successful AI agent deployment is starting with well-defined, bounded processes. Pick a workflow that\'s repetitive, rules-based, and currently requires significant human time. Build the agent with clear guardrails, monitoring, and human oversight for edge cases.</p>',
                'blog_category_id' => $aiCat,
                'author_id' => $admin->id,
                'reading_time' => 5,
                'is_featured' => true,
                'status' => 'published',
                'published_at' => now()->subDays(3),
            ],
            [
                'title' => 'Why Laravel Remains the Best PHP Framework for Enterprise Applications',
                'excerpt' => 'With Laravel 13 bringing AI SDK support and PHP attributes, the framework continues to evolve as the top choice for serious web applications.',
                'body' => '<p>Laravel has been the dominant PHP framework for over a decade, and Laravel 13 makes a strong case for why that will continue. With production-stable AI SDK support, PHP attributes for configuration, and passkey authentication, the framework keeps pace with modern development needs.</p><h2>Enterprise-Ready Architecture</h2><p>Laravel\'s strength lies in its convention-over-configuration approach combined with the flexibility needed for complex business applications. Queue workers, event broadcasting, scheduled tasks, caching layers — these are first-class citizens, not afterthoughts.</p><h2>The Ecosystem Advantage</h2><p>Packages like Filament for admin panels, Livewire for reactive interfaces, and Sanctum for API authentication mean teams can move fast without sacrificing quality. The ecosystem is mature, well-documented, and actively maintained.</p>',
                'blog_category_id' => $techCat,
                'author_id' => $admin->id,
                'reading_time' => 4,
                'status' => 'published',
                'published_at' => now()->subDays(7),
            ],
            [
                'title' => 'Building Scalable SaaS Applications: Architecture Decisions That Matter',
                'excerpt' => 'The architectural decisions you make early in a SaaS product\'s lifecycle determine how well it scales. Here are the ones that matter most.',
                'body' => '<p>Building a SaaS product is straightforward. Building a SaaS product that scales to thousands of tenants without architectural rewrites is a different challenge entirely. The decisions you make in the first few months of development compound over years.</p><h2>Multi-Tenancy Strategy</h2><p>The most fundamental decision is your multi-tenancy approach. Database-per-tenant offers isolation but increases operational complexity. Shared database with tenant columns is simpler but requires careful query scoping. The right choice depends on your data sensitivity requirements and expected tenant count.</p><h2>Queue Architecture</h2><p>Offload everything you can to background queues. Email sending, report generation, webhook dispatching, data imports — these should never block your web request cycle. Design your queue infrastructure to be horizontally scalable from day one.</p>',
                'blog_category_id' => $devCat,
                'author_id' => $admin->id,
                'reading_time' => 6,
                'status' => 'published',
                'published_at' => now()->subDays(14),
            ],
        ];

        foreach ($posts as $post) {
            BlogPost::create($post);
        }
    }

    private function seedFaqs(): void
    {
        $faqs = [
            [
                'question' => 'What technologies does Intoxia Technologies work with?',
                'answer' => 'We work primarily with Laravel, PHP, JavaScript/TypeScript, Python, React, Vue.js, and modern cloud platforms like AWS. For AI projects, we use TensorFlow, PyTorch, OpenAI APIs, and LangChain. Our technology choices are driven by project requirements, not trends.',
                'category' => 'General',
                'sort_order' => 1,
            ],
            [
                'question' => 'How long does a typical project take?',
                'answer' => 'Project timelines vary based on scope and complexity. A simple marketing website takes 2-4 weeks. A custom web application takes 2-4 months. A complex SaaS or AI platform can take 4-8 months. We provide detailed timeline estimates during our discovery phase.',
                'category' => 'General',
                'sort_order' => 2,
            ],
            [
                'question' => 'Do you work with startups?',
                'answer' => 'Yes. We help startups move from idea to MVP to scale. Our agile process is designed to deliver working products quickly while building foundations that can handle growth. We understand the constraints startups face and design our engagement accordingly.',
                'category' => 'General',
                'sort_order' => 3,
            ],
            [
                'question' => 'What is your development process?',
                'answer' => 'We follow a structured process: Discover → Strategize → Design → Build → Test → Launch → Scale. Each phase has clear deliverables and client checkpoints. We work in agile sprints with regular demos and feedback loops.',
                'category' => 'Process',
                'sort_order' => 4,
            ],
            [
                'question' => 'Do you provide ongoing support and maintenance?',
                'answer' => 'Yes. We offer ongoing support and maintenance packages that include bug fixes, security updates, performance monitoring, and feature enhancements. We believe in long-term partnerships, not one-off projects.',
                'category' => 'Process',
                'sort_order' => 5,
            ],
            [
                'question' => 'How do you handle project communication?',
                'answer' => 'We use a combination of project management tools, regular video calls, and async communication. You\'ll have direct access to your project team and regular progress updates. We believe in transparent, proactive communication.',
                'category' => 'Process',
                'sort_order' => 6,
            ],
            [
                'question' => 'What are your pricing models?',
                'answer' => 'We offer both fixed-price and time-and-materials pricing depending on project requirements. Fixed-price works well for well-defined projects. Time-and-materials provides flexibility for evolving requirements. We provide detailed proposals after our discovery phase.',
                'category' => 'Pricing',
                'sort_order' => 7,
            ],
            [
                'question' => 'Do you sign NDAs?',
                'answer' => 'Yes. We\'re happy to sign non-disclosure agreements before any detailed discussions. We take client confidentiality seriously and have secure processes for handling sensitive business information.',
                'category' => 'General',
                'sort_order' => 8,
            ],
            [
                'question' => 'Can you work with our existing codebase?',
                'answer' => 'Absolutely. We regularly work with existing codebases — whether that\'s adding features, fixing performance issues, or refactoring for scalability. We start with a thorough code audit to understand the current state before recommending improvements.',
                'category' => 'Technical',
                'sort_order' => 9,
            ],
            [
                'question' => 'Where is Intoxia Technologies located?',
                'answer' => 'We\'re based in New Delhi, India (Jasola, South Delhi). We work with clients across India and internationally, with effective communication processes for distributed collaboration.',
                'category' => 'General',
                'sort_order' => 10,
            ],
        ];

        foreach ($faqs as $faq) {
            Faq::create($faq);
        }
    }
}
