<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbJadwal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_jadwal', function(Blueprint $kolom){
            $kolom->increments('idJadwal'); //primary key
            $kolom->date('Hari');
            $kolom->time('Jam'); 
            $kolom->integer('id_Siswa'); 
            $kolom->integer('id_Ruang');
            $kolom->integer('id_Mapel');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_jadwal');
    }
}
