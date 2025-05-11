<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up() {
        Schema::create('user_evaluate', function (Blueprint $table) {
            $table->id('userEvaluate_id');
            $table->unsignedBigInteger('module_id');
            $table->unsignedBigInteger('user_id');
            $table->string('username');
            $table->tinyInteger('asessment_id');
            $table->foreign('asessment_id')->references('asessment_id')->on('module_asessment')->onDelete('cascade');
            $table->tinyInteger('after_asessment_id')->default(1);
            $table->integer('scale_1_count')->default(0);
            $table->integer('scale_2_count')->default(0);
            $table->integer('scale_3_count')->default(0);
            $table->integer('scale_4_count')->default(0);
            $table->integer('scale_5_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_evaluate');
    }
};
