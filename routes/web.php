<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Models\Post;

Route::get('/', [HomeController::class, 'index']);

Route::get('/posts', [PostController::class, 'index']);
Route::get('/posts/create', [PostController::class, 'create']);
Route::get('/posts/{post}', [PostController::class, 'show']);


Route::get('prueba', function () {
    // CREAR UN NUEVO POST -- NUEVO REGISTRO
    // $post = new Post;
    // $post->title = 'Titulo de prueba 4';
    // $post->content = 'Contenido de prueba 4';
    // $post->categoria = 'Categoria de prueba 4';
    // $post->save();
    // return $post;

    //Buscar por id
    // $post = Post::find(1);
    //retuen $post;

    //Buscar por titulo
    // $post = Post::where('title', 'Titulo de prueba 1')->first();
    // return $post;
    
    //Modificar un registro
    // $post = Post::where('title', 'Titulo de prueba 1')->first();
    // $post->categoria = 'Desarrollo web';
    // $post->save();
    // return $post;

    //Recuperar varios registros
    $posts = Post::where('id', '>=', '2')->select('id', 'title','categoria')->get();
    return $posts;
});