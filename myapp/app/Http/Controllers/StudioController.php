<?php

namespace App\Http\Controllers;

use App\Studio;
use App\Reserve;
use App\Room;
use Illuminate\Http\Request;

class StudioController extends Controller
{
    public function index(Request $request)
    {
        // $hasStudios = Studio::has('rooms')->get();
        $studios = Studio::all();
        // $param = ['studios' => $studios];
        // $studios = Studio::with('rooms')->get();
        // $rooms = Room::with('studio')->get();
        // return view('Studio.index', ['studios' => $studios, 'rooms' => $rooms]);
        return view('Studio.index', ['studios' => $studios]);
    }

    public function add(Request $request)
    {
        return view('studio.add');
    }

    public function create(Request $request)
    {
        $this->validate($request, Studio::$rules);
        $studio = new Studio;
        $form = $request->all();
        unset($form['_token']);
        $studio->fill($form)->save;
        return redirect('/studio');
    }

    // public function post(Request $request)
    // {
    //     $validate_rules =  [
            // 'name' => 'required',
            // 'email' => 'required|email',
            // 'pref' => 'string',
            // 'city' => 'string',
            // 'url' =>  'active_url',
            // 'tel' => 'required|numeric|phone',
            // 'image_url' => 'required|image',
    //     ];
    //     $this->validate($request, $validate_rules);
    //     return view('Studio.register', ['msg'=>'正しく入力されました']);
    // }

    public function find(Request $request)
    {
        return view('studio.search',['input' => '']);
    }

    public function search(Request $request)
    {
        $studio = Studio::find($request->input);
        $param = ['input' => $request->input, 'studio' => $studio];
        return view('studio.search', $param);
    }
}
