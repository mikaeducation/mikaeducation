<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up() {
        Schema::create('user_answer_evaluate', function (Blueprint $table) {
            $table->id('user_answer_id');
            $table->unsignedBigInteger('user_evaluate_id');
            $table->foreign('user_evaluate_id')->references('userEvaluate_id')->on('user_evaluate')->onDelete('cascade');
            $table->unsignedBigInteger('question_id');
            $table->tinyInteger('user_answer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_answer_evaluate');
    }
};
