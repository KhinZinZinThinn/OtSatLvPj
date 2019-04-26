<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function getLogin(){
        return view('login');
    }

    public function getRegister(){
        return view('register');
    }

    public function postRegister(Request $request){
        $this->validate($request,[
            'name'=>'required|unique:users',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5',
            'password_confirm'=>'required|same:password'
        ]);

            $user=new User();
            $user->name=$request['name'];
            $user->email=$request['email'];
            $user->password=bcrypt($request['password']);
            $user->save();
            return redirect()->back()->with('info','The User account has been successfully created!');

    }

    public function postLogin(Request $request){
        $this->validate($request,[
            'name'=>'required|exists:users',
            'password'=>'required|',
        ]);

        $name=$request['name'];
        $password=$request['password'];
        if(Auth::Attempt(['name'=>$name,'password'=>$password])){

            return redirect()->route('dashboard');



        }else{
            return redirect()->back()->with('err','The username & password is invalid');
        }
    }
}
