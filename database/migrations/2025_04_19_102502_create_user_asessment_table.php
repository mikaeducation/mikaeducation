<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up() {
        Schema::create('user_asessment', function (Blueprint $table) {
            $table->id('userAsessment_id');
            $table->unsignedBigInteger('module_id');
            $table->unsignedBigInteger('user_id');
            $table->string('username');
            $table->tinyInteger('asessment_id');
            $table->foreign('asessment_id')->references('asessment_id')->on('module_asessment')->onDelete('cascade');
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
        Schema::dropIfExists('user_asessment');
    }
};
