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