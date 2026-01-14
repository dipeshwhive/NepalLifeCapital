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
        Schema::create('management_teams', function (Blueprint $table) {
            $table->id();
            $table->string('Name');
            $table->string('Designation');
            $table->text('Description');
            $table->string('FeaturedImage');
            $table->string('LinkedinLink');
            $table->integer('Position')->nullable();
            $table->boolean('IsActive')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('management_teams');
    }
};
