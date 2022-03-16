@extends('layouts.app')
@section('content')
<div class="container">
    <div class="mt-3 mb-3">
        <h2>Laravel 8 - Manajemen User</h2>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route('user.create')}}" class="btn btn-primary float-right">Tambah User</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table" id="example">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Email</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$user->name}}</td>
                                        <td>{{$user->email}}</td>
                                        <td>
                                            
                                            <a href="{{route('user.show', ['user' => $user->id])}}" class="btn btn-info"><i class="fas fa-info"></i> </a>
                                            <a href="{{route('user.edit', ['user' => $user->id])}}" class="btn btn-warning"><i class="fas fa-edit"></i></a>                                                
                                            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-hapus-{{$loop->iteration}}"><i class="fas fa-trash"></i></button>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@foreach ($users as $user)
<div class="modal fade" id="modal-hapus-{{$loop->iteration}}" tabindex="-1" role="dialog" aria-labelledby="modal-hapus" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <form action="{{route('user.destroy', ['user' => $user->id])}}" method="post" class="form-inline mr-2">
        @csrf
        @method('DELETE')
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="modal-hapus">Hapus Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            Apakah anda yakin untuk menghapus data {{$user->name}}
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            <button type="submit" class="btn btn-danger">Hapus</button>
        </div>
        </div>
        </form>
    </div>
</div>
@endforeach

@endsection