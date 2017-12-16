<?php

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
Route::get('/', function() {
	return view('welcome');
});


Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/gestionutilisateurs', function () {
    $utilisateurs = App\User::all();

    return view('admin.gestionutilisateurs', ['utilisateurs' => $utilisateurs]);
});

Route::get('/gestionplaces', function () {
    $places = App\places::all();

    return view('admin.gestionplaces', ['places' => $places]);
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
