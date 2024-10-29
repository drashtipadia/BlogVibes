<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register_user;
use App\Models\Post;

class UsersController extends Controller
{
    //
    public function display()
    {
        $user = new register_user();

        $users = register_user::all();
        $data = compact('users');
        return view('Admin.userlist')->with($data);
    }
    public function userprofile()
    {
        // echo session('id');
        // echo session('name');
        $user = register_user::where('user_id', session('id'))->get();
        $post = Post::where('user_id', session('id'))->get();

        //echo $post;

        $data = compact('post', 'user');
        return view('profile')->with($data);



    }
}