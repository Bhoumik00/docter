<?php

use Illuminate\Support\Facades\Route;
use App\Models\medi;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home',[medi::class,'index']);
Route::get('/book',[medi::class,'book']);
Route::get('/docter',[medi::class,'docter']);
Route::get('/make',[medi::class,'make']);
Route::get('/fever',[medi::class,'fever']);
