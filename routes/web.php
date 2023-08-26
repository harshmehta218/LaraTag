<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [UserController::class, 'register'])->name('user.register');
Route::get('login', [UserController::class, 'login'])->name('user.login');
Route::post('user/register', [UserController::class, 'store'])->name('user.store');
Route::post('user/login', [UserController::class, 'postLogin'])->name('user.postlogin');
Route::post('logout',[UserController::class, 'logOut'])->name('user.logout');
Route::get('post/list', [PostController::class, 'index'])->name('listing')->middleware('auth.basic');
