@extends('admin.base')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12 mt-3">
                <div class="card">
                    <div class="card-header">
                        Data user
                        <a href="{{url('admin/user/create')}}" class="btn btn-dark float-end"><i class="fa fa-plus"></i> Tambah Data</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Username</th>
                                <th>Nama</th>
                                <th>Email</th>
                            </thead>
                            <tbody>
                                @foreach($list_user as $user)
                                <tr>
                                <input type="hidden" class="delete_id" value="{{ $user->id }}">
                                    <td>{{$loop->iteration}}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{url('admin/user',$user->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>
                                            <a href="{{url('admin/user',$user->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
                                            @include('admin.template.utils.delete', ['url'=>url('user', $user->id)])
                                        </div>
                                    </td>
                                    <td>{{$user->username}}</td>
                                    <td>{{$user->nama}}</td>
                                    <td>{{$user->email}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection