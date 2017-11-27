<?php

namespace App;


class Visit extends Model {
    public function account(){
        $this->belongsTo("App\Account");
    }
}
