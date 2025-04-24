<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up() {
        Schema::create('submodule_subject', function (Blueprint $table) {
            $table->id('submoduleSubject_id');
            $table->unsignedBigInteger('subject_id');
            $table->foreign('subject_id')->references('subject_id')->on('module_subject')->onDelete('cascade');
            $table->string('subject_type');
            $table->string('submoduleSubject_title');
            $table->string('submoduleSubject_description');
            $table->string('submoduleSubject_url');
            $table->text('submoduleSubject_text');
            $table->text('submoduleSubject_result');
            $table->json('submoduleSubject_file')->nullable();
            $table->boolean('submoduleSubject_quiz');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('submodule_subject');
    }
};
