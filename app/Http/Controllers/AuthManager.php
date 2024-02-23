<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class AuthManager extends Controller
{
    function login(){
        return view('login');
    }

    function registration(){
        return view('registration');
    }
    function loginPost(Request  $request){
            $request->validate([
                'email' =>'required',
                'password' =>'required',
            ]);

            $credentials = $request-> only('email','password');
       if(Auth::attemt($credentials)){
                return redirect()-intended(route('home'));
       }
       return redirect(route('login'))->with("error", "login details are not correct");
    }
    function registrationPost(Request $request){
        $request->validate([
            'name' =>'required',
            'email' =>'required|email|unique:users',
            'password' =>'required',
        ]);
        $data['name'] = $request ->name; 
        $data['email'] = $request ->email;
        $data['password'] = Hash::make ($request ->password);
        $user= User ::create($data);
        if(!$user){
            return redirect(route('registration'))->with("error", "registration Failed Try Again");
        }
        return redirect(route('login'))->with("Success", "Registration Success, Login to access the  app");  
    }
    function logout(){
        Seesion::flush();
        Auth::logout();
        return redirect(route('login'));
    }
}
