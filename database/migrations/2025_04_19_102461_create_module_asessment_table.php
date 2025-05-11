<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up() {
        Schema::create('module_asessment', function (Blueprint $table) {
            $table->tinyInteger('asessment_id')->primary();
            $table->unsignedBigInteger('module_id');
            $table->string('asessment_title');
            $table->enum('asessment_duration', ['unlimited', 'limited']);
            $table->integer('asessment_time_limit')->nullable();
            $table->enum('asessment_type', ['repeatable', 'limited']);
            $table->integer('asessment_workout');
            $table->float('asessment_average')->nullable();
            $table->float('asessmentValue_max')->nullable();
            $table->float('asessmentValue_min')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('module_asessment');
    }
};
