<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class TechnologyCategory extends Model
{
    use HasSlug;

    protected $fillable = ['name', 'slug', 'sort_order'];

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()->generateSlugsFrom('name')->saveSlugsTo('slug');
    }

    public function technologies(): HasMany
    {
        return $this->hasMany(Technology::class);
    }
}
