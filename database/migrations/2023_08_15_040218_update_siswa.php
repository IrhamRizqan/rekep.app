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
        Schema::table('siswa', function (Blueprint $table) {
            $table->unsignedBigInteger('jurusan_id')->after('kelas');
            $table->foreign('jurusan_id')->on('jurusan')->references('id')->onDelete('cascade');
            //2
        });
    }

    /**
     * Reverse the migrations.
     */ 
    public function down(): void
    {
        Schema::disableForeignKeyConstraints();
        Schema::table('siswa', function (Blueprint $table) {
            //
        });
    }
};
