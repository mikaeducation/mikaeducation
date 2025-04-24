<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->string('phone')->unique();  // FK dari tabel users
            $table->foreign('phone')->references('phone')->on('users')->onDelete('cascade');
            $table->text('chat1')->nullable(); // Chat pertama
            $table->text('chat2')->nullable(); // Chat kedua
            $table->text('respon')->nullable(); // Respon admin
            $table->timestamps();

        });
    }

    public function down()
    {
        Schema::dropIfExists('messages');
    }
};
