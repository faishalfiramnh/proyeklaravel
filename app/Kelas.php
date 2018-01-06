<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    //
    public $timestamps = false;
    protected $fillable =['mataKuliah','hari','jam']; //whitelist
}
