<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCoffeeRequest;
use App\Http\Requests\UpdateCoffeeRequest;
use App\Models\Coffee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class CoffeeController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCoffeeRequest $request, Coffee $coffee)
    {
        $data = $request->all();
        $filename = $request->file('photo_create')->getClientOriginalName();
        $path = $request->file('photo_create')->storeAs('public', $filename);

        $coffee->create([
            'title' => $data['title_create'],
            'description' => $data['title_create'],
            'recept' => $data['recept_create'],
            'cost' => $data['cost_create'],
            'photo' => $filename,
            'category_id' => $data['category_id_create'],

        ]);
        return redirect()->back()->with("success", "Сохранено успешно");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCoffeeRequest $request, Coffee $coffee)
    {
        $data = $request->all();
        if ($request->file('photo') != null) {
            $filename = $request->file('photo')->getClientOriginalName();
            $path = $request->file('photo')->storeAs('public', $filename);
            $data = array_merge($data, [
                'photo' => $filename,
            ]);
        }else{
            $data = array_merge($data, [
                'photo' => $coffee->photo,
            ]);
        }
        $coffee->update($data);
        return redirect()->back()->with("success", "Обновлено успешно");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Coffee $coffee)
    {
        $coffee->delete();
        return redirect()->back()->with("success", "Удалено успешно");
    }
}
