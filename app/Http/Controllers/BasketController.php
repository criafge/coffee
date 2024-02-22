<?php

namespace App\Http\Controllers;

use App\Models\Basket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public function index(){
        $basket = Auth::user()->basket;
        
        return view('trash');
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



    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
