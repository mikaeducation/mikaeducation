<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('user_case_study', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('module_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('progress_id');
            $table->unsignedBigInteger('case_study_id');
            $table->foreign('progress_id')->references('progress_id')->on('progress_tracking')->onDelete('cascade');
            $table->string('username');
            $table->integer('attempt_count')->default(0);
            $table->integer('high_score')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_case_study');
    }
};
