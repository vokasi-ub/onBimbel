<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TbSiswa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_siswa', function(Blueprint $kolom){
            $kolom->increments('idSiswa'); //primary key
            $kolom->string('namaSiswa', 100);
            $kolom->text('Alamat');
            $kolom->string('noTelf', 25);
            $kolom->string('kelas', 25);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_siswa');
    }
}
