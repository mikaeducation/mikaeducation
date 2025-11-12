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
        Schema::create('popup_question', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('submoduleSubject_id');
            $table->foreign('submoduleSubject_id')->references('submoduleSubject_id')->on('submodule_subject')->onDelete('cascade');
            $table->unsignedBigInteger('video_id');
            $table->string('title');
            $table->text('instruction');
            $table->json('answers');
            $table->integer('pop_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('popup_question');
    }
};
