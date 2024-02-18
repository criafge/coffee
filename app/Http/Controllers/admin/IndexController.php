<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke(Request $request, Category $category)
    {
        return view("admin", ['categories' => $category->all()]);
    }
}
