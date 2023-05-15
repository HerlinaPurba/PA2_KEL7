<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kurveharian', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('prodi2', ['D3 TI','D3 TK','D4 TRPL','S1 SI','S1 IF','S1 TE','S1 MR','S1 BP']);
            $table->string('kamar');
            $table->enum('jadwal', ['Senin','Selasa','Rabu','Kamis','Jumat']);
            $table->text('tugas');
            $table->enum('asrama', ['Rusun 1','Rusun 2','Rusun 3','Rusun 4','Pniel','Silo','Kapernaum','Danau Toba']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kurveharian');
    }
};
