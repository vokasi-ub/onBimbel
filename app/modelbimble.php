<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modelbimble extends Model
{
    protected $table = 'tb_siswa';
    protected $fillable = [
        'namaSiswa',
        'Foto',
        'Alamat',
        'noTelf',
        'kelas'
    ];
}
