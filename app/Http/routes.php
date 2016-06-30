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
Route::get('/', function () {
    $user_data=array(
        'message'=>''
    );
    if(session('user_id')) {
        return view('loggedin', compact('user_data'));
    }
    else{
        return view('login',compact('user_data'));
    }
});
//Route::post('/login', function () {
//    return view('loggedin');
//});
Route::post('/login','UserController@login');
Route::resource('/member','MemberController');
//Route::post('/addmember','MemberController@store');
Route::get('/logout','UserController@logout');
Route::get('/member',function(){
   return view('member');
});