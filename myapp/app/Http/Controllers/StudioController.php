<?php

namespace App\Http\Controllers;

use App\Studio;
use App\Reserve;
use App\Room;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudioController extends Controller
{
    public function index(Request $request)
    {
        // dd($request);
    $search1 = $request->input('city');
    $search2 = $request->input('roomsize');
    // エリア検索する場合、whereを使って検索する。検索しない場合はall()
    if($request->has('city') && $search1 != ('指定なし'))  {
        $studios = Studio::where('city', 'like', '%'.$search1.'%')->get();
    } else {
        $studios = Studio::all();
    }
    // dd($studios);
    // 部屋の利用人数で検索する場合、mapとfilterを使って検索する。検索しない場合はmapだけ
    // $rooms = [];
    // if($request->has('roomsize') && $search2 != ('指定なし')) {
    //     foreach($studios as $studio) {
    //         foreach($studio->rooms as $room) {
    //             if ($room->roomsize >= $search2) {
    //                 $rooms[] = $room;
    //             }
    //         }
    //     }
    //     // dd($rooms);
    // } else {
    //     foreach($studios as $studio) {
    //         foreach($studio->rooms as $room) {
    //             $rooms[] = $room;
    //         }
    //     }
    // }
    $roomsize = $request->input('roomsize');
    $reviewcount = DB::table('comments')->selectRaw('studio_id, count(stars) as stars_count')->groupBy('studio_id')->get();
    $staravg = DB::table('comments')->selectRaw('studio_id, AVG(stars) as stars_avg')->groupBy('studio_id')->get();
    return view('Studio.index', ['studios' => $studios, 'roomsize' => $roomsize, 'reviewcount' => $reviewcount, 'staravg' => $staravg]);
  }

    public function add(Request $request)
    {
        return view('studio.add');
    }

    public function create(Request $request)
    {
        // dd($request);
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
