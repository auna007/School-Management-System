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

Route::prefix('admin')->group(function() {
    Route::get('/student-management', 'StudentController@user_manager');
});
 

Route::group(['middleware' => 'auth:student'], function () {
Route::Post('student-login', 'StudentController@login')->name('student.login');
//Route::get('/applicant/dashboard', 'GuardianController@create')->name('applicant.create');

});