<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model {
    public $fillable = ['media_id'];

    public function medias() {
        return $this->belongsTo('App\Media', 'media_id');
    }
    public function setVideoAttribute($video){
        dd($video);
    }
}
