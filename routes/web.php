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


Route::get('/', function () {
    return view('Front.welcome');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



/*
---------------------------------------------------------------------
|
|Admim
|
|--------------------------------------------------------------------
*/


Route::group(['prefix' => 'admin'], function () {
    Route::resource('commande', 'CommandeController');
    Route::resource('lignecommande', 'LigneCommandeController');
    Route::resource('livraison', 'LivraisonController');
    Route::resource('chaussure', 'ChaussureController');
    Route::resource('taille', 'TailleController');

    Route::get('/','AdminController@index')->name('adminHome');

});