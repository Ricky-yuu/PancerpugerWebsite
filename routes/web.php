<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NelayanController;
use app\models\NelayanModel;
use App\Http\Controllers\KonsumenController;
use app\models\KonsumenModel;
use App\Http\Controllers\MitraController;
use app\models\MitraModel;


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
    return view('v_admin');
});


Route::get('/nelayan',[NelayanController::class,'index'])->name('nelayan');
Route::get('/nelayan/detail/{id_nelayan}',[NelayanController::class,'detail']);
Route::get('/nelayan/add',[NelayanController::class,'add']);
Route::post('/nelayan/insert',[NelayanController::class,'insert']);
Route::get('/nelayan/edit/{id_nelayan}',[NelayanController::class,'edit']);
Route::post('/nelayan/update/{id_nelayan}',[NelayanController::class,'update']);
Route::get('/nelayan/delete/{id_nelayan}',[NelayanController::class,'delete']);

Route::get('/konsumen',[KonsumenController::class,'index'])->name('konsumen');
Route::get('/konsumen/detail/{id_konsumen}',[KonsumenController::class,'detail']);
Route::get('/konsumen/add',[KonsumenController::class,'add']);
Route::post('/konsumen/insert',[KonsumenController::class,'insert']);
Route::get('/konsumen/edit/{id_konsumen}',[KonsumenController::class,'edit']);
Route::post('/konsumen/update/{id_konsumen}',[KonsumenController::class,'update']);
Route::get('/konsumen/delete/{id_konsumen}',[KonsumenController::class,'delete']);

Route::get('/mitra',[MitraController::class,'index'])->name('mitra');
Route::get('/mitra/detail/{id_mitra}',[MitraController::class,'detail']);
Route::get('/mitra/add',[MitraController::class,'add']);
Route::post('/mitra/insert',[MitraController::class,'insert']);
Route::get('/mitra/edit/{id_mitra}',[MitraController::class,'edit']);
Route::post('/mitra/update/{id_mitra}',[MitraController::class,'update']);
Route::get('/mitra/delete/{id_mitra}',[MitraController::class,'delete']);