<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $user = Auth::user();
        $sort = $request->sort;
        $items = User::orderBy($sort, 'asc');
        $param = ['items' => $items, 'sort' => $sort, 'user' => $user];
        return view('User.index', $param);
    }
}
