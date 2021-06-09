<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Info Jurusan</title>
</head>
<body>
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <h3 class="py-3">
                    Informasi Jurusan {{ $ini->nama_jurusan }}
                </h3>
                <hr>
                <ul>
                    <li>ID Jurusan: {{ $ini->id }}</li>
                    <li>Nama Jurusan: {{ $ini->nama_jurusan }}</li>
                    <li>Ketua Jurusan: {{ $ini->ketua_jurusan }}</li>
                    <li>Jumlah Dosen: {{ $ini->jumlah_dosen }}</li>
                </ul>
                <a href="{{ route('jurusans.index') }}"><= Kembali</a>
            </div>
        </div>
    </div>

</body>
</html>