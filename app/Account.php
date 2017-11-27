<?php

namespace App;

use App\Behaviour\Sluggable;

class Account extends Model {
    public $fillable = ['name', 'slug'];
    use Sluggable;

    public function users() {
        return $this->hasMany('App\User');
    }
    public function videos() {
        return $this->hasMany('App\Video');
    }
    public function visits() {
        return $this->hasMany('App\Visit');
    }
    public function hasUsers() {
        return $this->users()->count() > 0 ? TRUE : FALSE;
    }

}
