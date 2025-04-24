<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up() {
        Schema::create('question_bank', function (Blueprint $table) {
            $table->id('question_id');
            $table->unsignedBigInteger('module_id');
            $table->tinyInteger('asessment_id');
            $table->string('question_for');
            $table->text('question_text');
            $table->string('answerA');
            $table->string('answerB');
            $table->string('answerC');
            $table->string('answerD');
            $table->string('answerE');
            $table->string('correct_answer')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_bank');
    }
};
