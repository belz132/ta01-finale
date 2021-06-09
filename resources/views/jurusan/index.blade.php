<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <title>Daftar Jurusan</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Daftar Jurusan</h1>
                <hr>
                @if (session('pesan'))
                    <div class="alert alert-success">
                        {{ session('pesan') }}
                    </div>
                @endif
                <table class="table table-striped text-center align-middle" id="datatable_jurusan">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Jurusan</th>
                            <th>Ketua Jurusan</th>
                            <th>Jumlah Dosen</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($indexAll as $list)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $list->nama_jurusan }}</td>
                                <td>{{ $list->ketua_jurusan }}</td>
                                <td>{{ $list->jumlah_dosen }}</td>
                                <td>
                                    <a href="{{ route('jurusans.show', $list->id) }}" class="btn btn-success d-inline">Lihat</a>
                                    <a href="{{ route('jurusans.edit', $list->id) }}" class="btn btn-warning d-inline">Edit</a>
                                    <form action="{{ route('jurusans.destroy', $list->id) }}" method="POST" class="d-inline">
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
                <a class="btn btn-primary" href="{{ route('jurusans.create') }}">Tambah Jurusan</a>
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
            $('#datatable_jurusan').DataTable();
        } );
    </script>
</body>
</html>