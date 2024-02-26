<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use App\Models\Coffee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public function index()
    {
        $basket = Auth::user()->basket;
        $data = [];
        if ($basket && $basket['coffee'] !== null) {
            $exist = true;
            $basketData = json_decode(Auth::user()->basket, true);
            $coffeeArray = json_decode($basketData['coffee'], true);
            foreach ($coffeeArray as $item) {
                $items = [
                    'count' => $item['count'],
                    'coffee' => Coffee::find($item['coffee_id']),
                ];
                array_push($data, $items);
            }
        }else{
            $exist = false;
        }
        return view('trash', ['coffees' => $data, 'exist' => $exist]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $coffeeJson = $request->all();
        $user = Auth::user();
        $basket = $user->basket;

        if (!$basket) {
            Basket::create([
                'user_id' => $user->id,
                'coffee' => json_encode([$coffeeJson])
            ]);
        } else {
            $existingCoffees = json_decode($basket->coffee, true);
            array_push($existingCoffees, $coffeeJson);
            $updatedData['coffee'] = json_encode($existingCoffees);
            $basket->update($updatedData);
        }
        return response()->json(['status' => 'success', 'message' => 'Товар добавлен в корзину']);
    }



    public function updateBasket(Request $request)
    {
        $coffeeId = $request->get('coffee_id');
        $newcount = $request->get('count');
        $basket = Auth::user()->basket;
        $existingCoffees = json_decode($basket->coffee, true);

        foreach ($existingCoffees as &$item) {
            if ($item['coffee_id'] === $coffeeId) {
                $item['count'] = $newcount;
                break;
            }
        }

        $updatedData['coffee'] = json_encode($existingCoffees);
        $basket->update($updatedData);

        return response()->json(['message' => 'все хорошо']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        $basket = Auth::user()->basket;
        $basket->delete();
        return redirect()->back()->with('success', 'Пусто(');
    }
}
