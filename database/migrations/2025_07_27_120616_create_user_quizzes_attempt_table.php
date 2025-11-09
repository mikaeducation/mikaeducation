<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('user_quizzes_attempt', function (Blueprint $table) {
            $table->id('attempt_id');
            $table->unsignedBigInteger('user_quiz_id');
            $table->foreign('user_quiz_id')->references('user_quiz_id')->on('user_quizzes')->onDelete('cascade');
            $table->integer('attempt_number');
            $table->integer('total_questions')->default(0);
            $table->integer('correct_answers')->default(0);
            $table->integer('incorrect_answers')->default(0);
            $table->float('score');
            $table->string('duration', 8)->nullable(); // TODO: hilangkan durasi dan hitung berdasarkan start dan end time
            $table->dateTime('started_at')->nullable();
            $table->dateTime('finished_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_quizzes_attempt');
    }
};
