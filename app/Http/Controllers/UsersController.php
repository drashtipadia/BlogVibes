<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\register_user;

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
}