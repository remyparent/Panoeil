@extends('layouts.admin')
@section('adminContent')
    <h1 class="mb-3">{{$video->title}}</h1>
    <div class="row">
        <div class="col-md-6">
            <p>{{$video->description}}</p>
        </div>
        <div class="col-md-6">
            <video class="d-block w-100" controls>
                <source src="{{$video->url}}" type="video/mp4">
            </video>
        </div>
    </div>
@endsection