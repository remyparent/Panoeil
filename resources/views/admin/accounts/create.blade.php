@extends('layouts.admin')
@section('adminContent')
    <h1 class="ml-3">Ajouter un compte</h1>
    @include('admin.accounts.form', ['action' => 'store'])
@endsection()