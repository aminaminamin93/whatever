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
use App\User;
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
	
	if(User::all()){
		$users = \DB::table('users')->get();
		foreach ($users as $user) {
			echo 'Name: '.$user->name.'<br>Email :'.$user->email.'<br>';
		}
	}else{
		return "false";
	}
});

Route::get('/addusers', function(){
	\DB::table('users')->insert(
    	array('name' => 'amin ali', 'email' => 'aminali@gmail.com','password' => bcrypt('superadmin'),'remember_token'=>bcrypt('token4'), 'created_at'=>'2014-01-01 00:00:00', 'updated_at'=>'2014-01-01 00:00:00')
	);
	
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
