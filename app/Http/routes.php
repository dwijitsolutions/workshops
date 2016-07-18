<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/* ================== Homepage ================== */

Route::get('/', 'HomeController@index');
Route::get('/home', 'HomeController@index');

Route::auth();

/* ================== Dashboard ================== */

Route::get(config('laraadmin.adminRoute'), 'LA\DashboardController@index');
Route::get(config('laraadmin.adminRoute'). '/dashboard', 'LA\DashboardController@index');
Route::get('/dashboard', 'LA\DashboardController@index');

/* ================== Users ================== */
Route::resource(config('laraadmin.adminRoute') . '/users', 'LA\UsersController');
Route::get(config('laraadmin.adminRoute') . '/user_dt_ajax', 'LA\UsersController@dtajax');

/* ================== Uploads ================== */
Route::resource(config('laraadmin.adminRoute') . '/uploads', 'LA\UploadsController');
Route::post(config('laraadmin.adminRoute') . '/upload_files', 'LA\UploadsController@upload_files');
Route::get(config('laraadmin.adminRoute') . '/uploaded_files', 'LA\UploadsController@uploaded_files');
Route::get('files/{hash}/{name}', 'LA\UploadsController@get_file');
Route::post(config('laraadmin.adminRoute') . '/uploads_update_caption', 'LA\UploadsController@update_caption');
Route::post(config('laraadmin.adminRoute') . '/uploads_update_filename', 'LA\UploadsController@update_filename');
Route::post(config('laraadmin.adminRoute') . '/uploads_update_public', 'LA\UploadsController@update_public');
Route::post(config('laraadmin.adminRoute') . '/uploads_delete_file', 'LA\UploadsController@delete_file');

/* ================== Roles ================== */
Route::resource(config('laraadmin.adminRoute') . '/roles', 'LA\RolesController');
Route::get(config('laraadmin.adminRoute') . '/role_dt_ajax', 'LA\RolesController@dtajax');

/* ================== Departments ================== */
Route::resource(config('laraadmin.adminRoute') . '/departments', 'LA\DepartmentsController');
Route::get(config('laraadmin.adminRoute') . '/department_dt_ajax', 'LA\DepartmentsController@dtajax');

/* ================== Employees ================== */
Route::resource(config('laraadmin.adminRoute') . '/employees', 'LA\EmployeesController');
Route::get(config('laraadmin.adminRoute') . '/employee_dt_ajax', 'LA\EmployeesController@dtajax');

/* ================== Organizations ================== */
Route::resource(config('laraadmin.adminRoute') . '/organizations', 'LA\OrganizationsController');
Route::get(config('laraadmin.adminRoute') . '/organization_dt_ajax', 'LA\OrganizationsController@dtajax');

/* ================== Courses ================== */
Route::resource(config('laraadmin.adminRoute') . '/courses', 'LA\CoursesController');
Route::get(config('laraadmin.adminRoute') . '/course_dt_ajax', 'LA\CoursesController@dtajax');

/* ================== Colleges ================== */
Route::resource(config('laraadmin.adminRoute') . '/colleges', 'LA\CollegesController');
Route::get(config('laraadmin.adminRoute') . '/college_dt_ajax', 'LA\CollegesController@dtajax');

/* ================== Students ================== */
Route::resource(config('laraadmin.adminRoute') . '/students', 'LA\StudentsController');
Route::get(config('laraadmin.adminRoute') . '/student_dt_ajax', 'LA\StudentsController@dtajax');

/* ================== Slideshows ================== */
Route::resource(config('laraadmin.adminRoute') . '/slideshows', 'LA\SlideshowsController');
Route::get(config('laraadmin.adminRoute') . '/slideshow_dt_ajax', 'LA\SlideshowsController@dtajax');
