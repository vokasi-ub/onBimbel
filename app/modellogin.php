<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class modellogin extends Model
{
    protected $table = 'tb_admin';
    protected $fillable = [
        'username',
        'password'];
}
