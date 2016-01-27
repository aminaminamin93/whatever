<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Users;
Route::get('/', function () {
    return \View::make('/admin/home/index')->with('title', 'Home');
});

Route::get('/products', function(){
	return \View::make('/admin/products/index')->with('title', 'Products');
});

Route::get('/orders', function(){
	return \View::make('/admin/orders/index')->with('title', 'Orders');
});

Route::get('/users', function(){
	return Users::all();
});

// Route::get('/home', function(){
// 	return 'This is home';
// });
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
