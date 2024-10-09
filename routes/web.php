<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\categoryController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserContactController;
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

Route::get('/', function () {
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('category', function () {
    return view('category');
});
Route::get('login', function () {
    return view('login');
});
Route::get('registration', function () {
    return view('registration');
});
Route::get('createblog', 'blogsController@display')->middleware('user');

Route::post('addblog', 'blogsController@store')->middleware('user');

Route::post('user_login', 'AuthController@login');
Route::post('user_register', 'AuthController@userRegister');
Route::post('contact', 'UserContactController@store');
Route::get('logout', 'AuthController@logout');



// ------------ADMIN-----------


Route::get('admin', function () {
    return view('Admin.admin_login');
});
Route::post('adminlogin', 'AdminController@login');
Route::get('indexAdmin', function () {
    return view('Admin.indexAdmin');
})->middleware('admin');
Route::get('adminlogout', 'AdminController@logout')->middleware('admin');
//==============
Route::get('categorydisplay', 'categoryController@display')->middleware('admin');
Route::get('admincategory', 'categoryController@view')->middleware('admin');
Route::post('category', 'categoryController@store')->middleware('admin');
Route::post('updatecategory', 'categoryController@update')->middleware('admin');
Route::get('category/delete/{id}', 'categoryController@delete')->middleware('admin');
//=========
Route::get('contactList', 'UserContactController@view')->middleware('admin');
Route::get('contact/delete/{id}', 'UserContactController@delete')->middleware('admin');

//==================
Route::get('users', 'UsersController@display')->middleware('admin');
//==================
Route::get('adminBlogs', 'blogsController@adminPostList')->middleware('admin');
Route::get('/blog/{id}', 'blogsController@adminblog')->middleware('admin');