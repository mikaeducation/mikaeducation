<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up() {
        Schema::create('user_asessment_attempt', function (Blueprint $table) {
            $table->id('attempt_id');
            $table->unsignedBigInteger('userAsessment_id');
            $table->foreign('userAsessment_id')->references('userAsessment_id')->on('user_asessment')->onDelete('cascade');
            $table->integer('attempt_number');
            $table->integer('total_questions')->default(0);
            $table->integer('correct_answers')->default(0);
            $table->integer('incorrect_answers')->default(0);
            $table->float('score');
            $table->boolean('is_passed')->default(false);
            $table->string('duration', 8)->nullable();
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
        Schema::dropIfExists('user_asessment_attempt');
    }
};
