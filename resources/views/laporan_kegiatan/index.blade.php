<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
</head>
<body>
    <a href="/">
        <button>
            Main Welcome
        </button>
    </a>

    <table border="2">
        <th>Tanggal</th>
        <th>Hari</th>
        <th>Minggu ke</th>
        <th>Kegiatan Kerja Harian</th>
        {{-- <th>Lampiran</th> --}}
        <th>Catatan Pembimbing</th>
        <th>Aksi</th>
        @foreach ($laporan_kegiatan as $lk)
        <tr>
            <td>{{$lk->tanggal}}</td>
            <td>{{$lk->hari}}</td>
            <td>{{$lk->minggu_ke}}</td>
            <td>{{$lk->kegiatan_kerja_harian}}</td>
            {{-- <td>foto</td> --}}
            <td>-</td>
            <td><a href="{{route('laporan_kegiatan.edit',  $lk->id)}}"><button>Edit</button></a></td>
        </tr>
        @endforeach
    </table>
    <a href="{{route('laporan_kegiatan.create')}}"><button>Tambah Laporan</button></a>
</body>
</html>
