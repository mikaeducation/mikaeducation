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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->string('phone')->unique(); // Ganti user_id dengan phone
            $table->foreign('phone')->references('phone')->on('users')->onDelete('cascade');
            $table->string('username')->virtualAs('CONCAT(first_name, " ", last_name)');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('birth_place');
            $table->date('birth_date');
            $table->string('address');
            $table->string('occupation');
            $table->string('institution');
            $table->timestamps();
        });        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }

    
};

// $table->string('phone')->unique();
// $table->foreign('phone')->references('phone')->on('users')->onDelete('cascade');
// $table->string('email')->unique();
// $table->string('username')->virtualAs('CONCAT(first_name, " ", last_name)');
// $table->string('first_name');
// $table->string('last_name');
// $table->string('birth_place');
// $table->date('birth_date');
// $table->string(column: 'address');
// $table->string(column: 'gender');
// $table->string('occupation');
// $table->string('institution');
// $table->string(column: 'skill');
// $table->string(column: 'experience');