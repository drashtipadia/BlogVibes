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

// Route::get('/', function () {
//     return view('index');
// });

Route::get('/', 'blogsController@index');

Route::get('about', function () {
    return view('about');
});

Route::get('category', 'categoryController@categorylist');
Route::get('blogs', 'blogsController@allblog');



Route::get('login', function () {
    return view('login');
});
Route::get('registration', function () {
    return view('registration');
});

//user
Route::post('user_login', 'AuthController@login');
Route::post('user_register', 'AuthController@userRegister');
Route::post('contact', 'UserContactController@store');
Route::get('logout', 'AuthController@logout');
Route::get('profile', 'UsersController@userprofile')->middleware('user');
Route::post('infoupdate', 'AuthController@update')->middleware('user');
Route::post('passwordupdate', 'AuthController@pwdupdate')->middleware('user');

//blogs

Route::get('createblog', 'categoryController@blogcreate')->middleware('user');

Route::post('addblog', 'blogsController@store')->middleware('user');
Route::post('updateblog', 'blogsController@update')->middleware('user');


Route::get('bloglist/{id?}', 'blogsController@userbloglist');
Route::get('blogdetails/{id}', 'blogsController@fullblog');
Route::post('/searching', 'blogsController@searchquery');

//==========
Route::get('blogupdate/{id}', 'blogsController@updateblog')->middleware('user');
Route::get('blogdelete/{id}', 'blogsController@deleteblog')->middleware('user');




//comment
Route::post('addcomment', 'commentController@store')->middleware('user');
Route::get('deletecomment/{id}', 'commentController@delete')->middleware('user');
Route::get('comstatus/{id}', 'commentController@updatestatus')->middleware('user');


// ------------ADMIN----------------------------------------------------------------------------


Route::get('admin', function () {
    return view('Admin.admin_login');
});
Route::post('adminlogin', 'AdminController@login');
Route::get('indexAdmin', 'AdminController@total')->middleware('admin');
Route::get('adminlogout', 'AdminController@logout')->middleware('admin');
//==============
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
Route::get('blogstatuschange/{id}', 'blogsController@statusupdate')->middleware('admin');
Route::get('blogsdelete/{id}', 'blogsController@deleteblog')->middleware('admin');
//==================
Route::get('admincomments', 'commentController@admincommentlist')->middleware('admin');
Route::get('comstatuschange/{id}', 'commentController@updatestatus')->middleware('admin');

//=====================
Route::get('adminprofile', 'AdminController@profile')->middleware('admin');
Route::post('updateadminpwd', 'AdminController@updatepwd')->middleware('admin');