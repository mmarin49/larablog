<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');
/*
Route::get('/hola/{nombre?}', function ($nombre ="Anna") {
    return "Hola $nombre conocenos: <a href='".route("nosotros")."'>nosotros</a>";
});

Route::get('/sobre-nosotros', function ($nombre="Anna") {
    return "<h1>Hola Toda la información sobre nosotros!</h1>";
})->name("nosotros");


Route::get('home/{nombre?}/{apellido?}', function($nombre ="Anna", $apellido ="Wilk") {
    //return view('home')->with("nombre",$nombre)->with("apellido",$apellido);
    $posts=["Posts1","Posts2","Posts3","Posts4"];
    $posts2=null;
    return view('home',['nombre'=>$nombre,'apellido'=>$apellido,'posts'=>$posts,'posts2'=>$posts2]);
})->name("home");

*/


Route::resource('dashboard/post', 'dashboard\PostController');
Route::resource('dashboard/category', 'dashboard\CategoryController');
