<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
            "passwrod.min" => "Password minimal terdiri dari 6 karakter!",
        ]);

        
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
