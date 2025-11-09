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
        Schema::create('user_quizzes', function (Blueprint $table) {
            $table->id('user_quiz_id');
            $table->unsignedBigInteger('module_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('progress_id');
            $table->foreign('progress_id')
                    ->references('progress_id')
                    ->on('progress_tracking')
                    ->onDelete('cascade');
            $table->string('username');
            $table->unsignedBigInteger('quiz_id');
            $table->foreign('quiz_id')
                    ->references('quiz_id')
                    ->on('submodule_quizzes')
                    ->onDelete('cascade');
            $table->integer('attempt_count')->default(0);
            $table->float('high_score')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_quizzes');
    }
};
