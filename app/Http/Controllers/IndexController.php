<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $coffee = Coffee::all();
        $data = [];
        foreach($coffee as $item){
            $data[$item->category->title] = $item;
        }
        return view('index', ['data' => $data]);

    }

    public function trash(){
        return view('trash');
    }

    public function kabinet(){
        return view('cabinet');
    }

}
