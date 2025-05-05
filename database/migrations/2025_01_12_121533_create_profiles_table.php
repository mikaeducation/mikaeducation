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
            $table->string('username')->virtualAs('CONCAT(first_name, " ", last_name)');  
            $table->string('first_name');  
            $table->string('last_name');  
            $table->string('birth_place');  
            $table->date('birth_date');  
            $table->string('address');  
            $table->string('gender')->nullable();
            $table->string('occupation');  
            $table->string('institution');
            $table->string('institutionCity')->nullable();  
            $table->string('skill')->nullable();
            $table->string('experience')->nullable(); 
            $table->string('banner_image')->nullable();
            $table->string('profile_image')->nullable();
            $table->text('description')->nullable();
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
