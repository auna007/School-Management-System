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

Route::prefix('admin')->middleware(['auth:admin'])->group(function() {
    Route::get('pending-applications', 'ApplicantController@pending_app')->name('view.pending_applications');

    Route::get('successful-application', 'ApplicantController@successful_app')->name('view.successful_applications');

    Route::Post('search-applicants', 'ApplicantController@session_applicants')->name('search.applicants_using_session');

     Route::get('admit-applicant/{id}', 'ApplicantController@admit_applicant')->name('admit.applicant');

    Route::get('enrolled-applicants', 'ApplicantController@enrolled_app')->name('view.enrolled_applicants');

Route::get('applicants-details/{id}', 'ApplicantController@applicant_details')->name('view_applicant_details');

    Route::Post('search-applicant', 'ApplicantController@search_applicant')->name('search_applicant_details');
    
});


Route::prefix('applicant')->group(function() {
    Route::get('/login', 'ApplicantController@index')->name('applicant.login_form')->middleware('user_access');
    Route::get('signup', 'ApplicantController@signup')->name('applicant.signup');
    Route::get('retrieve-login-details', 'ApplicantController@retrieve_password')->name('applicant.pass_retrive');
    
    Route::Post('signup', 'ApplicantController@store_signup')->name('signup.create');
    
});


Route::Post('applicant-login', 'ApplicantController@login')->name('applicant.login');

Route::group(['middleware' => 'auth:applicant'], function () {
    Route::get('/applicant/dashboard', 'ApplicantController@create')->name('applicant.dashboard');
    Route::Post('personal-info/{id}', 'ApplicantController@store_personal_info')->name('personal_info.create');
    Route::Post('health-info/{id}', 'ApplicantController@store_health_info')->name('health_info.create');
    Route::Post('guardian-info/{id}', 'ApplicantController@store_guardian_info')->name('guardian_info.create');
    Route::Post('previous-edu/{id}', 'ApplicantController@store_previous_edu')->name('previous_edu.create');
    Route::Post('applicant-passport/{id}', 'ApplicantController@store_passport')->name('passport.create');
    Route::Post('/applicant/logout', 'ApplicantController@logout')->name('applicant.logout');


});

