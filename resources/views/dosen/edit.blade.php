<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Edit Dosen</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Edit Dosen</h1>
                <hr>
                <form action="{{ route('dosens.update', $ini->id) }}" method="POST">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label for="nip">NIP</label>
                        <input type="text" name="nip" id="nip" class="form-control @error('nip') is-invalid @enderror" value="{{ old('nip', $ini->nip) }}">
                        @error('nip')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jurusan_id">Jurusan</label>
                        <select class="form-control" name="jurusan_id" id="jurusan_id">
                            @foreach ($jurusans as $jurusan)
                                <option value="{{ $jurusan->id }}" {{ old('jurusan_id') ?? $ini->jurusan_id == $jurusan->id ? 'selected' : '' }}>
                                    {{ $jurusan->nama_jurusan }}
                                </option>
                            @endforeach
                        </select>
                        @error('jurusan_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control @error('nama') is-invalid @enderror" value="{{ old('nama', $ini->nama) }}">
                        @error('nama')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="mata_kuliah">Mata Kuliah</label>
                        <input type="text" name="mata_kuliah" id="mata_kuliah" class="form-control @error('mata_kuliah') is-invalid @enderror" value="{{ old('mata_kuliah', $ini->mata_kuliah) }}">
                        @error('mata_kuliah')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="sks">SKS</label>
                        <input type="text" name="sks" id="sks" class="form-control @error('sks') is-invalid @enderror" value="{{ old('sks', $ini->sks) }}">
                        @error('sks')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama_kontak">Nama Kontak Urgensi</label>
                        <input type="text" name="nama_kontak" id="nama_kontak" class="form-control @error('nama_kontak') is-invalid @enderror" value="{{ old('nama_kontak', $ini->urgent->nama_kontak) }}">
                        @error('nama_kontak')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="hubungan_kontak">Hubungan Kontak Urgensi</label>
                        <input type="text" name="hubungan_kontak" id="hubungan_kontak" class="form-control @error('hubungan_kontak') is-invalid @enderror" value="{{ old('hubungan_kontak', $ini->urgent->hubungan_kontak) }}">
                        @error('hubungan_kontak')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="telepon_kontak">Telepon Kontak Urgensi</label>
                        <input type="text" name="telepon_kontak" id="telepon_kontak" class="form-control @error('telepon_kontak') is-invalid @enderror" value="{{ old('telepon_kontak', $ini->urgent->telepon_kontak) }}">
                        @error('telepon_kontak')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email_kontak">Email Kontak Urgensi</label>
                        <input type="text" name="email_kontak" id="email_kontak" class="form-control @error('email_kontak') is-invalid @enderror" value="{{ old('email_kontak', $ini->urgent->email_kontak) }}">
                        @error('email_kontak')
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