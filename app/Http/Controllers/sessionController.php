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

    public function actionregister(Request $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Session::flash('message', 'Register Berhasil. Akun Anda sudah Aktif silahkan Login menggunakan email dan password.');
        return redirect('register');
    }

    public function login()
    {
        if (Auth::check()) {
            return redirect('/');
        }else{
            return view('auth/login');
        }
    }
    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            return redirect('/');
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('login');
        }
    }

    public function actionlogout(Request $request)
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('login');
    }
}
