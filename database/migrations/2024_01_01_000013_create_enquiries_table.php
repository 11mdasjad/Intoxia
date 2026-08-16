<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('company')->nullable();
            $table->string('service')->nullable();
            $table->string('budget')->nullable();
            $table->string('timeline')->nullable();
            $table->text('message');
            $table->string('source')->default('website');
            $table->enum('status', ['new', 'contacted', 'qualified', 'proposal_sent', 'won', 'lost'])->default('new');
            $table->foreignId('assigned_to')->nullable()->constrained('users')->nullOnDelete();
            $table->string('ip_address')->nullable();
            $table->string('user_agent', 500)->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index('status');
            $table->index('created_at');
        });

        Schema::create('enquiry_notes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('enquiry_id')->constrained()->cascadeOnDelete();
            $table->foreignId('user_id')->nullable()->constrained()->nullOnDelete();
            $table->text('note');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('enquiry_notes');
        Schema::dropIfExists('enquiries');
    }
};
