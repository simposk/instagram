<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index() {
        if (Auth::check()) {
            return view('posts.index');
        } else {
            return redirect('/register');
        }
    }


}
