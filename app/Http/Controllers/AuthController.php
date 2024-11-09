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
        $this->validate(
            $request,
            ['loginemail' => 'required|email', 'loginpwd' => 'required'],
            [
                'loginemail.required' => 'Email is Required',
                'loginemail.email' => 'Email format is not valid ',
                'loginpwd.required' => 'Password is Required'
            ]
        );

        $user = register_user::where('email', '=', $request['loginemail'])->where('password', '=', md5($request['loginpwd']))->first();
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

        $this->validate(
            $request,
            [
                'rname' => 'required',
                'email' => 'required|email|unique:users',
                'rnumber' => 'required|digits:10',
                'aboutuser' => 'required',
                'rpassword' => 'required',
                'rcpassword' => 'required|same:rpassword'
            ],
            [
                'rname.required' => 'Name is Required',
                'email.required' => 'Email is Required',
                'email' => 'Email is not validate',
                'rnumber.required' => 'Number is required',
                'rnumber.digits' => 'Number only contain 10 Digits',
                'aboutuser.required' => 'Please tell something about yourself',
                'rpassword.required' => 'Password is required',
                'rcpassword.required' => 'Confirm Password is required',
                'rcpassword.same' => 'Password and Confirm password not match'


            ]
        );

        //echo $request['rname'], $request['email'], $request['aboutuser'], $request['rpassword'], $request['rnumber'];

        $newUser = new register_user();
        $newUser->name = $request['rname'];
        $newUser->email = $request['email'];
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