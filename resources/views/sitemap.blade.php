<?xml version="1.0" encoding="UTF-8"?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
    @foreach ($staticRoutes as $route)
        <url>
            <loc>{{ $baseUrl }}{{ $route }}</loc>
            <changefreq>{{ $route === '' ? 'daily' : 'weekly' }}</changefreq>
            <priority>{{ $route === '' ? '1.0' : '0.8' }}</priority>
        </url>
    @endforeach

    @foreach ($services as $service)
        <url>
            <loc>{{ $baseUrl }}/services/{{ $service->slug }}</loc>
            <lastmod>{{ $service->updated_at?->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.9</priority>
        </url>
    @endforeach

    @foreach ($industries as $industry)
        <url>
            <loc>{{ $baseUrl }}/industries/{{ $industry->slug }}</loc>
            <lastmod>{{ $industry->updated_at?->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>weekly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach

    @foreach ($caseStudies as $caseStudy)
        <url>
            <loc>{{ $baseUrl }}/work/{{ $caseStudy->slug }}</loc>
            <lastmod>{{ $caseStudy->updated_at?->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.8</priority>
        </url>
    @endforeach

    @foreach ($posts as $post)
        <url>
            <loc>{{ $baseUrl }}/insights/{{ $post->slug }}</loc>
            <lastmod>{{ $post->updated_at?->tz('UTC')->toAtomString() }}</lastmod>
            <changefreq>monthly</changefreq>
            <priority>0.7</priority>
        </url>
    @endforeach
</urlset>
