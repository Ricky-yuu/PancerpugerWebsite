@extends('layout.v_template')
@section('title','Konsumen')


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
        <form action="/konsumen/update/{{$konsumen->id_konsumen}}" method="post" enctype="multipart/form-data">
            @csrf
            <br>
        <div class="content">
            <div class="row">
                <div class="col-sm-6">
                    <div class="form-group">
                        <label >Username</label>
                        <input type="text" name="username" class="form-control @error('username') is-invalid @enderror" placeholder="Username" value="{{$konsumen->username }}" readonly>
                        <div class="text-denger">
                            @error('username')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label >Nama Konsumen</label>
                        <input type="text" name="nama_konsumen" class="form-control @error('nama_konsumen') is-invalid @enderror" placeholder="nama_konsumen" value="{{ $konsumen->nama_konsumen }}">
                        <div class="text-denger">
                            @error('nama_konsumen')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label >password</label>
                        <input type="text" name="password" class="form-control @error('password') is-invalid @enderror" placeholder="password" value="{{$konsumen->password}}">
                        <div class="text-denger">
                            @error('password')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label >Email</label>
                        <input type="text" name="email" class="form-control @error('email') is-invalid @enderror" placeholder="email" value="{{$konsumen->email}}">
                        <div class="text-denger">
                            @error('email')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label >telp</label>
                        <input type="text" name="telp" class="form-control @error('telp') is-invalid @enderror" placeholder="telp" value="{{$konsumen->telp}}">
                        <div class="text-denger">
                            @error('telp')
                                <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <br>
                    <div class="col-sm 12">
                        <div class="col-sm 6">
                            <img src="{{ url('foto_konsumen/'.$konsumen->foto_konsumen) }}" width="100px">
                        </div>
                        <br>
                        <div class="col-sm 6">
                            <div class="form-group">
                                <label >Ganti Foto Konsumen</label>
                                <input type="file" name="foto_konsumen" class="form-control">
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