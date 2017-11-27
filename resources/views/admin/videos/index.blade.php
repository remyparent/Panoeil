@extends('layouts.admin')
@section('adminContent')
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">Titre</th>
            <th scope="col">Compte</th>
        </tr>
        </thead>
        <tbody>
        @foreach($videos as $video)
            <tr>
                <td>{{$video->title}}</td>
                <td>{{$video->account->name}}</td>
            </tr>
    @endforeach
            </tbody>
    </table>
@endsection