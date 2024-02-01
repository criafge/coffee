<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('index');
    }

    public function trash(){
        return view('trash');
    }

    public function kabinet(){
        return view('kabinet');
    }

    public function admin(){
        return view('admin');
    }
}
