<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'content' => 'reqired',
        'stars' => 'reqired',
        'studio_id' => 'required',
        'user_id' => 'required',
    );

    public function getData()
    {
        return $this->id . ': ' .$this->content;
    }

    public function user()
    {
      return $this->belongsTo('App\User');
    }

    public function studio()
    {
        return $this->hasOne('App\Studio',);
    }
}
