<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up() {
        Schema::create('modules', function (Blueprint $table) {
            $table->id('module_id');
            $table->string('module_title');
            $table->text('module_description');
            $table->json('module_point')->nullable();
            $table->string('module_publisher');
            $table->string('module_publisher_logo')->nullable();
            $table->string('module_publisher_name')->nullable();
            $table->string('module_publisher_banner')->nullable(); 
            $table->date('module_publish_date')->nullable();       
            $table->string('module_category');
            $table->integer('mainSubject_num');
            $table->tinyInteger('module_level');
            $table->boolean('module_type');
            $table->decimal('module_rating', 2, 1)->default(0);
            $table->boolean('module_status');
            $table->string('module_certificate')->nullable();
            $table->string('module_teaser')->nullable();
            $table->boolean('module_introduce');
            $table->boolean('module_asessment');
            $table->tinyInteger('moduleAsessmen_num');
            $table->boolean('module_practice');
            $table->timestamps();

            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('modules');
    }
};
