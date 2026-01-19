<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('f_a_q_setups', function (Blueprint $table) {
            $table->id();

            $table->foreignId('CategoryId')
                ->constrained('f_a_q_category_setups')
                ->cascadeOnDelete();

            $table->string('Questions');
            $table->text('Answers');

            $table->boolean('IsActive')->default(true);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('f_a_q_setups');
    }
};
