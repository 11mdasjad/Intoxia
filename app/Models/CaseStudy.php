<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class CaseStudy extends Model
{
    use HasSlug, SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'portfolio_project_id', 'client', 'industry',
        'duration', 'hero_image', 'challenge', 'business_context',
        'solution', 'design_approach', 'architecture', 'technologies_used',
        'implementation', 'results', 'screenshots', 'testimonial_quote',
        'testimonial_name', 'testimonial_role', 'lessons_learned',
        'is_published', 'sort_order',
        'seo_title', 'seo_description', 'og_image',
    ];

    protected function casts(): array
    {
        return [
            'technologies_used' => 'array',
            'results' => 'array',
            'screenshots' => 'array',
            'is_published' => 'boolean',
        ];
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()->generateSlugsFrom('title')->saveSlugsTo('slug');
    }

    public function project(): BelongsTo
    {
        return $this->belongsTo(PortfolioProject::class, 'portfolio_project_id');
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
