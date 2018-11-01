<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function create(){
        return view('create');
    }

    public function share(){
        return view('share');
    }

    public function message(){
        return view('message.message');
    }

    public function confirm(){
        return view('message.confirm');
    }

    public function finish(){
        return view('message.finish');
    }
}
