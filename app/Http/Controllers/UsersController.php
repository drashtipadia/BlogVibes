<?php

namespace App\Http\Controllers;

use App\Models\Comment;
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
        $comment = Comment::where('user_id', session('id'))->with('get_post')->get();
        //echo $post;

        $data = compact('post', 'user', 'comment');
        return view('profile')->with($data);



    }
}