<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data User</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background: white">

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <div>
                    <h3 class="text-center my-4">Data Kepala Surat</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <!-- belum di ubah -->
                        <a href="{{ route('kepalasurat.create') }}" class="btn btn-md btn-info mb-3">TAMBAH SURAT</a>
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">No</th>
                                    <th scope="col">nama_kop</th>
                                    <th scope="col">alamat_kop</th>
                                    <th scope="col">nama_tujuan</th>
                                    <th scope="col">ID user</th>
                                    <th scope="col" style="width: 20%">ACTIONS</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($kepalasurat as $index => $kepalasurat)
                                    <tr>
                                        <td class="text-center">
                                            {{ ++$index }}
                                        </td>
                                        <td>{{ $kepalasurat->nama_kop }}</td>
                                        <td>{{ $kepalasurat->alamat_kop }}</td>
                                        <td>{{ $kepalasurat->nama_tujuan }}</td>
                                        <td>{{ $kepalasurat->user_id }}</td>
                                        <td class="text-center">
                                            <!-- Belum di ubah -->
                                            <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('kepalasurat.destroy', $kepalasurat->id) }}" method="POST">
                                                <a href="{{ route('kepalasurat.show', $kepalasurat->id) }}" class="btn btn-sm btn-dark">SHOW</a>
                                                <a href="{{ route('kepalasurat.edit', $kepalasurat->id) }}" class="btn btn-sm btn-primary">EDIT</a>
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <div class="alert alert-danger">
                                        Data User Belum Ada.
                                    </div>
                                @endforelse
                            </tbody>
                        </table>
                        {{-- {{ $kepalasurat->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>







</body>
</html>