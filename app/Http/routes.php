<?php
//Basic Routes
Route::get('/', function() {
    return view('pages.home');
});
Route::get('/contact', function() {
    return view('pages.contact');
});

//Product Appointments
Route::get('/appointment/{productId}', 'AppointmentController@showForm');
Route::post('/appointment/{productId}', 'AppointmentController@getForm');

//Authentication routes
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');

//Resources
Route::get('admin/product/index', 'ProductController@adminIndex');
Route::resource('product', 'ProductController');
Route::get('admin/question/index', 'QuestionController@adminIndex');
Route::resource('question', 'QuestionController');
Route::post('/customer/unsubscribe', 'CustomerController@destroy');
Route::get('/customer/unsubscribe', 'CustomerController@unsubscribe');
Route::resource('customer', 'CustomerController');

//Protected Routes (Login required)
Route::group(['middleware' => 'auth'], function()
{
    Route::get('auth/logout', function() {
        Auth::logout();
        return redirect('/');
    });
    Route::get('admin/dashboard', function() {
        return view('adminPanel.home');
    });
});
