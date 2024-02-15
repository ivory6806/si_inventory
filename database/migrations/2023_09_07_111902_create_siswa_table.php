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
        Schema::create('siswa', function (Blueprint $table) {
            $table->smallIncrements('id');
            $table->string('nama', 40)
                  ->nullable()
                  ->default(NULL);
            $table->string('nis', 5)
                  ->nullable()
                  ->default(NULL);
            $table->enum('gender', ['M','F'])
                  ->default('M');
            $table->enum('kelas', ['X','XI','XII','XIII'])
                  ->default('X');
            $table->enum('rombel', ['A','B'])
                  ->default('A');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswa');
    }
};
