<?php

use App\Http\Controllers\Admin\TestController;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageContact;
use App\Models\login;
use App\Http\Controllers\PageController;
use Illuminate\Http\Request;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MainController;
use App\Models\Contact;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Models\Category;
use Database\seeders\CategorySeeder;
use Database\seeders\DishesSeed;

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

Route::get('/', [MainController::class, 'home']);
Route::get('/about', [MainController::class, 'about']);
Route::get('/user/{id}/{name}', function ($id, $name) {
    return 'ID: ' . $id .'. Name: ' . $name;});
Route::get('/category', [MainController::class, 'category'])->name('category');   
Route::get('/category/{id}', [MainController::class, 'category_id'])->name('category_id'); 
Route::get('/review', [MainController::class, 'review'])->name('review');
Route::post('/review/check', [MainController::class, 'review_check']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::get('/register', [RegisteredUserController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->middleware('guest');
Route::view('/home', 'home')->middleware('auth')->name('home');
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);
Route::get('/dishes/{id}', [MainController::class, 'dish_id'])->name('dish_id'); 
Route::post('/dishes/{dish}/create', [MainController::class,'create'])->name('create');//форма создания нового блюда
Route::post('/dishes/{dish}', [MainController::class,'store']);//создание нового блюда
Route::get('/find', [MainController::class, 'find'])->name('find');