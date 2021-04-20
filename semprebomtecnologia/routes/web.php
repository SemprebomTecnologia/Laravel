<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
// Route::get('login',function (){
//     $app = app();
//     $controller = $app->make('UsuarioController');
//     return $controller->callAction('login',  $parameters = array());
// });

//Route::get('controllerMethod/{key}', $controller . 'controllerMethod');

//Route::get('login/{id}', [UsuarioController::class, 'login']);

//Route::controller('login', 'UsuarioController@login');
//Route::get('login',$controller.'UsuarioController');

//Route::get('/login', [UsuarioController::class, 'login'])->middleware('login');
//Route::get('/login', UsuarioController::class);
//Route::get('login','UsuarioController@login');

/*
Route::get('login', function(){
    return 'ok';
});

|
|
|
|  senha ftp 9Ihp@0%fI%yo
|   Route::resource('login',UsuarioController::class)->only(['login','index']) ;
|
*/


Route::get('/', function () {
    return view('home');
});

Route::get('home', function () {
    return view('home');
});

Route::get('servicosWEB', function () {
    return view('servicosWEB');
});

Route::get('hosting', function () {
    return view('hosting');
});

Route::get('development', function () {
    return view('development');
});

Route::get('foods', function () {
    return view('foods');
});

Route::get('UsuarioView', function () {
    return view('UsuarioView');
});

Route::get('principal', function () {
    return view('/dashboard/principal');
});


Route::get('blank', function () {
    return view('/dashboard/blank');
});

Route::get('login', [UsuarioController::class, 'index']); 
Route::get('Login', [UsuarioController::class, 'Login']); 
Route::get('AUTH/{txtUser?}/{pass?}', [UsuarioController::class, 'Login']);

//Route::get('login', [UsuarioController::class, 'index']); 




