<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Post;
use App\Models\register_user;
use App\Models\UserContact;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    //
    public function login(Request $request)
    {
        // echo $request['adminname'];
        // echo $request['adminpwd'];

        $checkAdmin = Admin::where('admin_name', $request['adminname'])->where('admin_pwd', $request['adminpwd'])->first();
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
        // echo $post, $com, $cat, $user, $con;
        //$data = ['post' => $post, 'comment' => $com, 'category' => $cat, 'user' => $user, 'conatct' => $con];
        //print_r($data);
        $data = compact(['post', 'com', 'cat', 'con', 'user']);
        //$er = compact('data');
        return view('Admin.indexAdmin')->with($data);
    }

    public function profile()
    {
        $res = admin::all();
        $data = compact('res');
        return view('Admin.adminprofile')->with($data);
    }
    public function updatepwd(Request $request)
    {
        // echo $request['id'];
        // echo $request['adminoldpwd'];
        // echo $request['adminnewpwd'];
        // echo $request['admincpwd'];

        $this->validate(
            $request,
            ['adminoldpwd' => 'required', 'adminnewpwd' => 'required', 'admincpwd' => 'required|same:adminnewpwd']
        );
        $res = admin::where('admin_id', session('a_id'))->where('admin_pwd', $request['adminoldpwd'])->exists();
        //echo $res;
        if ($res == 1) {
            $val = admin::where('admin_id', session('a_id'))->update(['admin_pwd' => $request['adminnewpwd']]);
            if ($val == 1) {
                echo "<script> alert('Password update successfully');</script>";
                return redirect('adminprofile')->with('success', 'Password update successfully');
            }
        } else {
            return redirect('adminprofile')->with('error', 'Current Password is wrong');
        }
    }
}