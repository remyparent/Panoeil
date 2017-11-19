<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller {
    public function admin(){
        return view('pages.admin');
    }
    public function index(){
        return view('home');
    }
}
