<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('case_studies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->foreignId('portfolio_project_id')->nullable()->constrained()->nullOnDelete();
            $table->string('client')->nullable();
            $table->string('industry')->nullable();
            $table->string('duration')->nullable();
            $table->string('hero_image')->nullable();
            $table->text('challenge')->nullable();
            $table->text('business_context')->nullable();
            $table->text('solution')->nullable();
            $table->text('design_approach')->nullable();
            $table->text('architecture')->nullable();
            $table->json('technologies_used')->nullable();
            $table->text('implementation')->nullable();
            $table->json('results')->nullable();
            $table->json('screenshots')->nullable();
            $table->text('testimonial_quote')->nullable();
            $table->string('testimonial_name')->nullable();
            $table->string('testimonial_role')->nullable();
            $table->text('lessons_learned')->nullable();
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
        Schema::dropIfExists('case_studies');
    }
};
