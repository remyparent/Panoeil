@extends('layouts.admin')
@section('adminContent')
@include('admin.users.form', ['action' => 'store'])
@endsection