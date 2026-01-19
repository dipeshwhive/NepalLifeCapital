<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('portfolio_products_setups', function (Blueprint $table) {
            $table->id();

            $table->string('Title');
            $table->text('Description');

            $table->string('FeaturedImage')->nullable();

            // Case A: fixed select values
            $table->string('TargetMarket')->nullable();
            $table->string('Category')->nullable();

            // Text business fields
            $table->text('Features')->nullable();
            $table->string('ContractPeriod')->nullable();
            $table->string('LockPeriod')->nullable();

            
            $table->string('AUMFees')->nullable();
            $table->string('HurdleRate')->nullable();
            $table->string('ExpectedReturn')->nullable();
            $table->string('MinimumPortfolio')->nullable();
            $table->string('MinInvestment')->nullable();
            $table->string('PerformanceFee')->nullable();
            $table->string('ExitLoad')->nullable();

            $table->string('Objectives')->nullable();

            $table->boolean('ShowNav')->default(false);
            $table->boolean('ShowHome')->default(false);
            $table->boolean('IsActive')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('portfolio_products_setups');
    }
};
