<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('industries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->string('icon')->nullable();
            $table->string('short_description', 500)->nullable();
            $table->text('description')->nullable();
            $table->text('problem')->nullable();
            $table->text('solution')->nullable();
            $table->json('technologies')->nullable();
            $table->json('potential_products')->nullable();
            $table->string('image')->nullable();
            $table->string('hero_image')->nullable();
            $table->boolean('is_published')->default(true);
            $table->integer('sort_order')->default(0);
            $table->string('seo_title')->nullable();
            $table->string('seo_description', 500)->nullable();
            $table->string('og_image')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('industries');
    }
};
