<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(Request $request){
        $search = $request->search;
        $posts = Post::where('title', 'LIKE', "%{$search}%")
        ->with('user')
        ->latest()->paginate();

        return inertia ('Home', ['posts' => $posts]);
    }

    public function post(Post $post){
    //publicación individual
        return inertia('post', ['post' => $post]);
    }
}
