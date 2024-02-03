<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCoffeeRequest;
use App\Http\Requests\UpdateCoffeeRequest;
use App\Models\Coffee;
use Illuminate\Http\Request;

class CoffeeController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCoffeeRequest $request, Coffee $coffee)
    {
        $coffee->create($request->all());
        return redirect()->back()->with("success");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCoffeeRequest $request, Coffee $coffee)
    {
        return redirect()->back()->with("success". "Обновлено успешно");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return redirect()->back()->with("success", "Удалено успешно");
    }
}
