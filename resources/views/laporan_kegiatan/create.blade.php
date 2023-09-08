<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create Laporan</title>
</head>
<body>
    <center>
    <h1>Tambah Data</h1>
    <form action="{{route('laporan_kegiatan.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
    <table border="2">
        <th>User_ID</th>
        <th>Tanggal</th>
        <th>Hari</th>
        <th>Minggu Ke</th>
        <th>Kegiatan Kerja</th>
        {{-- <th>Lampiran</th> --}}
        <th>Aksi</th>
        <tr>
            <td><input type="hidden" name="user_id" value="{{Auth::id()}}"></td>
            <td><input type="date" name="tanggal" id=""></td>
            <td><input type="text" name="hari" id="" minlength="4" maxlength="6"></td>
            <td><input type="number" name="minggu_ke" id="" maxlength="2"></td>
            <td><input type="text" name="kegiatan_kerja_harian" id=""></td>
            {{-- <td><input type="file" name="lampiran" id="" accept="image/*"></td> --}}
            <td><input type="submit" value="Submit"></td>
        </tr>
    </table>
    </form>
    </center>
</body>
</html>
