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
        Schema::create('service_category_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_category_id');
            $table->string('locale'); // e.g. 'tr', 'en', 'fr'
            $table->string('title')->nullable();

            $table->timestamps();

            $table->foreign('service_category_id')->references('id')->on('service_categories')->onDelete('cascade');
            $table->index(['service_category_id', 'locale']); // for performance
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_category_translations');
    }
};
