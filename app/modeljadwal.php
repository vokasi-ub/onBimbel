<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modeljadwal extends Model
{
    protected $table = 'tb_jadwal';
    protected $fillable = [
        'Hari',
        'Jam'];
}
