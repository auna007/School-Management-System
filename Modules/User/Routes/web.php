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
//Route::get('/health', 'HealthController@index')->name('health.index');


Route::prefix('admin')->group(function() {
    
    Route::get('/user-management', 'UserController@userManager')->name('view.user_manager');
    Route::get('/attendance', 'AttendanceController@index')->name('view.attendance_manager');
    Route::get('/category', 'CategoryController@index')->name('view.category_manager');
    Route::get('/help-center', 'HelpCenterController@index')->name('view.help_center');
    Route::get('/notification', 'NotificationController@index')->name('view.notification_manager');
    Route::get('/fee-management', 'PaymentController@index')->name('view.fee_manager');

   
    Route::get('/studytype', 'StudytypeController@index')->name('view.study_type_manager');
    Route::get('/term', 'TermController@index')->name('view.academic_term_manager');
    Route::get('/routine-management', 'RoutineController@index')->name('view.routine_manager');
    Route::get('/scheme', 'SchemeController@index')->name('view.subject_scheme_manager');
    Route::get('/result', 'ResultController@index')->name('view.result_manager');

    Route::group(['middleware' => 'auth:admin'], function () {

   //RolePermissionController ............................................................
    Route::get('role', 'RolePermissionController@roleIndex')->name('view.role_manager');
    Route::Post('/create-role', 'RolePermissionController@storeRole')->name('create.role');
    Route::Post('/update-role-status', 'RolePermissionController@updateStatusRole')->name('update.role_status');
    Route::get('/role-delete/{role_id}', 'RolePermissionController@roleDelete')->name('delete.role');
    Route::get('/permissions/{role_id}', 'RolePermissionController@permissions')->name('edit.permissions');
    Route::Post('/create-permission', 'RolePermissionController@storePermission')->name('create.permission');
    Route::Post('/update-permission-status', 'RolePermissionController@updateStatusPermission')->name('update.permission_status');
    Route::get('/permission-delete/{permission_id}', 'RolePermissionController@permissionDelete')->name('delete.permission');
    Route::patch('/update-role-permission/{role_id}', 'RolePermissionController@updateRolePermission')->name('update.role_permission');   
    Route::get('/permission', 'RolePermissionController@createPermissions')->name('create.role_permissions');
    Route::get('/role-permissions', 'RolePermissionController@viewRoles')->name('view.role_permissions');
    //.............................................................................................

    
    //SessionSettingController......................................................................
    Route::get('/session-management', 'SessionSettingController@index')->name('view.academic_session.manager');
    Route::Post('/create-academic-session', 'SessionSettingController@store')->name('create.academic_session');
    Route::get('/destroy-session/{id}', 'SessionSettingController@destroy')->name('delete.academic_session');
    Route::Post('/update-session-status', 'SessionSettingController@updateStatus')->name('update.academic_session_status');
    //...........................................................................................

    //PaymentSettingController ..................................................................
    Route::get('/payment-settings', 'PaymentSettingController@index')->name('view.payment_settings_manager');
    Route::Post('/create-payment-setting', 'PaymentSettingController@store')->name('create.payment_setting');
    Route::Post('/update-paymentset-status', 'PaymentSettingController@updateStatus')->name('update.payment_setting_status');
    Route::get('/update-paymentset/{id}', 'PaymentSettingController@edit')->name('edit.payment_setting');
    Route::Post('/update-paymentsetting/{id}', 'PaymentSettingController@update')->name('update.payment_setting');
    //............................................................................................

    //ClassController ............................................................................
    Route::get('/class-management', 'ClassManagerController@index')->name('view.class_manager');
    Route::Post('/create-class', 'ClassManagerController@store')->name('create.class');
    Route::get('/edit-class/{id}', 'ClassManagerController@edit')->name('edit.class');
    Route::Post('/update-class/{id}', 'ClassManagerController@update')->name('update.class');

     //SectionController .........................................................................
    Route::get('section-management', 'SectionController@index')->name('view.class_section_manager');
    Route::Post('create-section', 'SectionController@store')->name('create.class_section');
    Route::get('edit-section/{id}', 'SectionController@edit')->name('edit.class_section');
    Route::Post('update-section/{id}', 'SectionController@update')->name('update.class_section');

    //SubjectController .........................................................................
    Route::get('subject-management', 'SubjectController@index')->name('view.subject_manager');
    Route::Post('create-subject', 'SubjectController@store')->name('create.subject');
    Route::get('edit-subject/{id}', 'SubjectController@edit')->name('edit.subject');
    Route::Post('update-subject/{id}', 'SubjectController@update')->name('update.subject');

    //CategoryController .........................................................................
    Route::get('category-management', 'CategoryController@index')->name('view.class_category_manager');
    Route::Post('create-category', 'CategoryController@store')->name('create.class_category');
    Route::get('edit-category/{id}', 'CategoryController@edit')->name('edit.class_category');
    Route::Post('update-category/{id}', 'CategoryController@update')->name('update.class_category');

    //LibraryController ..........................................................................
    Route::get('library-management', 'LibraryController@index')->name('view.library_manager');
    Route::Post('upload-content', 'LibraryController@store')->name('upload.reading_material');
    Route::get('edit-content/{id}', 'LibraryController@edit')->name('edit.reading_material');
    Route::Post('update-content/{id}', 'LibraryController@update')->name('update.reading_material');

    //UserController .............................................................................
    Route::get('user-management', 'UserController@userManager')->name('view.user_manager');
    Route::Post('create-user', 'UserController@store')->name('create.user');
    Route::get('update-user/{id}', 'UserController@edit')->name('edit.user');
    Route::Post('update-user/{id}', 'UserController@update')->name('update.user');
    Route::Post('update-user-status', 'UserController@updateStatus')->name('update.user_status');   
    Route::get('dashboard', 'UserController@dashboard')->name('view_user.dashboard');
    Route::Post('logout', 'UserController@logout')->name('admin.logout');
     Route::get('dashboard', 'DashboardController@index')->name('view.user_dashboard');

    });

}); 
 
Auth::routes();

Route::get('/admin/login', 'UserController@index')->name('admin.login_form')->middleware('user_access');
Route::Post('/admin/admin-login', 'UserController@login')->name('admin.login');
