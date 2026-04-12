<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller {
    public function index() {
        return view('profile');
    }

    public function about() {
        return view('about');
    }

    public function experience(){
        return view('experience');
    }

    public function project(){
        return view('project');
    }

    public function contact(){
        return view('contact');
    }
}