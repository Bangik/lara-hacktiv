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
                    <h5>Show User</h5>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">{{$user->name}}</li>
                    <li class="list-group-item">{{$user->email}}</li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection