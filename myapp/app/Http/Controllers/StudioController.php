<?php

namespace App\Http\Controllers;

use App\Studio;
use App\User;
use App\Room;
use App\Comments;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;

class StudioController extends Controller
{
    public function index(Request $request)
    {
        $rules = array(
            'sort' => ["regex:/^(asc|desc)$/"],
            'city' => 'required',
            'column' => ["regex:/^(average_stars|count_stars)$/"],
            'roomsize'  => 'required',
        );
    $this->validate($request, $rules);
    $sort = $request->sort;
    $column = $request->column;
    // dd($column);
        // dd($sort);
    $city = $request->input('city');
    $search2 = $request->input('roomsize');
    if (is_null($sort)) {
        if ($request->has('city') && $city != '指定なし') {
        // cityがある、並び替えはしない
        //http://localhost/studio?city=千代田区
        $studios = Studio::where('city', 'like', '%'.$city.'%')->paginate(10);

        } elseif ($request->has('city') && $city == '指定なし') {
        // cityがない、並び替えはしない
        //http://localhost/studio?city=指定なし
        $studios = Studio::paginate(10);
        }
    } else {
        if ($request->has('city') && $city != '指定なし') {
        // cityがある、並び替えをする
        // http://localhost/studio?city=千代田区&sort=desc
        $studios = Studio::where('city', 'like', '%'.$city.'%')->orderBy($column, $sort)->paginate(10);

        } elseif ($request->has('city') && $city == '指定なし') {
        // cityがない、並び替えをする
        // http://localhost/studio?city=指定なし&sort=desc
        $studios = Studio::orderBy($column, $sort)->paginate(10);
                // dd($studios);
        }
    }

    // エリア検索する場合、whereを使って検索する。検索しない場合はall()
    // if ($request->has('city') && $city != ('指定なし') && $sort->$studio) {
    //     $searchedStudios = Studio::where('city', 'like', '%'.$city.'%');
    //     $studios = $searchedStudios->sortByDesc(function($studio) {
    //         return $studio->averageStars();
    //     })->paginate(4);
    //   } else {
    //     $studios = Studio::paginate(4);
    //   }
    $roomsize = $request->input('roomsize');
    return view('Studio.index', ['studios' => $studios, 'roomsize' => $roomsize, 'sort' => $sort, 'city' => $city, 'column' => $column]);
  }

    public function add(Request $request)
    {
        return view('Studio.add');
    }

    public function create(Request $request)
    {
        // dd($request);
        $this->validate($request, Studio::$rules);
        $studio = new Studio;
        $form = $request->all();
        unset($form['_token']);
        $studio->fill($form)->save();
        return redirect('Studio.add');
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
        return view('Studio.search');
    }

    public function show($id) {
        if(!auth()->check()) {
            return  redirect('login')->with('flash_message', '口コミを閲覧するにはログインしてください。');
            }
        $studio = Studio::findOrFail($id);
        return view('Studio.show', ['studio' => $studio]);
    }

    //レビューを閲覧するのに、口コミ投稿が必要にする場合は、下記を使用
    // public function show($id) {
    //     if(!auth()->check()) {
    //         return  redirect('login')->with('flash_message', 'レビューするにはログインしてください。');
    //     } else {
    //         $user = Auth::user();
    //         $auth_id = Auth::id();
    //     if($user->commentCount == null) {
    //         \Session::flash('flash_message', 'レビューを閲覧するには口コミを投稿してください。');
    //         return  redirect('/studios/' . $id . '/review/');
    //         }
    //     $studio = Studio::findOrFail($id);
    //     return view('Studio.show', ['studio' => $studio]);
    //     }
    // }


}
