<?php use App\Account;?>

{!! Form::model($user,['class' => '', 'url' => action("Admin\UsersController@$action", $user), 'method'=> $action == 'store' ? 'User':'Put']) !!}
{{--NAME--}}
<div class="form-group row mb-5">
    <label for="name" class="col-sm-2 col-form-label">Nom</label>
    <div class="  col-sm-6">
        {!! Form::text('name',null,['class' => 'form-control', 'autofocus']) !!}
    </div>
</div>
{{--EMAIL--}}
<div class="form-group row mb-5">
    <label for="content" class="col-sm-2 col-form-label">Email</label>
    <div class="  col-sm-6">
        {!! Form::email('email',null,['class' => 'form-control']) !!}
    </div>
</div>
{{--PASSWORD--}}
<div class="form-group row mb-5">
    <label for="content" class="col-sm-2 col-form-label">Mot de passe</label>
    <div class="  col-sm-6">
        {!! Form::password('password',null,['class' => 'form-control']) !!}
    </div>
</div>
{{--ACCOUNT--}}
<div class="form-group row mb-5">
    <label for="animaux" class="col-sm-2 col-form-label">Account</label>
    <div class="col-sm-6">
        {{--Le style du select est possible grace au plugin select2--}}
        {!! Form::select('account_id', Account::all()->pluck('name','id')->sortBy('name') ,null,['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group text-center row  mb-5">
    <div class="col-md-8">
        <button type="submit" class="btn btn-block btn-primary">{{$action == 'store' ? 'Ajouter' : 'Modifier'}}</button>
    </div>
</div>
{!! Form::close() !!}