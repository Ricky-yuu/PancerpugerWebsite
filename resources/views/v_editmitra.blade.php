@extends('layout.v_template')
@section('title','mitra')


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
        <form action="/mitra/update/{{$mitra->id_mitra}}" method="post" enctype="multipart/form-data">
            @csrf
            <br>
        <div class="content">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label >Username</label>
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" value="{{$mitra->username }}" readonly>
                        <div class="text-denger">
                            @error('username')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label >Nama Mitra</label>
                        <input type="text" name="nama_mitra" class="form-control @error('nama_mitra') is-invalid @enderror" placeholder="nama_mitra" value="{{ $mitra->nama_mitra }}">
                        <div class="text-denger">
                            @error('nama_mitra')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label >password</label>
                        <input type="text" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="password" value="{{$mitra->password}}">
                        <div class="text-denger">
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label >Email</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="email" value="{{$mitra->email}}">
                        <div class="text-denger">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label >telp</label>
                        <input type="text" name="telp" class="form-control @error('telp') is-invalid @enderror" placeholder="telp" value="{{$mitra->telp}}">
                        <div class="text-denger">
                            @error('telp')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="col-sm 12">
                        <div class="col-sm 6">
                            <img src="{{ url('foto_mitra/'.$mitra->foto_mitra) }}" width="100px">
                        </div>
                        <br>
                        <div class="col-sm 6">
                            <div class="form-group">
                                <label >Ganti Foto Mitra</label>
                                <input type="file" name="foto_mitra" class="form-control">
                                <div class="text-denger">
                                    @error('foto')
                                        <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
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