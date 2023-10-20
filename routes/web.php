<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    PostController,
    CommentController
};

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

Route::get('/post', [PostController::class, 'index']);
Route::get('/post/create',  [PostController::class, 'create']);
Route::post('/post/store',  [PostController::class, 'store']);
Route::get('/post/edit/{id}',  [PostController::class, 'edit']);
Route::put('/post/update/{id}',  [PostController::class, 'update']);
Route::get('/post/show/{id}', [PostController::class, 'show']);
Route::get('/post/delete/{id}', [PostController::class, 'delete']);

Route::post('/post/comment/store', [CommentController::class, 'store']);