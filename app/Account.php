<?php

namespace App;
use App\Behaviour\Sluggable;
use Illuminate\Database\Eloquent\Model;

class Account extends Model {
    public $fillable = ['name','slug'];
    use Sluggable;
}
