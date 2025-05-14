<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('phone')->unique();
            $table->string('email')->unique();
            $table->string('password');
            $table->boolean('terms_accepted')->nullable()->default(null);
            $table->softDeletes(); // Untuk memastikan penghapusan data di tabel users
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
{
    Schema::dropIfExists('users');
}

};