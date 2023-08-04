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

/*Route::get('/hello', function () {
    return 'Hello world';
    
});
Route::get('/controller', [TestController::class, 'index']);

Route::get('/form', function () {
    echo '<form action="/post" metod="GET">';
echo '<input type="hidden" name="_token" value=".csrf_token().">';
    echo '<button type="submit">Отправить</button>';
    echo '</form>';
    
});
Route::get('/post', [TestController::class, 'get']);
Route::post('/post', [TestController::class, 'post']);
Route::delete('/post', [TestController::class, 'post']);
Route::match(['get', 'post', 'put', 'delete'], '/update', [TestController::class, 'update']);
Route::any('/any', [TestController::class, 'any']);
Route::get('/contacts', [PageContact::class, 'ContactsForm']);
Route::get('/login', [Login::class, 'login'] );
Route::view('/views/test', 'blade.test');
Route::view('/views/welcome', 'welcome');
Route::view('/views/home', 'blade.home');
Route::get('/views/about', [PageController::class, 'blade.about']);
Route::view('/views/profile', 'blade.profile', ['username' => 'JohnDoe']);
Route::view('/views/date', 'blade.date');
Route::view('/views/message', 'blade.message', ['message' => 'Hello<br>World']);
Route::view('/views/text', 'blade.text');
Route::view('/views/greeting', 'blade.greeting', ['isMorning' => 'date("H")']);
Route::view('/views/status', 'blade.status', ['status' => 'I am clever']);
Route::view('/views/empty', 'blade.empty', ['data' => '20']);
Route::view('/views/switch', 'blade.switch', ['category' => 'Продукты']);
Route::view('/views/numbers', 'blade.numbers', ['number' => '5']);
Route::get('/views/list', [PageController::class, 'list']);
Route::view('/views/items', 'blade.items');
Route::view('/views/break', 'blade.break', ['months' => ['January', 'February', 'March', 'April', 
'May', 'June', 'July']]);
Route::view('/views/php', 'blade.php');
Route::get('/views/class', [PageController::class, 'class']);
Route::get('/views/style', [PageController::class, 'style']);
Route::get('/views/checked', [PageController::class, 'checked']);
Route::get('/views/selected', [PageController::class, 'selected']);
//Request
Route::prefix('/request-example')->group(function(){
    Route::get('/first', function (Request $request){
        dd($request);
    });
});
Route::get('/user/profile', [UserController::class, 'get']
) -> name('request.getProfile');
Route::get('/user/{id}/details', [UserController::class, 'getUserDetails'], function ($id) {
    return 'User '.$id;
});*/
Route::get('/about', [MainController::class, 'about']);
Route::get('/user/{id}/{name}', function ($id, $name) {
    return 'ID: ' . $id .'. Name: ' . $name;});
Route::get('/category', [MainController::class, 'category'])->name('category');   
Route::get('/review', [MainController::class, 'review'])->name('review');
Route::post('/review/check', [MainController::class, 'review_check']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store']);
Route::get('/register', [RegisteredUserController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->middleware('guest');
Route::view('/home', 'home')->middleware('auth')->name('home');
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy']);