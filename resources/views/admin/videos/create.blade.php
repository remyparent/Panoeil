@extends('layouts.admin')
@section('adminContent')
    <h1 class="ml-3">Ajouter un video</h1>
    @include('admin.videos.form', ['action' => 'store'])
@endsection()