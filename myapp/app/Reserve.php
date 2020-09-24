<?php

namespace App;

use App\Room;
use Illuminate\Database\Eloquent\Model;

class Reserve extends Model
{
    protected $dates = [
        'reserve'
    ];

    protected $guarded = array('id');

    public static $rules = array(
        'room_id' => 'required',
        'reserve' => 'reqired',
    );

    public function getData()
    {
        return $this->room_id . ': ' .$this->reserve;
    }

    public function room()
    {
      return $this->belongsTo('App\Room');
    }

}
