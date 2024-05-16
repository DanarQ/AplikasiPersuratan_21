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
                    <h3 class="text-center my-4">Data kepalasurat</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('kepalasurat.update', $kepalasurat->id) }}" method="POST" >
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="exampleInputKOP">Nama KOP</label>
                                <input type="text" name="nama_kop" class="form-control" id="exampleInputKOP" placeholder="Enter nama_kop" value="{{ old('nama_kop', $kepalasurat->nama_kop) }}">
                                @error('nama_kop')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleAlamatKOP">Nama Alamat</label>
                                <input type="text" name="alamat_kop" class="form-control" id="exampleAlamatKOP" placeholder="Enter alamat_kop" value="{{ old('alamat_kop', $kepalasurat->alamat_kop) }}">
                                @error('alamat_kop')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                            <label for="exampleNamaTujuan">Nama Tujuan</label>
                                <input type="text" name="nama_tujuan" class="form-control" id="exampleNamaTujuan" placeholder="Enter nama_tujuan" value="{{ old('nama_tujuan', $kepalasurat->nama_tujuan) }}">
                                @error('nama_tujuan')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>

                              <br/>
                              <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                              </div>
                          </form>
           
                        
                        {{-- {{ $kepalasurat->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



