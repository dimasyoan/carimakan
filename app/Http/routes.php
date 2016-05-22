<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
//url, controller@metode

//Route::get('/', 'WelcomeController@home'); //berarti url kosong atau url awal


Route::get('/login', 'PagesController@getLogin');

Route::get('/', 'PagesController@getIndex');

Route::get('/input', 'PagesController@getInputData');

Route::get('/tampil', 'PagesController@getTampilData');

//atau bisa url, function
//contoh localhost:8080/profil
/*Route::get('/profilsaya', function(){
	return 'ini profil';
});

Route::get('/coba', 'WelcomeController@coba');


Route::get('/profil', 'ProfilController@index');

Route::get('/materi', 'MateriController@MateriHtml');
*/
