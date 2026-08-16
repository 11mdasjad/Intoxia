<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class TeamMember extends Model
{
    use HasSlug, SoftDeletes;

    protected $fillable = [
        'name', 'slug', 'role', 'photo', 'bio',
        'linkedin', 'twitter', 'github',
        'is_published', 'sort_order',
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

    public function scopePublished($query)
    {
        return $query->where('is_published', true);
    }
}
