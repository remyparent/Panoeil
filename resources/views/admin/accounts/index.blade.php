@extends('layouts.admin')
@section('adminContent')
    <div class="m-3">
        <h1>Tous les comptes</h1>
        @foreach($accounts as $account)
            <div class="row bg-light d-flex align-items-center py-2 mb-3">
                <div class="col-6">
                    <h4>
                        <a href="{{route('admin.accounts.show',$account->slug)}}">{{$account->name}}</a>
                    </h4>

                </div>

                <div class=" text-right col-6">
                    <a href="{{action('Admin\AccountsController@edit', $account)}}" class="btn btn-outline-info btn-sm">Modifier</a>
                    <a href="{{action('Admin\AccountsController@edit', $account)}}" class="btn btn-outline-danger btn-sm">X</a>
                </div>
                <small class="float-left col-12">
                    <a href="{{action('Admin\UsersController@create', ['account_id'=>$account->id])}}" class="">+ Ajouter un usager</a>
                </small>
            </div>

        @endforeach
    </div>
@endsection()