<?php

namespace App;

use App\Behaviour\Sluggable;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class Video extends Model {

    use Sluggable;

    public $fillable = ['media_id', 'video', 'account_id', 'title','file', 'description', 'slug'];

    public function account() {
        return $this->belongsTo("App\Account");
    }

    public function getUrlAttribute() {
        $path = 'medias/'.$this->account->slug.'/'.$this->file;
        return Storage::url($path);
    }

    public function setVideoAttribute($video) {
        if ($video) {
            static::saved(function ($instance) use ($video) {
                $extension = pathinfo($video, PATHINFO_EXTENSION);
                $account = $instance->account;
                $accountSlug = $account->slug;
                $path = "/medias/" . $accountSlug . "/";
                $fileName = $instance->id . '.' . $extension;
                $videoFile = Storage::disk('uploads')->get($video);
                Storage::move($videoFile, $path . $fileName);
            });
        }
    }
}
