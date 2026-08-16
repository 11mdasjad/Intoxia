<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class BlogPost extends Model
{
    use HasSlug, SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'excerpt', 'body', 'featured_image',
        'blog_category_id', 'author_id', 'reading_time',
        'is_featured', 'status', 'published_at',
        'seo_title', 'seo_description', 'og_image', 'canonical_url',
    ];

    protected function casts(): array
    {
        return [
            'is_featured' => 'boolean',
            'published_at' => 'datetime',
            'reading_time' => 'integer',
        ];
    }

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()->generateSlugsFrom('title')->saveSlugsTo('slug');
    }

    public function category(): BelongsTo
    {
        return $this->belongsTo(BlogCategory::class, 'blog_category_id');
    }

    public function author(): BelongsTo
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    public function tags(): BelongsToMany
    {
        return $this->belongsToMany(BlogTag::class, 'blog_post_tag');
    }

    public function scopePublished($query)
    {
        return $query->where('status', 'published')
            ->where('published_at', '<=', now());
    }

    public function scopeFeatured($query)
    {
        return $query->where('is_featured', true);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }

    /**
     * Calculate reading time based on body content word count.
     */
    public static function calculateReadingTime(?string $body): int
    {
        if (!$body) {
            return 1;
        }

        $wordCount = str_word_count(strip_tags($body));
        return max(1, (int) ceil($wordCount / 200));
    }
}
