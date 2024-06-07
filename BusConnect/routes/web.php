<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BusRouteController;
use App\Http\Controllers\CategoryController;

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

Route::get('/' , [HomeController::class , 'index'])->name('index');
Route::get('/login' , [UserController::class , 'login'])->name('login');
Route::post('/login' , [UserController::class , 'postLogin'])->name('postLogin');
Route::get('/register' , [UserController::class , 'register'])->name('register');
Route::post('/register' , [UserController::class , 'postRegister']);
Route::get('/logout' , [UserController::class , 'logout'])->name('logout');

Route::get('/admin', [AdminController::class, 'showLoginForm'])->name('admin.login');
Route::post('/admin', [AdminController::class, 'post_Login']);
Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/admin/createAccount', [AdminController::class, 'createAccount'])->name('admin.createAccount');
Route::post('/admin/createAccount', [AdminController::class, 'post_createAccount']);

Route::resource('category', CategoryController::class);
Route::get('/category-trash', [CategoryController::class, 'trash'])->name('category.trash');
Route::get('/category-trash/{category}', [CategoryController::class, 'restore'])->name('category.restore');
Route::delete('/category-trash/{category}', [CategoryController::class, 'forceDelete'])->name('category.forceDelete');
Route::get('/search-category', [CategoryController::class, 'search'])->name('search.category');

Route::get('/bus-routes', [BusRouteController::class , 'index'])->name('bus.routes');