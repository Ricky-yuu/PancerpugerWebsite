@extends('layout.v_template')
@section('title','mitra')


@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mitra</title>
</head>
<body>

    <div class="container">
        
    <table class="table">
        <tr>
            <th width="150px">Nama Mitra</th>
            <th width="30px">:</th>
            <th>{{ $mitra->nama_mitra }}</th>
        </tr>
        <tr>
            <th width="150px">Username</th>
            <th width="30px">:</th>
            <th>{{ $mitra->username }}</th>
        </tr>
        <tr>
            <th width="150px">Password</th>
            <th width="30px">:</th>
            <th>{{ $mitra->password }}</th>
        </tr>
        <tr>
            <th width="150px">Email</th>
            <th width="30px">:</th>
            <th>{{ $mitra->email }}</th>
        </tr>
        <tr>
            <th width="150px">Telepon</th>
            <th width="30px">:</th>
            <th>{{ $mitra->telp }}</th>
        </tr>
        <tr>
            <th width="150px">Foto</th>
            <th width="30px">:</th>
            <th><img src="{{ url('foto_mitra/'.$mitra->foto_mitra) }}" width="250px"></th>
        </tr>
        <tr>
            <th>
                <a href="/mitra" class="btn btn-success btn-sm">Kembali</a>
            </th>
        </tr>

    </table>
        

    </div>

</body>
</html>
@endsection