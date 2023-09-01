<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class sessionController extends Controller
{
    function index(){
        return view ('auth/index');
    }
    function register(){
        return view ('auth/register');
    }
    function validateRegister(Request $request){
        $request->validate([
            'name'  =>  'required',
            'email' =>  'required|email|unique:users',
            'password'  => 'required|min:3'
        ]);

        $data = $request->all();

        User::create([
            'name'  => $data['name'],
            'email' => $data['email'],
            'password'  =>  Hash::make($data['password'])
        ]);

        return redirect('login')->with('success', 'Your data inserted to database, try to login using your credentials');
    }
    function login(){
        return view('auth/login');
    }
    function processLogin(Request $request){
        Session::flash('email', $request->email);
        $request->validate([
            'email'=>'required',
            'password'=>'required'
        ], [
            'email.required'=>'Email Wajib di isi',
            'password.required'=>'Password Wajib di isi'
        ]);

        $cred = [
            "email" => $request->email,
            "password" => $request->password
        ];

        if(Auth::attempt($cred)){
            return redirect('../menu');
        } else{
            return redirect('login')->withErrors("Perhatikan username dan Password");
        }
    }

    function logout(){
        Auth::logout();
        return redirect('login');
    }
}
