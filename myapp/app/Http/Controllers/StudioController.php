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
        $search1 = $request->input('roomsize');
        $search2 = $request->input('rsvday');
                // dd($request);
        if(empty($request->all())) {
            $studios = Studio::all();
        } elseif(!empty($search1)) {
            $studios = Studio::whereHas('rooms', function($q) use ($search1) {
                $q->where('roomsize', 'like', '%'.$search1.'%');
            })->get();
        } elseif(!empty($search2)) {
            $studios = Studio::whereHas('rsvday', function($q) use ($search2) {
                $q->whereDate('rsvday', '<>', $search2->format('Y-m-d'));
            })->get();
            dd($request);
            \Debugbar::info($studios);
        }
        // $hasStudios = Studio::has('rooms')->get();
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

    public function search()
    {
        return view('studio.search');
    }


}
