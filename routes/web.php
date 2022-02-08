<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PasienController;

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

// Route::get('/', function () {
//   return view('welcome');
// });

Route::get('/',[PasienController::class,'index']);
Route::get('/create',[PasienController::class,'create']);
Route::post('/store', [PasienController::class,'store']);
Route::get('/show/{id}', [PasienController::class,'show']);
Route::post('/update/{id}', [PasienController::class,'update']);
Route::get('/destroy/{id}', [PasienController::class,'destroy']);