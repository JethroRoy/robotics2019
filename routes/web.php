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


Route::get('/', 'HomeController@index')->name('home');

Route::get('/vanier', 'VanierController@index')->name('vanier');

Route::get('/robot', 'RobotController@index')->name('robot');

Route::get('/team', 'TeamController@index')->name('team');

Route::get('/game', 'GameController@index')->name('game');

Route::get('/journalism', 'JournalismController@index')->name('journalism');

Route::get('/gallery', 'GalleryController@index')->name('gallery');

Route::get('/tutorial', 'TutorialController@index')->name('tutorial');
