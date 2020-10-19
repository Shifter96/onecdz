<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
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
Auth::routes();


Route::get('/log', function () { 
    return view('log');
});
Route::get('/', function () { 
    return view('onec');
});

Route::get('/employees','App\Http\Controllers\EmployeesController@index')->middleware('admin');
Route::delete('employees/{id}','App\Http\Controllers\EmployeesController@delete')->middleware('admin');
Route::post('/employees','App\Http\Controllers\EmployeesController@store')->middleware('admin');
Route::get('/demandes','App\Http\Controllers\DemandesController@index')->middleware('auth');
Route::get('/demandes/{id}','App\Http\Controllers\DemandesController@show')->middleware('auth');
Route::get('/inscriptions','App\Http\Controllers\BachelierController@index')->middleware('auth');
Route::get('/inscriptions/bachelier/{id}','App\Http\Controllers\BachelierController@show')->middleware('auth');
Route::get('/inscriptions/candidat/{id}','App\Http\Controllers\CandidatController@show')->middleware('auth');


Route::get('/demande', 'App\Http\Controllers\DemandesController@affiche');
Route::post('/demande/create', 'App\Http\Controllers\DemandesController@create');
route::get('inscription/bac', 'App\Http\Controllers\BachelierController@affiche');
route::post('/inscription/bac', 'App\Http\Controllers\BachelierController@create');
route::get('/inscription/bem', 'App\Http\Controllers\candidatController@affiche');
route::post('/inscription/bem', 'App\Http\Controllers\candidatController@create');
route::get('/recu/{recu}','App\Http\Controllers\recuController@affiche');

Route::get('/w', function () {
    return view('demandesW');
});
Route::get('/user', function () {
    return view('user');
});
Route::get('/annonce', function () {
    return view('annonce');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::group(['middleware' => ['admin']], function () {



    //routes admin
    
});