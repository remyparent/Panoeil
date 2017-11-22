<?php use App\Account; ?>
{!! Form::model($video,['files'=> true,'class' => '', 'url' => action("Admin\VideosController@$action", $video), 'method'=> $action == 'store' ? 'Post':'Put']) !!}
{{--TITRE--}}
<div class="form-group row mb-5">
    <label for="title" class="col-sm-2 col-form-label">Titre</label>
    <div class="  col-sm-6">
        <input type="text" autofocus name="title" value="{{$video->media ? $video->media->title : ''}}" class="form-control">
        {!! Form::hidden('slug',null,['class' => 'form-control']) !!}
    </div>
</div>
{{--DESCRIPTION--}}
<div class="form-group row mb-5">
    <label for="description" class="col-sm-2 col-form-label">Description</label>
    <div class="  col-sm-6">
        <textarea name="description" class="form-control" cols="30" rows="10">{{$video->media ? $video->media->description : ''}}</textarea>
    </div>
</div>
{{--COMPTE--}}
<div class="form-group row mb-5">
    <label for="account_id" class="col-sm-2 col-form-label">Compte</label>
    <div class="  col-sm-6">
        <select name="account_id" class="form-control">
        @foreach(Account::all() as $account)
            <option value="{{$account->id}}">{{$account->name}}</option>
        @endforeach
        </select>
    </div>
</div>
{{--VIDEO--}}
<div class="form-group row mb-5">
    <label for="title" class="col-sm-2 col-form-label">Video</label>
    <div class="  col-sm-6">
        <input type="file" name="video" class="form-control-file">
    </div>
</div>
<div class="form-group text-center row  mb-5">
    <div class="col-md-6 offset-2">
        <button type="submit" class="btn btn-block btn-primary">{{$action == 'store' ? 'Ajouter' : 'Modifier'}}</button>
    </div>
</div>
{!! Form::close() !!}