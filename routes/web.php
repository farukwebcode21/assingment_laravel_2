<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return redirect('/dashboard');
});

Route::middleware(['auth'])->group(function(){
    Route::get('/profile',[DemoController::class, 'profile'])->name('profile');
    Route::get('/settings', [DemoController::class, 'settings'])->name('settings');
});


// single actioon controller route example
Route::get('/singleRoute', ContactController::class);
// Resource route example
Route::resource('product',ProductController::class);