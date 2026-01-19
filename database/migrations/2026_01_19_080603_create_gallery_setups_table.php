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
        Schema::create('gallery_setups', function (Blueprint $table) {
            $table->id();
            $table->string('FeaturedImage');
            $table->foreignId('Category_id')->nullable()->constrained('gallery_categories')->cascadeOnDelete();
            $table->boolean('IsActive')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gallery_setups');
    }
};
