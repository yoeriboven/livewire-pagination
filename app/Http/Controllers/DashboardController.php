<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard', [
            'posts' => Post::paginate(10),
            'comments' => Comment::paginate(10)
        ]);
    }
}
