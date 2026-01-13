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
        Schema::create('home_page_setups', function (Blueprint $table) {
            $table->id();
            $table->string('Title1')->nullable();
            $table->text('Description1')->nullable();
            $table->string('Slug1')->nullable();

            $table->string('Title2')->nullable();
            $table->text('Description2')->nullable();
            $table->string('Route2')->nullable();
            $table->string('Slug2')->nullable();

            $table->string('Title3')->nullable();
            $table->text('Description3')->nullable();
            $table->string('FeaturedImage3')->nullable();
            $table->string('Slug3')->nullable();

            $table->string('Title4')->nullable();
            $table->text('Description4')->nullable();
            $table->string('Route4')->nullable();
            $table->string('Slug4')->nullable();

            $table->boolean('Is_active')->default(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_page_setups');
    }
};
