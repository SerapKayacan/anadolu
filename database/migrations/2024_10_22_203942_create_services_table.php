<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title',300);
            $table->string('slug',300);
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('category_page_detail')->nullable();
            $table->text('sort_detail')->nullable();
            $table->text('detail')->nullable();
            $table->text('faqs')->nullable();
            $table->string('banner_image')->nullable();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('service_categories')->onDelete('cascade');
            $table->integer('sort_order')->nullable();
            $table->boolean('is_active')->default(true);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
