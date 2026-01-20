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
        Schema::create('form_lists', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->foreignId('CategoryID')->constrained('form_categories')->cascadeOnDelete();
            $table->string('File');
            $table->boolean('IsActive')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_lists');
    }
};
