<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
        $studios = Studio::with('comments')->get();
        $users = User::with('comments')->get();
        return view('Studio.comment', ['comments' => $comments, 'studios' => $studios, 'users' => $users]);
    }

    public function create(Request $request)
    {
        // dd($request);
        $this->validate($request, Comments::$rules);
        $comment = new Comments;
        $form = $request->all();
        unset($form['_token']);
        $comment->fill($form)->save;
        return redirect('/review');
    }
}
