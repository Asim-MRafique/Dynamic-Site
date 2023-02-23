<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Basecontroller;

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

Route::get('/home',[Basecontroller::class,'Home']);
Route::get('/services',[Basecontroller::class,'Services']);
Route::get('/company',[Basecontroller::class,'Company']);
Route::get('/contact',[Basecontroller::class,'Contact']);

