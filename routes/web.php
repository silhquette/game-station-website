<?php

use App\Http\Controllers\GameController;
use App\Http\Controllers\UserController;
use GuzzleHttp\Middleware;
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

Route::get('/', [GameController::class, 'home']);

Route::get('/login', function () {
    return view('login');
})->middleware('guest')->name('login');

Route::post('/login', [UserController::class, 'authenticate'])->middleware('guest');

Route::middleware('auth')->group(function() {
    Route::get('/profile/{user:username}', [UserController::class, 'show']);
    
    Route::get('/profile/edit/{user:username}', [UserController::class, 'edit']);
    
    Route::post('/profile/edit/{user:username}', [UserController::class, 'update']);
    
    Route::get('/games', [GameController::class, 'index']);
    
    Route::get('/games/details/{game:slug}', [GameController::class, 'show']);
    
    Route::post('/games/details/{game:slug}', [GameController::class, 'store']);
});
