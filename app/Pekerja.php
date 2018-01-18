<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pekerja extends Model
{
    //
    protected $fillable = ['name','email'];
    protected $visible = ['name','email'];
    public $timestamps = true;

    
}
