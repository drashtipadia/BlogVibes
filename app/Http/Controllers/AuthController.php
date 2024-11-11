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
    public function update(Request $request)
    {
        // echo $request['id'], $request['name'], $request['number'], $request['userinfo'];
        $this->validate($request, [
            'number' => 'digits:10',
        ]);
        $res = register_user::where('user_id', $request['id'])->update(['name' => $request['name'], 'about_user' => $request['userinfo'], 'number' => $request['number']]);
        if ($res === 1) {
            return redirect('profile')->with('userinfosuccess', 'Details Update Successfully');
        } else {
            return back();
        }

    }
    public function pwdupdate(Request $request)
    {
        $this->validate(
            $request,
            ['oldpwd' => 'required', 'newpwd' => 'required', 'confirmpwd' => 'required|same:newpwd'],
            ['confirmpwd.same' => 'New Password and Confirm Password not match']
        );
        $res = register_user::where('user_id', $request['id'])->where('password', md5($request['oldpwd']))->exists();
        //echo $res;
        if ($res == 1) {
            $val = register_user::where('user_id', $request['id'])->update(['password' => md5($request['newpwd'])]);
            if ($val == 1) {

                return redirect('profile')->with('pwdsuccess', 'Password update successfully');
            }
        } else {
            return redirect('profile')->with('pwderror', 'Current Password is wrong');
        }
    }
}