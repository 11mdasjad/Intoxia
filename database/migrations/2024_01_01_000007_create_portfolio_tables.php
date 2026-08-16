<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('portfolio_categories', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->integer('sort_order')->default(0);
            $table->timestamps();
        });

        Schema::create('portfolio_projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('client')->nullable();
            $table->string('short_description', 500)->nullable();
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->string('hero_image')->nullable();
            $table->json('gallery')->nullable();
            $table->string('website_url')->nullable();
            $table->foreignId('portfolio_category_id')->nullable()->constrained()->nullOnDelete();
            $table->boolean('is_featured')->default(false);
            $table->boolean('is_published')->default(true);
            $table->integer('sort_order')->default(0);
            $table->string('seo_title')->nullable();
            $table->string('seo_description', 500)->nullable();
            $table->string('og_image')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('portfolio_project_technology', function (Blueprint $table) {
            $table->foreignId('portfolio_project_id')->constrained()->cascadeOnDelete();
            $table->foreignId('technology_id')->constrained()->cascadeOnDelete();
            $table->primary(['portfolio_project_id', 'technology_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('portfolio_project_technology');
        Schema::dropIfExists('portfolio_projects');
        Schema::dropIfExists('portfolio_categories');
    }
};
