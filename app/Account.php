<?php

namespace App;

use App\Behaviour\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Account extends Model {
    public $fillable = ['name', 'slug'];
    use Sluggable;

    function users() {
        return $this->hasMany('App\User');
    }

    function medias() {
        return $this->hasMany('App\Media');
    }

    function hasUsers() {
        return $this->users()->count() > 0 ? TRUE : FALSE;
    }

}
