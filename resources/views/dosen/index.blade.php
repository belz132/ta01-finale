<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <title>Daftar Dosen</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Daftar Dosen</h1>
                <hr>
                @if (session('pesan'))
                    <div class="alert alert-success">
                        {{ session('pesan') }}
                    </div>
                @endif
                <table class="table table-striped text-center align-middle" id="datatable_dosen">
                    <thead>
                        <tr>
                            <th>NIP</th>
                            <th>Jurusan</th>
                            <th>Nama</th>
                            <th>Mata Kuliah</th>
                            <th>SKS</th>
                            <th>Kontak Urgensi</th>
                            {{-- <th>Hubungan Kontak</th>
                            <th>Telepon Kontak</th>
                            <th>Email Kontak</th> --}}
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($indexAll as $list)
                            <tr>
                                <td>{{ $list->nip }}</td>
                                <td>{{ $list->jurusan->nama_jurusan }}</td>
                                <td>{{ $list->nama }}</td>
                                <td>{{ $list->mata_kuliah }}</td>
                                <td>{{ $list->sks }}</td>
                                <td><a href="{{ route('dosens.show', $list->id) }}">{{ $list->urgent->nama_kontak }}</a></td>
                                {{-- <td>{{ $list->urgent->hubungan_kontak }}</td>
                                <td>{{ $list->urgent->telepon_kontak }}</td>
                                <td>{{ $list->urgent->email_kontak }}</td> --}}
                                <td>
                                    <a href="{{ route('dosens.show', $list->id) }}" class="btn btn-success d-inline">Lihat</a>
                                    <a href="{{ route('dosens.edit', $list->id) }}" class="btn btn-warning d-inline">Edit</a>
                                    <form action="{{ route('dosens.destroy', $list->id) }}" method="POST" class="d-inline">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <td colspan="9" class="text-center">Data Tidak Ditemukan!</td>
                        @endforelse
                    </tbody>
                </table>
                <a class="btn btn-primary" href="{{ route('dosens.create') }}">Tambah Dosen</a>
            </div>
        </div>
    </div>

    <script
        src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI="
        crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#datatable_dosen').DataTable();
        } );
    </script>
</body>
</html>