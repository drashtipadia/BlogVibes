<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\register_user;
use App\Models\UserContact;
use Illuminate\Http\Request;
use App\Models\admin;

class AdminController extends Controller
{
    //
    public function login(Request $request)
    {
        // echo $request['adminname'];
        // echo $request['adminpwd'];

        $checkAdmin = admin::where('admin_name', $request['adminname'])->where('admin_pwd', $request['adminpwd'])->first();
        if ($checkAdmin) {
            session()->put('a_id', $checkAdmin->admin_id);
            session()->put('a_name', $checkAdmin->admin_name);
            return redirect('indexAdmin');
        } else {
            return redirect('admin')->with('error', 'Email/Password is incorrect');
        }
    }
    public function display()
    {
        $admin = new admin();
    }
    public function logout()
    {
        session()->forget('a_id');
        session()->forget('a_name');
        return redirect('admin');
    }
    public function total()
    {
        $post = Post::all()->count();
        $com = Comment::all()->count();
        $cat = Category::all()->count();
        $user = register_user::all()->count();
        $con = UserContact::all()->count();
        $data = compact('post', 'com', 'cat', 'con', 'user');
        print_r($data);
        //     return view('Admin.indexAdmin')->with($data);
    }
}