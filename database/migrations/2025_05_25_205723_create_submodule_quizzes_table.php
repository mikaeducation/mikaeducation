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
        Schema::create('submodule_quizzes', function (Blueprint $table) {
            $table->id('quiz_id');

            $table->unsignedBigInteger('submoduleSubject_id');
            $table->foreign('submoduleSubject_id')
                ->references('submoduleSubject_id')
                ->on('submodule_subject')
                ->onDelete('cascade');
            $table->enum('quiz_type', ['middle_quiz', 'final_quiz']); // jenis quiz
            $table->string('quiz_title'); // misal: "Karakteristik Komunikasi Sosial Autisme"
            $table->text('quiz_instruction'); // instruksi pengerjaan
            $table->string('quiz_question_type'); // misal: multiple_choice, menyusun_urutan, deskriptif
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submodule_quizzes');
    }
};
