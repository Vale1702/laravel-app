<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [PageController::class, 'home' ]) ->name('home');
// Route::get('blog' ,[PageController::class, 'blog' ]) ->name('blog');
// Route::get('blog/{slug}', [PageController::class, 'post' ]) ->name('post');


//Creación de grupo para acceder al controlador y tener código más compacto
Route::controller(PageController::class)->group(function(){
                //Ruta, Método
    Route::get('/',                 'home') ->name ('home');
    Route::get('blog' ,            'blog' ) ->name ('blog');
    Route::get('blog/{slug}',     'post' ) ->name ('post');
});
