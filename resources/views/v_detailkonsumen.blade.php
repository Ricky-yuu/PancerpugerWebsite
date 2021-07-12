@extends('layout.v_template')
@section('title','Konsumen')


@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Konsumen</title>
</head>
<body>

    <div class="container">
        
    <table class="table">
        <tr>
            <th width="150px">Nama Konsumen</th>
            <th width="30px">:</th>
            <th>{{ $konsumen->nama_konsumen }}</th>
        </tr>
        <tr>
            <th width="150px">Username</th>
            <th width="30px">:</th>
            <th>{{ $konsumen->username }}</th>
        </tr>
        <tr>
            <th width="150px">Password</th>
            <th width="30px">:</th>
            <th>{{ $konsumen->password }}</th>
        </tr>
        <tr>
            <th width="150px">Email</th>
            <th width="30px">:</th>
            <th>{{ $konsumen->email }}</th>
        </tr>
        <tr>
            <th width="150px">Telepon</th>
            <th width="30px">:</th>
            <th>{{ $konsumen->telp }}</th>
        </tr>
        <tr>
            <th width="150px">Foto</th>
            <th width="30px">:</th>
            <th><img src="{{ url('foto_konsumen/'.$konsumen->foto_konsumen) }}" width="250px"></th>
        </tr>
        <tr>
            <th>
                <a href="/konsumen" class="btn btn-success btn-sm">Kembali</a>
            </th>
        </tr>

    </table>
        

    </div>

</body>
</html>
@endsection