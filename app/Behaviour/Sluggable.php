<?php

namespace App\Behaviour;

use Illuminate\Support\Str;

trait Sluggable {
    public function setSlugAttribute($slug) {
        if (empty($slug)) {
            $this->attributes['slug'] = Str::slug($this->name);
        } else {
            $this->attributes['slug'] = $slug;
        }
    }
}