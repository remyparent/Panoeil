@extends('layouts.admin')
@section('adminContent')
    <h1>Tous les comptes</h1>
    @foreach($accounts as $account)
        <div class="mb-3 p-3 bg-light container">
            <div class="row bg-light d-flex align-items-center">
                <div class="col-6">
                    <h4>
                        <a href="{{route('admin.accounts.show',$account->slug)}}">{{$account->name}}</a>
                    </h4>
                </div>
                <div class=" text-right col-6">
                    <div class="row">
                        <div class="col-sm-6 offset-6 col-md-4 offset-md-8 text-left">
                            <a href="{{action('Admin\AccountsController@edit', $account)}}" class="btn btn-outline-info btn-sm">Modifier</a>
                            <a href="{{action('Admin\AccountsController@edit', $account)}}" class="btn btn-outline-danger btn-sm">X</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-1">
                <div class="col-6 text-left">
                    @if($account->hasUsers())

                        <div class="dropdown show">
                            <a class="btn btn-link p-0 dropdown-toggle" href="#" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <small>Voir les usagers</small>
                            </a>
                            <div class="dropdown-menu">
                                @foreach($account->users as $user)
                                    <p class="dropdown-item">
                                        <a href="{{action('Admin\UsersController@show',$user)}}">{{$user->name}}</a>
                                    </p>
                                @endforeach
                            </div>
                        </div>
                    @endif
                </div>
                <div class="text-right col-6">
                    <div class="row">
                        <small class="col-sm-4 col-md-4 offset-md-8 text-left">
                            <a href="{{action('Admin\UsersController@create', ['account_id'=>$account->id])}}" class="">+ Ajouter un usager</a>
                        </small>
                        <small class="col-sm-4 col-md-4 offset-md-8 text-left">
                            <a href="{{action('Admin\VideosController@create', ['account_slug'=>$account->slug])}}" class="">+ Ajouter un video</a>
                        </small>
                        <small class="col-sm-4 col-md-4 offset-md-8 text-left">
                            <a href="{{action('Admin\VisitsController@create', ['account_slug'=>$account->slug])}}" class="">+ Ajouter une visite</a>
                        </small>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection()