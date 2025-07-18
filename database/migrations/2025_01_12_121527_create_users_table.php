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
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->boolean('terms_accepted')->nullable()->default(null);
            $table->string('deletion_token')->nullable();
            $table->timestamp('deletion_token_expires_at')->nullable();
            $table->string('reactivation_token')->nullable();
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