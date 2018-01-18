<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Perusahaan extends Model
{
    //
    protected $fillable = ['perusahaan','nama','jabatan','lokasi','pendidikan','gaji'];
}
