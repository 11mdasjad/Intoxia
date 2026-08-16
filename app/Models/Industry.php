<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Industry extends Model
{
    use HasSlug, SoftDeletes;

    protected $fillable = [
        'name', 'slug', 'icon', 'short_description', 'description',
        'problem', 'solution', 'technologies', 'potential_products',
        'image', 'hero_image', 'is_published', 'sort_order',
        'seo_title', 'seo_description', 'og_image',
    ];

    protected function casts(): array
    {
        return [
            'technologies' => 'array',
            'potential_products' => 'array',
            'is_published' => 'boolean',
        ];
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()->generateSlugsFrom('name')->saveSlugsTo('slug');
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
