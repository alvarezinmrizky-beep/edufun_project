<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('quiz_results', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->constrained('users')
                ->cascadeOnDelete();
            $table->foreignId('quiz_id')
                ->constrained('quizzes')
                ->cascadeOnDelete();
            $table->integer('correct_answers')->default(0);
            $table->integer('wrong_answers')->default(0);
            $table->decimal('score', 5, 2)->default(0);
            $table->integer('xp_earned')->default(0);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('quiz_results');
    }
};