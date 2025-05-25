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
        Schema::create('carousel_translations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('carousel_id'); // ✅ must be unsigned
            $table->string('locale')->index();
            $table->string('title');
            $table->text('description')->nullable();
            $table->timestamps();

            $table->foreign('carousel_id')
                ->references('id')
                ->on('carousels')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carousel_translations');
    }
};
