<?php


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
Route::get('/', [PostController::class, 'index']);

Route::get('/posts', [PostController::class, 'index']);

Route::get('/posts/{post}', [PostController::class ,'show']);

Route::get('/posts/create', [PostController::class, 'create']);