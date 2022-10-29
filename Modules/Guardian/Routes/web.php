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

Route::prefix('guardian')->group(function() {
    Route::get('/', 'GuardianController@index');
});


Route::group(['middleware' => 'auth:guardian'], function () {
Route::Post('guardian-login', 'GuardianController@login')->name('guardian.login');
//Route::get('/applicant/dashboard', 'GuardianController@create')->name('applicant.create');

});