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
            $table->string('phone')->unique();  
            $table->foreign('phone')->references('phone')->on('users')->onDelete('cascade');  
            $table->string('email')->nullable()->unique(); 
            $table->foreign('email')->references('email')->on('users')->onDelete('cascade');  
            $table->string('username')->virtualAs('CONCAT(first_name, " ", last_name)');  
            $table->string('first_name');  
            $table->string('last_name');  
            $table->string('birth_place');  
            $table->date('birth_date');  
            $table->string('address');  
            $table->string('gender')->nullable(); // Menambahkan gender  
            $table->string('occupation');  
            $table->string('institution');  
            $table->string('skill')->nullable(); // Menambahkan skill  
            $table->string('experience')->nullable(); // Menambahkan experience  
            $table->string('banner_image')->nullable(); // Menambahkan banner_image  
            $table->string('profile_image')->nullable(); // Menambahkan profile_image  
            $table->text('description')->nullable(); // Menambahkan description  
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
