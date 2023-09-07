<?php

namespace App\Http\Controllers;

use App\Models\laporan_kegiatan;
use Illuminate\Http\Request;

class ResourceController extends Controller
{
    public function index(){
        $data['laporan_kegiatan'] = laporan_kegiatan::orderBy('id', 'desc');
        return view ('laporan_kegiatan.index', $data);
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
            'lampiran' => 'required|file|image|mimes:jpg,png,jpeg|max:2048',

        ]);
            $file = $request->file('file');
            $nama_file = time()."_".$file->getClientOriginalName();
            $tujuan_upload = 'data_file';
		    $file->move($tujuan_upload,$nama_file);
            $laporan_kegiatan = new laporan_kegiatan;
            $laporan_kegiatan->tanggal = $request->tanggal;
            $laporan_kegiatan->hari = $request->hari;
            $laporan_kegiatan->minggu_ke = $request->minggu_ke;
            $laporan_kegiatan->kegiatan_kerja_harian = $request->kegiatan_kerja_harian;
            $laporan_kegiatan->lampiran = $request->lampiran;
            $laporan_kegiatan->save();
            return redirect()->route('laporan_kegiatan.index')->with('sukses','laporan kegiatan berhasil ditambahkan');
    }
}
