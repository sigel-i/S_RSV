<?php

namespace App\Http\Controllers;

use App\Room;
use App\Reserve;
use App\Studio;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index(Request $request)
    {
        $rooms = Room::with('studio')->get();
        $studios = Studio::with('rooms')->get();
        return view('Room.index', ['rooms' => $rooms, 'studios' => $studios,]);
    }

    public function add(Request $request)
    {
        $studios = Studio::with('rooms')->get();
        return view('Room/add', ['studios' => $studios,]);
    }

    public function create(Request $request)
    {
        // dd($request);
        $this->validate($request, Room::$rules);
        $room = new Room;
        $form = $request->all();
        unset($form['_token']);
        $room->fill($form)->save();
        return redirect('room/add');
    }
}
