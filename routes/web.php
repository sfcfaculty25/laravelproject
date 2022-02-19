<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ShopController;
use App\Models\pro;
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

Route::get('/', function () 
{
    return view('welcome');
});

Route::get('select',[ShopController::class,'select']);

Route::get('insert',[ShopController::class,'insert']);

Route::post('create',[ShopController::class,'create'])->name('save');


Route::get('delete/{id}',[ShopController::class,'delete']);

Route::get('updatepage/{id}',[ShopController::class,'updatepage']);

Route::post('savedata/{id}',[ShopController::class,'savedata'])->name('saving');






















// Route::get('index',[infoController::class,'index']);
// Route::get('create',[infoController::class,'create']);

// Route::post('insert',[infoController::class,'insert'])->name('addsave');


// Route::get('login',[SportsController::class,'login']);