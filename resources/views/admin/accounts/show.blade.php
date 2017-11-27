@extends('layouts.admin')
@section('adminContent')
    <h1>{{$account->name}}</h1>
    <div class="row">
        @foreach($medias as $media)
            <div class="col-md-4">
                <div class="card mb-3">
                    <a class="lead" href="{{ $media->getClass() == 'Video' ? route('admin.videos.show',[$account->slug,$media->slug])  : action('admin.visits.show',[$account->slug,$media->slug]) }}">
                        <div class="card-header">
                            <h3>{{$media->title}}</h3>
                        </div>
                        <div class="card-body">
                            <p>{{$media->description}}</p>
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>
@endsection