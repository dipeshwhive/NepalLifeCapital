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
        Schema::create('company_profile_setups', function (Blueprint $table) {
            $table->id();
            $table->string('Title')->nullable();
            $table->string('SubTitle')->nullable();
            $table->text('Description')->nullable();
            $table->text('Mission')->nullable();
            $table->text('Vision')->nullable();
            $table->string('FeaturedImage')->nullable();
            $table->string('IsActive')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('company_profile_setups');
    }
};
