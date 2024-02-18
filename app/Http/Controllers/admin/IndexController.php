<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Coffee;
use Illuminate\Http\Request;

class IndexController extends Controller
{

    public function __invoke(Request $request, Category $category, Coffee $coffee)
    {
        if($request->category != null) {
            $coffees = $coffee->where('category_id' , $request->category)->paginate(4);
        }else{
            $coffees = $coffee->paginate(4);
        }
        return view("admin", ['categories' => $category->all(), 'coffees' => $coffees]);
    }
}
