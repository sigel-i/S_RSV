<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comments;
use App\Studio;
use App\User;

class CommentController extends Controller
{
    public function comment(Request $request) {
        $comments = Comments::with('studio', 'User')->get();
        $studios = Studio::with('comments')->get();
        $users = User::with('comments')->get();
        return view('Studio.comment', ['comments' => $comments, 'studios' => $studios, 'users' => $users]);
    }

    // public function comment(Request $request) {

    //     $result = false;

    //     // バリデーション
    //     $request->validate([
    //         'studio_id' => [
    //             'required',
    //             'exists:studios,id',
    //             function($attribute, $value, $fail) use($request) {

    //                 // ログインしてるかチェック
    //                 if(!auth()->check()) {

    //                     $fail('レビューするにはログインしてください。');
    //                     return;

    //                 }

    //                 // すでにレビュー投稿してるかチェック
    //                 $exists = \App\Comment::where('user_id', $request->user()->id)
    //                     ->where('studio_id', $request->studio_id)
    //                     ->exists();

    //                 if($exists) {

    //                     $fail('すでにレビューは投稿済みです。');
    //                     return;

    //                 }

    //             }
    //         ],
    //         'stars' => 'required|integer|min:1|max:5',
    //         'comment' => 'required'
    //     ]);

    //     $comment = new \App\Comment();
    //     $comment->studio_id = $request->studio_id;
    //     $comment->user_id = $request->user()->id;
    //     $comment->stars = $request->stars;
    //     $comment->comment = $request->comment;
    //     $result = $comment->save();
    //     return ['result' => $result];

    // }

}
