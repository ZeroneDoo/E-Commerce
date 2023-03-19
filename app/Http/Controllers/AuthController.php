<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function viewLogin(){
        return view("auth.login");
    }

    public function postLogin(Request $request){
        $validate = $request->validate([
            "email" => "required",
            "password" => "required|min:6"
        ],[
            "email.required" => "Email tidak boleh kosong!",
            "password.required" => "Password tidak boleh kosong!",
            "password.min" => "Password minimal terdiri dari 6 karakter!",
        ]);

        if(Auth::attempt($validate)){
            return redirect()->route('home');
        }else{
            return redirect('/login')->with('error', 'Email atau Password tidak valid');
        }
    }

    public function postLogout(Request $request){
        Auth::logout();

        return redirect()->route('login');
    }

    public function viewRegister(){
        return view("auth.register");
    }

    public function postRegister(Request $request){
    }

    public function viewReset(){
        return view("auth.resetPassword");
    }
}
