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
            $table->integer('attempt_number');
            $table->float('score');
            $table->dateTime('started_at')->nullable();
            $table->dateTime('finished_at')->nullable();
            $table->integer('duration');
            $table->boolean('is_passed');
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
