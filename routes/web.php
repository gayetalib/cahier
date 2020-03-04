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
Route::get('/users','UserController@index');

Route::post('/users','UserController@create');

// Route::get('/users', function () {
//     return view('users');
// });

Route::get('/', function () {
    return view('login');   
});

// Route::get('/absence', function(){
//     return view('absence');
// });
Route::post('/absence', 'UserController@connect');

Route::get('/absence', function(){
    return view('absence');
});

Route::get('/rp-absence', function(){
    return view('rp-absence');
});

Route::get('/rp-edt', function(){
    return view('rp-edt');   
});

Route::get('/loginblem', function(){   
    return view('loginblem');
});

// Route::post('/absence', 'testController@test')->name('home');

Route::get('/edt', function(){
    return view('edt');
});

Route::get('/valider', function(){
    return view('valider');
});

Route::get('/enseignement', function(){
    return view('enseignement');
});

Route::get('/uml', function(){
    return view('uml');
});

Route::get('/gl', function(){
    return view('gl');
});

Route::get('/poo', function(){
    return view('poo');
});

Route::get('/profil', function(){
    return view('profil');
});

Route::get('/rp', function(){
    return view('rp');
});
// Route::resource('user', 'UserController');
// Route::resource('pavillon', 'PavillonController');
// Route::resource('chambre', 'ChambreController');
// Route::resource('codification', 'CodificationController');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
