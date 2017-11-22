<?php

namespace App\Http\Controllers\Admin;

use App\Media;
use App\Video;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VideosController extends Controller {
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $videos = Video::paginate(10);
        return view('admin.videos.index', compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        $video = new Video();
        return view('admin.videos.create', compact('video'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $media = Media::create($this->paramsMedia($request));
        $video = Video::create(['media_id' => $media->id]);
        return redirect(action('Admin\VideosController@index'))->with('success', 'Votre photo a été enregistré');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Video $video
     * @return \Illuminate\Http\Response
     */
    public function show(Video $video) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Video $video
     * @return \Illuminate\Http\Response
     */
    public function edit(Video $video) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Video               $video
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Video $video) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Video $video
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video $video) {
        //
    }

    public function paramsMedia($request) {
        $params = $request->except('_token');
        return $params;
    }
}
