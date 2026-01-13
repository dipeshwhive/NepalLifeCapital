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
        Schema::create('site_settings', function (Blueprint $table) {
            $table->id();
            $table->string('Favicon')->nullable();
            $table->string('SiteLogo')->nullable();
            $table->string('SiteName')->nullable();
            $table->string('Email')->nullable();
            $table->string('Address')->nullable();
            $table->string('PhoneNumber')->nullable();
            $table->string('FooterText')->nullable();
            $table->string('MapLink')->nullable();
            $table->string('FooterDescription')->nullable();
            $table->string('HomeFeaturedImage')->nullable();
            $table->string('HomeTitle')->nullable();
            $table->string('HomeSubTitle')->nullable();
            $table->string('HomeRouteName')->nullable();
            $table->string('NavButtonTitle1')->nullable();
            $table->string('NavButtonsTitle2')->nullable();
            $table->string('NavButtontitle3')->nullable();
            $table->string('NavButtonLink1')->nullable();
            $table->string('NavButtonLink2')->nullable();
            $table->string('NavButtonLink3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_settings');
    }
};
