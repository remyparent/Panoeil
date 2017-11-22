<?php

namespace App;

use App\Behaviour\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Media extends Model {
    public $table = 'medias';
    protected $fillable = ['title', 'description', 'slug', 'account_id'];
    use Sluggable;

    public function account() {
        return $this->belongsTo('App\Account');
    }

    public function visits() {
        return $this->hasMany('App\Visit');
    }

    public function videos() {
        return $this->hasMany('App\Video');
    }
}
