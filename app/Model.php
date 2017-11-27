<?php

namespace App;

use Illuminate\Database\Eloquent\Model as IlluminateModel;

class Model extends IlluminateModel {
    public function scopeLatest($query) {
        return $query->orderBy('created_at', 'DESC');
    }

    public function getClass() {
        return class_basename($this);
    }
    public static function findBySlug($slug){
        return self::where('slug', $slug)->first();
    }
}