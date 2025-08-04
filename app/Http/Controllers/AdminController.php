<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function dashboard()
    {
        $posts = Post::latest()->paginate(5);
        $users = User::latest()->paginate(5);
        return view('admin.dashboard', compact('posts', 'users'));
    }

    public function users()
    {
        $users = User::latest()->paginate(10);
        return view('admin.users', compact('users'));
    }

    public function posts()
    {
        $posts = Post::latest()->paginate(10);
        return view('posts.posts', compact('posts'));
    }
}
