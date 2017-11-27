@extends('layouts.admin')
@section('adminContent')
    <div class="card">
        <div class="card-header">
            <h1>{{$user->name}}</h1>
        </div>
        <div class="card-body">
            <h2>{{$user->email}}</h2>
            <h3>{{$user->role}}</h3>
        </div>
    </div>
@endsection