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

Route::redirect('/', '/en/home');
Route::redirect('/en/', '/en/home');
Route::redirect('/fr/', '/fr/home');

Route::get('/en/home', 'HomeController@index')->name('home');

Route::get('/en/vanier', 'VanierController@index')->name('vanier');

Route::get('/en/robot', 'RobotController@index')->name('robot');

Route::get('/en/team', 'TeamController@index')->name('team');

Route::get('/en/game', 'GameController@index')->name('game');

Route::get('/en/journalism', 'JournalismController@index')->name('journalism');

Route::get('/en/gallery', 'GalleryController@index')->name('gallery');

Route::get('/en/tutorial', 'TutorialController@index')->name('tutorial');


Route::get('/fr/home', 'HomeController@indexfr')->name('home');

Route::get('/fr/vanier', 'VanierController@indexfr')->name('vanier');

Route::get('/fr/robot', 'RobotController@indexfr')->name('robot');

Route::get('/fr/team', 'TeamController@indexfr')->name('team');

Route::get('/fr/game', 'GameController@indexfr')->name('game');

Route::get('/fr/journalism', 'JournalismController@indexfr')->name('journalism');

Route::get('/fr/gallery', 'GalleryController@indexfr')->name('gallery');

Route::get('/fr/tutorial', 'TutorialController@indexfr')->name('tutorial');
