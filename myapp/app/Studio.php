<?php

namespace App;

use App\Room;
use App\Comments;
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
    'tel' => 'required|min:11|numeric',
    'image_url' => 'required|active_url',
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
    return $this->hasMany('App\Comments');
  }

  public function user()
  {
    return $this->belongsTo('App\User');
  }
  // public function scopeNameEqual($query, $str)
  // {
  //   return $query->where('city', $str);
  // }
}
