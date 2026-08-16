<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Service extends Model
{
    use HasSlug, SoftDeletes;

    protected $fillable = [
        'name', 'slug', 'icon', 'short_description', 'description',
        'benefits', 'technologies', 'process', 'deliverables',
        'cta_text', 'cta_url', 'image', 'hero_image',
        'service_category_id', 'is_featured', 'is_published', 'sort_order',
        'seo_title', 'seo_description', 'og_image',
    ];

    protected function casts(): array
    {
        return [
            'benefits' => 'array',
            'technologies' => 'array',
            'process' => 'array',
            'deliverables' => 'array',
            'is_featured' => 'boolean',
            'is_published' => 'boolean',
        ];
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()->generateSlugsFrom('name')->saveSlugsTo('slug');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(ServiceCategory::class, 'service_category_id');
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
