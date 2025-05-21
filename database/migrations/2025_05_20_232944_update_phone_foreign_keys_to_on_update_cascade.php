<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration {

// UPDATE DATA PHONE YANG MENJADI UNIK DI DUA TABLE DIBAWAH INI AGAR DAPAT IKUT BERUBAH SAAT DATA PHONE DIPERBARUI
    public function up(): void
    {
        // Table profiles
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropForeign(['phone']);

            $table->foreign('phone')
                ->references('phone')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade'); 
        });

        // Table messages
        Schema::table('messages', function (Blueprint $table) {
            $table->dropForeign(['phone']); // Hapus FK lama

            $table->foreign('phone')
                ->references('phone')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade'); 
        });
    }

    public function down(): void
    {
        Schema::table('profiles', function (Blueprint $table) {
            $table->dropForeign(['phone']);

            $table->foreign('phone')
                ->references('phone')->on('users')
                ->onDelete('cascade'); // Tanpa update cascade
        });

        Schema::table('messages', function (Blueprint $table) {
            $table->dropForeign(['phone']);

            $table->foreign('phone')
                ->references('phone')->on('users')
                ->onDelete('cascade');
        });
    }
};
