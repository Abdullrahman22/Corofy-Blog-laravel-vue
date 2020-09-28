<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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



Auth::routes();


/*=========== Login admin =========*/

Route::group(['prefix' => 'auth', 'namespace' => 'AuthAPI'], function() {    
    Route::get('admin/login', 'AdminAuthController@view') ;
    Route::post('admin/login', 'AdminAuthController@login') ->name("adminLogin") ;
});


/*=========== admin Routes =========*/
// admin panal
Route::get("/admin/{any}", "Admin\AdminController@index") -> where([ "any" => ".*" ]) -> middleware('auth:admin');  


/*=========== Web Routes ===========*/
Route::get("/{any}", function(){
    return view('app');
}) -> where([ "any" => ".*" ]); 
