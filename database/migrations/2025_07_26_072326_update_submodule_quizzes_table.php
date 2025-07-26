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
        Schema::table('submodule_quizzes', function (Blueprint $table) {
            $table->integer('quiz_workout')->default(0);
            $table->float('quiz_average')->nullable();
            $table->float('quiz_value_max')->nullable();
            $table->float('quiz_value_min')->nullable();
            $table->dropColumn('quiz_type');
            $table->renameColumn('quiz_question_type', 'quiz_type');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('submodule_quizzes', function (Blueprint $table) {
            $table->dropColumn(['quiz_workout', 'quiz_average', 'quiz_value_max', 'quiz_value_min']);
            $table->renameColumn('quiz_type', 'quiz_question_type');
            $table->enum('quiz_type', ['middle_quiz', 'final_quiz']);
        });
    }
};
