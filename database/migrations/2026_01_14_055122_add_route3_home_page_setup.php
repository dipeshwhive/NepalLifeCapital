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
        Schema::table("home_page_setups", function (Blueprint $table) {
            $table->string('Route3')->nullable()->after('Slug3');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
            Schema::table('home_page_setups', function (Blueprint $table) {
                $table->dropColumn('Route3');
        });
    }
};
