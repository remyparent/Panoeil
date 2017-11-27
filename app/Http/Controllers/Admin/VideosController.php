<?php

namespace App\Http\Controllers\Admin;

use App\Account;
use App\Http\Requests\VideosRequest;
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
    public function create($account_slug) {
        $video = new Video();
        return view('admin.videos.create', compact('video','account_slug'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(VideosRequest $request) {
        $account = Account::findOrFail($this->params($request)['account_id']);
        Video::create($this->params($request));
        return redirect(action('Admin\AccountsController@show',$account->slug))->with('success', 'Votre photo a été enregistré');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Video $video
     * @return \Illuminate\Http\Response
     */
    public function show($account_slug, $video_slug) {
        $video = Video::findBySlug($video_slug);
        return view('admin.videos.show',compact('video'));
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

    public function params($request) {
        $params = $request->except('_token');
        return $params;
    }
}
