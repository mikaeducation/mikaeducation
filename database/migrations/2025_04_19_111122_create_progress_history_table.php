<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up() {
        Schema::create('progress_history', function (Blueprint $table) {
            $table->id('history_id');
            $table->unsignedBigInteger('progress_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('module_id');
            $table->string('module_part');
            $table->enum('status', ['not_started', 'in_progress', 'finished']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('progress_history');
    }
};
