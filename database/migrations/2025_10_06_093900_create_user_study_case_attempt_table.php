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
        Schema::create("user_study_case_attempt", function (Blueprint $table) {
            $table->id("attempt_id");
            $table->unsignedBigInteger("user_studycase_id");
            $table
                ->foreign("user_studycase_id")
                ->references("id")
                ->on("user_study_case")
                ->onDelete("cascade");
            $table->integer("attempt_number");
            $table->float("score");
            $table->boolean("is_passed")->default(false);
            $table->string("duration", 8)->nullable();
            $table->dateTime("started_at")->nullable();
            $table->dateTime("finished_at")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("user_study_case_attempt");
    }
};
