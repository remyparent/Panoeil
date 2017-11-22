@extends('layouts.admin')
@section('adminContent')
    @foreach($videos as $video)
        {{$video->medias->title}}
    @endforeach
@endsection