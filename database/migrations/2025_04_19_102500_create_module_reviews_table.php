<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up() {
        Schema::create('module_reviews', function (Blueprint $table) {
            $table->id('reviews_id');
            $table->foreignId('user_id')->constrained('users');
            $table->string('username');
            $table->unsignedBigInteger('module_id');
            $table->decimal('user_rating', 3, 1)->default(0);
            $table->text('comment_review')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('module_reviews');
    }
};
