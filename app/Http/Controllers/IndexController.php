<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Coffee;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        $categories = Category::all();
        $data = [];
        foreach($categories as $item){
            $data[$item->title] = $item->coffees;
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
