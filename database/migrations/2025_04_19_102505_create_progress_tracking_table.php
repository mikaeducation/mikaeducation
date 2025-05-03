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
            $table->string('current_part');
            $table->integer('percent_done')->default(0);
            $table->boolean('is_completed')->default(false);
            $table->timestamp('last_visited_at')->nullable();
            $table->timestamps();
        
            $table->unique(['user_id', 'module_id']);
            $table->index(['user_id', 'module_id']); // opsional, meningkatkan performa query
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
