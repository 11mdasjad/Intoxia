<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class PortfolioProject extends Model
{
    use HasSlug, SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'client', 'short_description', 'description',
        'image', 'hero_image', 'gallery', 'website_url',
        'portfolio_category_id', 'is_featured', 'is_published', 'sort_order',
        'seo_title', 'seo_description', 'og_image',
    ];

    protected function casts(): array
    {
        return [
            'gallery' => 'array',
            'is_featured' => 'boolean',
            'is_published' => 'boolean',
        ];
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()->generateSlugsFrom('title')->saveSlugsTo('slug');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(PortfolioCategory::class, 'portfolio_category_id');
    }

    public function technologies(): BelongsToMany
    {
        return $this->belongsToMany(Technology::class, 'portfolio_project_technology');
    }

    public function caseStudy(): HasOne
    {
        return $this->hasOne(CaseStudy::class);
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
