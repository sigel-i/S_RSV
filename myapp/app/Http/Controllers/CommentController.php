<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Comments;
use App\Studio;
use App\User;

class CommentController extends Controller
{
    public function index(Request $request) {

        if(!auth()->check()) {
            echo ('レビューするにはログインしてください。');
            return  redirect('studio/search ');;
            }
        $studios = Studio::with('comments')->get();
        $users = User::with('comments')->get();
        return view('Studio.review', ['studios' => $studios,  'users' => $users]);
    }

    public function comment(Request $request) {
        $comments = Comments::with('studio', 'User')->get();
        $studios = Studio::with('comments', 'User')->get();
        $users = User::with('comments')->get();
        $recount = DB::table('comments')->selectRaw('studio_id, count(stars) as stars_count')->groupBy('studio_id')->get();
        $staravg = DB::table('comments')->selectRaw('studio_id, AVG(stars) as stars_avg')->groupBy('studio_id')->get();
        return view('Studio.comment', ['comments' => $comments, 'studios' => $studios, 'users' => $users, 'recount' => $recount, 'staravg' => $staravg]);
    }

    public function create(Request $request)
    {
        // dd($request);
        $this->validate($request, Comments::$rules);
        $comment = new Comments;
        $form = $request->all();
        unset($form['_token']);
        // $comment->fill($form)->save;
        $comment->content = $request->content;
        $comment->stars = $request->stars;
        $comment->studio_id = $request->studio_id;
        $comment->user_id = $request->user_id;
        $comment->save();
        return redirect('/studio/comment');
    }
}
