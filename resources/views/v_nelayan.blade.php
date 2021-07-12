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
<br>
<br>

    <div class="container">
        <a href="/nelayan/add" class="btn btn-primary btn-sm">Add Nelayan</a>
        <br><br>
        @if (session('pesan'))
        <div class="alert alert-success alert-dimissible">
            <h4><i class="icon fa fa-check"></i>Success</h4>
            {{(session('pesan'))}}.
        </div>
            
        @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>No</th>
                    <th>nama</th>
                    <th>Username</th>
                    <th>password</th>
                    <th>email</th>
                    <th>telp</th>
                    <th>foto</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php $no=1; ?> 
                @foreach ($nelayan as $data) 
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $data->username }}</td>
                        <td>{{ $data->nama_nelayan }}</td>
                        <td>{{ $data->password }}</td>
                        <td>{{ $data->email }}</td>
                        <td>{{ $data->telp }}</td>
                        <td><img src="{{ url('foto_nelayan/'.$data->foto_nelayan) }}" width="60px"></td>
                        <td>
                            <a href="/nelayan/detail/{{ $data->id_nelayan}}" class="btn btn-sn. btn-success">Detail</a>
                            <a href="/nelayan/edit/{{ $data->id_nelayan}}" class="btn btn-sn. btn-warning">Edit</a>
                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#delete{{ $data->id_nelayan}}">
                                Delete
                              </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>


        @foreach ($nelayan as $data) 
            
        <div class="modal modal-danger fade" id="delete{{ $data->id_nelayan}}">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span></button>
                            <h4 class="modal-title">{{$data->nama_nelayan}}</h4>
                        </div>
                        <div class="modal-body">
                            <p>Apakan anda yakin ingin menghapus data ini...?</p>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">No</button>
                            <a href="/nelayan/delete/{{ $data->id_nelayan}}" class="btn btn-outline">Yes</a>
                        </div>
                    </div>
                    <!-- /.modal-content -->
                </div>
                <!-- /.modal-dialog -->
            </div>
            @endforeach
            
        </div>

     
</body>
</html>

     
</body>
</html>
@endsection