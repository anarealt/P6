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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

Route::resource('/', 'LoginController');

Route::resource('login', 'LoginController');
Route::resource('dashboard', 'DashBoardController');
Route::resource('course', 'CourseController');
Route::resource('user', 'UserController');
Route::resource('schedule', 'ScheduleController');
Route::resource('classroom', 'ClassroomController');

Route::post('auth', 'LoginController@auth')->name('auth');

Route::get('logout', 'LoginController@logout')->name('logout');
Route::get('/classroom/{id}/student', 'ClassroomController@student');

Route::post('classroom/{id}/storeStudent', 'ClassroomController@storeStudent')->name('storeStudent');

Route::get('/clear', function() {
   	Artisan::call('cache:clear');
   	Artisan::call('config:clear');
   	Artisan::call('config:cache');
   	Artisan::call('view:clear');

	echo "clear";
    // return what you want
});

Route::get('/migrate', function() {
    $exitCode = Artisan::call('migrate');
    echo "migrate :" . $exitCode;
    // return what you want
});
