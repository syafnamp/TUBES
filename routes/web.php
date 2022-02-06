<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [HomeController::class, 'index']);

Route::get('/login', [AuthController::class, 'login']);

Route::get('/register', [AuthController::class, 'register']);

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', function () {
    return 'hello world';
});
Route::get('/article', [ArticleController::class, 'index']);
Route::get('/article/list', [ArticleController::class, 'list']);
Route::get('/article/edit/{slug}', [ArticleController::class, 'edit']);
Route::get('/article/insert', [ArticleController::class, 'insert']);
Route::get('/article/store', [ArticleController::class, 'store']);
Route::get('/article/update', [ArticleController::class, 'update']);

Route::get('/content', [ContentController::class, 'index']);
Route::get('/content/input', [ContentController::class, 'input']);