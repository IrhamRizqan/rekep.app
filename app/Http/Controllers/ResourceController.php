<?php

namespace App\Http\Controllers;

use App\Models\laporan_kegiatan;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function index(){
        $laporan_kegiatan = laporan_kegiatan::latest()->paginate(5);

        return view('laporan_kegiatan.index',compact('laporan_kegiatan'));
    }

    public function create(){
        return view('laporan_kegiatan.create');
    }

    public function store(Request $request){
        $request->validate([
            'tanggal' => 'required',
            'hari' => 'required',
            'minggu_ke' => 'required',
            'kegiatan_kerja_harian' => 'required',
        ]);
            $laporan_kegiatan = new laporan_kegiatan;
            $laporan_kegiatan->user_id = $request->user_id;
            $laporan_kegiatan->tanggal = $request->tanggal;
            $laporan_kegiatan->hari = $request->hari;
            $laporan_kegiatan->minggu_ke = $request->minggu_ke;
            $laporan_kegiatan->kegiatan_kerja_harian = $request->kegiatan_kerja_harian;
            $laporan_kegiatan->save();
            return redirect()->route('laporan_kegiatan.index')->with('sukses','laporan kegiatan berhasil ditambahkan');
    }
    public function show(laporan_kegiatan $laporan_kegiatan)
    {
        return view('laporan_kegiatan.show',compact('laporan_kegiatan'));
    }
    public function edit(laporan_kegiatan $laporan_kegiatan)
    {
        return view('laporan_kegiatan.edit',compact('laporan_kegiatan'));
    }

    public function update(Request $request, laporan_kegiatan $laporan_kegiatan)
    {
        $request->validate([
            'tanggal' => 'required',
            'hari' => 'required',
            'minggu_ke' => 'required',
            'kegiatan_kerja_harian' => 'required',
        ]);

        $laporan_kegiatan->update($request->all());

        return redirect('laporan_kegiatan')->with('success','laporan_kegiatan updated successfully');
    }
}
