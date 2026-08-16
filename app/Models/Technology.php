<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class Technology extends Model
{
    use HasSlug;

    protected $fillable = [
        'name', 'slug', 'icon', 'color',
        'technology_category_id', 'is_published', 'sort_order',
    ];

    protected function casts(): array
    {
        return [
            'is_published' => 'boolean',
        ];
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()->generateSlugsFrom('name')->saveSlugsTo('slug');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(TechnologyCategory::class, 'technology_category_id');
    }

    public function projects(): BelongsToMany
    {
        return $this->belongsToMany(PortfolioProject::class, 'portfolio_project_technology');
    }

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }
}
