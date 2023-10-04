<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/users/{id}/{name}', function($id, $name) {
    return 'This is user ' . $name. ' with an id of ' .$id;
});
Route::get('/', 'PagesController@index');

*/

Route::get('home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('about', function(){return view('pages.about');})->name('about');
Route::get('exercises', function(){return view('pages.exercises');})->name('exercises');
Route::get('login', function(){return view('pages.login');})->name('login');
Route::get('register', function(){return view('pages.register');})->name('register');

Route::get('/', function (){
    return view('pages.home');
});
