@extends('layout.v_template')
@section('title','Nelayan')


@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nelayan</title>
</head>
<body>

    <div class="container">
            <form action="/nelayan/insert" method="post" enctype="multipart/form-data">
                @csrf
                <br>
         <div class="content">
             <div class="row">
             <div class="col-sm-6">
                    <div class="form-group">
                    <label >Nama Nelayan</label>
                    <input type="text" name="nama_nelayan" class="form-control" placeholder="nama_nelayan" value="{{ old('nama_nelayan') }}">
                    <div class="text-denger">
                        @error('nama_nelayan')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                        <div class="form-group">
                            <label >Username</label>
                            <input type="text" name="username" class="form-control" placeholder="Username" value="{{ old('username') }}">
                            <div class="text-denger">
                                @error('username')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label >password</label>
                            <input type="text" name="password" class="form-control " placeholder="password" value="{{ old('password') }}">
                            <div class="text-denger">
                                @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group">
                            <label >Email</label>
                            <input type="text" name="email" class="form-control " placeholder="email" value="{{ old('email') }}">
                            <div class="text-denger">
                                @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label >Telepon</label>
                                <input type="text" name="telp" class="form-control " placeholder="telepon" value="{{ old('telp') }}">
                                <div class="text-denger">
                                    @error('telp')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label >Foto Nelayan</label>
                            <input type="file" name="foto_nelayan" class="form-control @error('foto') is-invalid @enderror" value="{{ old('foto_nelayan') }}" >
                            <div class="text-denger">
                                @error('foto_nelayan')
                                <div class="alert alert-danger">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>
                    </div>
                        <br>
                        <div class="form-group">
                            <button class="btn btn-primary btn-sm">Simpan</button>
                        </div>
                    </div>
                    
                </div>
            </div>
            </form>
    </div>

</body>
</html>
@endsection