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
});

//Closure
Route::get('/profil', function(){
    return "halaman profile";
})->name('profil');

//Test Name Route
Route::get('/tesname', function(){
    return route('profil');
});

// Parameter
Route::get('/profil/{id}', function($id){
    return $id;
});

// Controller
Route::get("/tescontroller", "TesController@Show");

// Resource 
Route::resource('siswa', "SiswaController");