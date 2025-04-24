<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up() {
        Schema::create('module_subject', function (Blueprint $table) {
            $table->id('subject_id');
            $table->unsignedBigInteger('module_id');  // Pastikan unsignedBigInteger
            $table->foreign('module_id')->references('module_id')->on('modules')->onDelete('cascade');
            $table->string('subject_type');
            $table->string('submodule_title');
            $table->text('submodule_description');
            $table->integer('submoduleSubject_num');
            $table->timestamps();

            $table->engine = 'InnoDB';
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('module_subject');
    }
};
