<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class layoutController extends Controller
{
    public function index(){
        return view('dashboard');
    }
    public function adminDash(){
        return view('admin.dashboard');
    }
    public function addLaporan(){
        return view('addLaporan');
    }
    public function pAddLaporan(Request $request){
        $request->laporan_kegiatan();
    }
}
