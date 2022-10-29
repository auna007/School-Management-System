<?php

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

Route::get('/dashboard', function () {
    return view('dashboard');
});

Auth::routes();

Route::get('/result', function () {
    return view('result');
});

Route::get('/attendance', function () {
    return view('attendance');
});
Route::get('/subjects', function () {
    return view('subjects');
});

Route::get('/cacheclear',function(){
    \Artisan::call('config:clear');
    \Artisan::call('config:cache');
    \Artisan::call('route:clear');
    \Artisan::call('view:clear');
    \Artisan::call('cache:clear');
    return 'Clear  Cache';
});


//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
