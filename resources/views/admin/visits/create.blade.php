@extends('layouts.admin')
@section('adminContent')
    <h1 class="ml-3">Ajouter une visite</h1>
    @include('admin.visits.form', ['action' => 'store'])
@endsection()