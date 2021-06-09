<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Edit Jurusan</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Edit Jurusan</h1>
                <hr>
                <form action="{{ route('jurusans.update', $ini->id) }}" method="POST">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="nama_jurusan">Nama Jurusan</label>
                        <input type="text" name="nama_jurusan" id="nama_jurusan" class="form-control @error('nama_jurusan') is-invalid @enderror" value="{{ old('nama_jurusan', $ini->nama_jurusan) }}">
                        @error('nama_jurusan')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="ketua_jurusan">Ketua Jurusan</label>
                        <input type="text" name="ketua_jurusan" id="ketua_jurusan" class="form-control @error('ketua_jurusan') is-invalid @enderror" value="{{ old('ketua_jurusan', $ini->ketua_jurusan) }}">
                        @error('ketua_jurusan')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jumlah_dosen">Jumlah Dosen</label>
                        <input type="text" name="jumlah_dosen" id="jumlah_dosen" class="form-control @error('jumlah_dosen') is-invalid @enderror" value="{{ old('jumlah_dosen', $ini->jumlah_dosen) }}">
                        @error('jumlah_dosen')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary my-3">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>