<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fakeDb_Controller;

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


Route::get('/connection',[fakenews_db_Controller::class,'fakeData']);
Route::get('/', function () {
    return view('welcome');
});

Route::get('/search', 'SearchController@search');
Route::get('/result', 'SearchController@result');