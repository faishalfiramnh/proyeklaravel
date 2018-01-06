<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class BuatTabelKelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function(Blueprint $table){

            $table->increments('id');
            $table->string('mataKuliah');
            $table->string('hari');
            $table->string('gedung');
            $table->string('lantai');
            $table->string('namaRuangan');
            $table->integer('status');
            $table->timestamps();
        });

         Schema::create('admin', function(Blueprint $kolom){

            $kolom->increments('id');
            $kolom->string('username');
            $kolom->string('password');
            $kolom->timestamps();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas');
        Schema::dropIfExists('admin');
    }
}
