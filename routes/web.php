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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

/* Route::get('/home', 'HomeController@index')->name('home'); */

Route::get('/home', ['middleware' => ['auth', 'admin'], function() {
    return view('admin_home');
}]);

Route::get('/student_home', function () {
  return view('student_home');
});

Route::get('/patients/create', ['middleware' => ['auth', 'admin'], function() {
    return view('patients.create');
}]);
Route::post('/patients', 'PatientController@store');

Route::get('/patients/index', 'PatientController@index', function()
    {
        return view('patients.index', compact('patients'));
    });
Route::get('/patients/edit', 'PatientController@edit', function()
    {
        return view('patients.edit');
    });

Route::resource('patients', 'PatientController');

Route::get('/orders/create', ['middleware' => ['auth', 'admin'], function() {
    return view('orders.create');
}]);
Route::post('/orders', 'OrderController@store');

Route::get('/orders/show', function() {
  return view('orders.show');
});
Route::get('/labs/create', ['middleware' => ['auth', 'admin'], function() {
    return view('labs.create');
}]);
Route::post('/labs', 'LabController@store');
