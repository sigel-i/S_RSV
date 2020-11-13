<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class csvimport extends Model
{
    protected $fillable = ['name','email','pref','city','tel','url','image_url'];
}
