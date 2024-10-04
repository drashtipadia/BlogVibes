<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\register_user;

class AuthController extends Controller
{
    //

    public function login(Request $request)
    {
        $this->validate($request, ['loginemail' => 'required|email', 'loginpwd' => 'required']);
        $user = register_user::where('email', $request['loginemail'])->where('password', md5($request['loginpwd']))->first();
        if ($user) {

            session()->put('id', $user->user_id);
            session()->put('name', $user->name);
            return redirect('/');
        } else {

            return redirect('login')->with('error', 'Email/Password is incorrect');
        }

    }
    public function userRegister(Request $request)
    {

        $this->validate($request, [
            'rname' => 'required|alpha',
            'remail' => 'required|email',
            'rnumber' => 'required|numeric',
            'aboutuser' => 'required',
            'rpassword' => 'required',
            'rcpassword' => 'required|same:rpassword'
        ]);

        //echo $request['rname'], $request['remail'], $request['aboutuser'], $request['rpassword'], $request['rnumber'];

        $newUser = new register_user();
        $newUser->name = $request['rname'];
        $newUser->email = $request['remail'];
        $newUser->about_user = $request['aboutuser'];
        $newUser->password = md5($request['rpassword']);
        $newUser->number = $request['rnumber'];
        //$newUser->save();
        if ($newUser->save()) {
            return redirect('login')->with('success', 'Congrulation! You are Registered');
        } else {
            echo "<script> alert('Error Generate'); </script>";
        }

    }

    public function logout()
    {
        session()->forget('id');
        session()->forget('name');
        return redirect('/');

    }
}