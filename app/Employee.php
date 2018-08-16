<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
    protected $fillable = [
        'id_pegawai',
        'nama',
        'alamat',
        'jenis_kelamin'
    ];
}
