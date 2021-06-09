<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Info Dosen</title>
</head>
<body>
    <div class="container my-3">
        <div class="row">
            <div class="col-12">
                <div class="py-3">
                    Informasi {{ $ini->nama }}
                </div>
                <hr>
                <ul>
                    <li>NIK: {{ $ini->nip }}</li>
                    <li>Nama: {{ $ini->nama }}</li>
                    <li>Mata Kuliah: {{ $ini->mata_kuliah }}</li>
                    <li>SKS: {{ $ini->sks }}</li>
                    <li>Nama Kontak Urgensi: {{ $ini->urgent->nama_kontak }}</li>
                    <li>Hubungan Kontak Urgensi: {{ $ini->urgent->hubungan_kontak }}</li>
                    <li>Telepon Kontak Urgensi: {{ $ini->urgent->telepon_kontak }}</li>
                    <li>Email Kontak Urgensi: {{ $ini->urgent->email_kontak }}</li>
                </ul>
                <a href="{{ route('dosens.index') }}"><= Kembali</a>
            </div>
        </div>
    </div>

</body>
</html>