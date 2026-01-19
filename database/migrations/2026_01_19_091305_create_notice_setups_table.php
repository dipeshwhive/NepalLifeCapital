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
        Schema::create('notice_setups', function (Blueprint $table) {
            $table->id();
            $table->string('Title');
            $table->text('Description');
            $table->string('FeaturedImage')->nullable();
            $table->date('CreatedDate');
            $table->boolean('IsActive')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('notice_setups');
    }
};
