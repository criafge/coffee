<?php

namespace App\Http\Controllers;

use App\Models\Coffee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CoffeeController extends Controller
{
    public function showCoffee(Coffee $coffee)
    {
        if(Auth::user()->basket){
            $data = json_decode(Auth::user()->basket, true);
            $coffeeArray = json_decode($data['coffee'], true);
            foreach ($coffeeArray as $item) {
                if($item['coffee_id'] == $coffee->id){
                    $response = true;
                    break;
                }else{
                    $response = false;
                }
            }
        }

        return view('coffee-page', ['coffee' => $coffee,'response' => $response]);
    }

    public function asd(Coffee $coffee)
    {
        // Ваша JSON-строка

        // Декодируем JSON и получаем массив

        // Декодируем значение ключа "coffee" внутри массива

        // Теперь у вас есть массив $coffeeArray, который вы можете перебрать

        return view('asd', []);
        // dd($coffee->id);
    }
}
