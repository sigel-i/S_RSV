<?php

namespace App;

use App\Room;
use Illuminate\Database\Eloquent\Model;

class Studio extends Model
{
  protected $guarded = array('id');

  public static $rules = array(
    'name' => 'required',
    'email' => 'required|email',
    'pref' => 'string',
    'city' => 'string',
    'url' =>  'active_url',
    'tel' => 'required|regex:/(01)[0-9]{9}/',
    'image_url' => 'required|image',
  );

  public function getData()
  {
    return $this->id . ':' . $this->name . '(' . $this->pref. $this->city .')';
  }

  public function rooms()
  {
    return $this->hasMany('App\Room',);
  }

  public function comments()
  {
    return $this->hasMany('App\Comments',);
  }
}
