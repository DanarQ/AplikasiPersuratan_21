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
                    <h3 class="text-center my-4">Data Pengguna</h3>
                    <hr>
                </div>
                <div class="card border-0 shadow-sm rounded">
                    <div class="card-body">
                        <form action="{{ route('pengguna.update', $pengguna->id) }}" method="POST" >
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="exampleInputEmail1">Username</label>
                                <input type="text" name="username" class="form-control" id="exampleInputEmail1" placeholder="Enter username" value="{{ old('username', $pengguna->username) }}">
                                @error('username')
                                <div class="alert alert-danger mt-2">
                                    {{ $message }}
                                </div>
                                @enderror
                            </div>
                            <div class="form-group">
                              <label for="exampleInputPassword1">Password</label>
                              <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" value="{{ old('password', $pengguna->password) }}">
                              @error('password')
                              <div class="alert alert-danger mt-2">
                                  {{ $message }}
                              </div>
                              @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect1">status</label>
                                <select class="form-control" name="status" id="exampleFormControlSelect1">
                                  <option value="{{ old('status', $pengguna->status) }}"> {{ old('status', $pengguna->status) }} </option>
                                  <option value="send">Send</option>
                                  <option value="pending">Pending</option>
                                 </select>
                                 @error('status')
                                 <div class="alert alert-danger mt-2">
                                     {{ $message }}
                                 </div>
                                 @enderror
                            </div>
                            <div class="form-group">
                                <label for="exampleFormControlSelect2">Nama Petugas</label>
                                <select class="form-control" name="nama_ptgs" id="exampleFormControlSelect2">
                                  <option value="{{ old('nama_ptgs', $pengguna->nama_ptgs) }}"> {{ old('nama_ptgs', $pengguna->nama_ptgs) }} </option>
                                  <option value="andi">Andi</option>
                                  <option value="lukas">Lukas</option>
                                  <option value="saputra">Saputra</option>
                                  <option value="maman">Maman</option>
                                 </select>
                                 @error('nama_ptgs')
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
           
                        
                        {{-- {{ $user->links() }} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>



