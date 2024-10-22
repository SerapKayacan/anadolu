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
        Schema::create('service_categories', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug')->unique();
            $table->text('meta_description')->nullable();
            $table->text('meta_keywords')->nullable();
            $table->text('home_page_detail')->nullable();
            $table->text('category_page_detail')->nullable();
            $table->text('icon')->nullable();
            $table->enum('type', ['online', 'home_office', 'online_or_home_office']);
            $table->integer('sort_order')->nullable();
            $table->boolean('is_show_home_page')->default(true);
            $table->boolean('is_show_service_page')->default(true);
            $table->integer('home_page_colspan')->default(1);
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_categories');
    }
};
