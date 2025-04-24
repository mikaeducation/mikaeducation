<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up() {
        Schema::create('progress_tracking', function (Blueprint $table) {
            $table->id('progress_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('module_id');
            $table->unsignedBigInteger('submodule_id');
            $table->unsignedBigInteger('submoduleSubject_id');
            $table->string('current_part');
            $table->float('percent_done');
            $table->boolean('is_completed');
            $table->timestamp('last_visited_at');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('progress_tracking');
    }
};
