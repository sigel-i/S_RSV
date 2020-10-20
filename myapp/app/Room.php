<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'studio_id' => 'required',
        'tatami_mats' => 'required',
        'roomsize' => 'required',
    );

    public function getData()
    {
        return $this->id . ': ' .$this->name;
    }

    public function studio()
    {
      return $this->belongsTo('App\Studio');
    }

    public function reserves()
    {
        return $this->hasMany('App\Reserve');
    }

}
