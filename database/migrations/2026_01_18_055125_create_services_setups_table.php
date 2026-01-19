<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('services_setups', function (Blueprint $table) {
            $table->id();

            $table->string('Title');
            $table->text('Description');

            $table->string('Slug')->unique();

            $table->string('SubTitle1')->nullable();
            $table->text('SubDescription1')->nullable();

            $table->string('SubTitle2')->nullable();
            $table->text('SubDescription2')->nullable();

            $table->string('FeaturedImage')->nullable();
            
            $table->string('ServiceCategory');

            $table->boolean('ShowInHomePage')->default(false);
            $table->string('Route')->nullable();

            $table->boolean('IsActive')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services_setups');
    }
};
