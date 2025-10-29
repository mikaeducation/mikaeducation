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
        Schema::create('user_case_study_attempt', function (Blueprint $table) {
            $table->id('attempt_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('user_case_study_id');
            $table->unsignedBigInteger('case_study_id');
            $table->foreign('user_case_study_id')->references('id')->on('user_case_study')->onDelete('cascade');
            $table->integer('attempt_number');
            $table->integer('score');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_case_study_attempt');
    }
};
