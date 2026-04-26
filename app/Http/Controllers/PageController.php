<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view ('home');
    }

    public function blog(){
    //Consulta a Base de datos
        // $posts = Post::get();
        // $post = Post::first(); Muestra el primer registro
        // $post = Post::find(25); Busca un id en especifico
        // dd($post); Te permite visualizar el resultado 

    return view('blog', ['posts' => $posts]);
    }

    public function post(Post $post){

        return view('post', ['post' => $post]);
    }
}
