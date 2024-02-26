<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoffeeController extends Controller
{
    public function showCoffee(Coffee $coffee)
    {
        if(Auth::user()){
            $basket = Auth::user()->basket;
            if( $basket){
                $data = json_decode($basket, true);
                $coffeeArray = json_decode($data['coffee'], true);
                foreach ($coffeeArray as $item) {
                    if($item['coffee_id'] == $coffee->id){
                        $response = true;
                        break;
                    }else{
                        $response = false;
                    }
                }
            }else{
                $response = false;
            }
        }else{
            $response = false;

        }


        return view('coffee-page', ['coffee' => $coffee,'response' => $response]);
    }

}
