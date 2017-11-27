{!! Form::model($account,['files'=> true,'class' => '', 'url' => action("Admin\AccountsController@$action", $account), 'method'=> $action == 'store' ? 'Post':'Put']) !!}
{{--NAME--}}
<div class="form-group row mb-5">
    <label for="name" class="col-sm-2 col-form-label">Nom</label>
    <div class="  col-sm-6">
        {!! Form::text('name',null,['class' => 'form-control', 'autofocus']) !!}
        {!! Form::hidden('slug',null,['class' => 'form-control']) !!}
    </div>
</div>
<div class="form-group text-center row  mb-5">
    <div class="col-md-6 offset-2">
        <button type="submit" class="btn btn-block btn-primary">{{$action == 'store' ? 'Ajouter' : 'Modifier'}}</button>
    </div>
</div>
{!! Form::close() !!}