<?php

namespace App\Http\Controllers;

use App\Models\Pengguna;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;

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

        return back();
    }

    public function viewRegister(){
        return view("auth.register");
    }

    public function postRegister(Request $request){
        $validate = $request->validate([
            "username" => "required",
            "jenis_kelamin" => "required",
            "email" => "required",
            "password" => "required|min:5|same:reapeat",
            "reapeat" => "required|min:5",
        ],[
            'username.required' => "Username tidak boleh kosong!",
            'jenis_kelamin.required' => "Jenis kelamin tidak boleh kosong!",
            'email.required' => "Email tidak boleh kosong!",
            'password.required' => "Password tidak boleh kosong!",
            'password.min' => "Password minimal terdiri dari 5 karakter!",
            'password.same' => "Password tidak cocok!",
            'reapeat.required' => "Konfirmasi Password tidak boleh kosong!",
            'reapeat.min' => "Konfirmasi password minimal terdiri dari 5 karakter!",
        ]);

        $data = Pengguna::create([
            'username' => $request->username,
            'jenis_kelamin' => $request->jenis_kelamin,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route("home");

    }

    public function viewReset(){
        return view("auth.resetPassword");
    }

    // google

    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }
    
    public function handleGoogleCallback()
    {
        try {
            $user = Socialite::driver("google")->user();
            $findId = Pengguna::where("google_id", $user->getId())->first();

            if($findId)
            {
                Auth::login($findId);
            }else{
                $tambahData = Pengguna::create([
                    ""
                ]);
            }
        } catch(\Throwable $err){

        }
    }
}
