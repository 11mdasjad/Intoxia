<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class PortfolioCategory extends Model
{
    use HasSlug;

    protected $fillable = ['name', 'slug', 'sort_order'];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()->generateSlugsFrom('name')->saveSlugsTo('slug');
    }

    public function projects(): HasMany
    {
        return $this->hasMany(PortfolioProject::class);
    }
}
