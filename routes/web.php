<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProjectController;
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
    return view('home');
});

Route::get('/home',[PageController::class, 'home']);
Route::get('/about',[PageController::class, 'about']);
Route::get('/domain',[PageController::class, 'domain']);
Route::get('/hosting',[PageController::class, 'hosting']);
Route::get('/team',[PageController::class, 'team']);
Route::get('/contact',[PageController::class, 'contact']);


Route::resources([
    'posts' => PostController::class,
    // 'users' => UserController::class,
]);

Route::resource('projects', ProjectController::class)->middleware('auth');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
