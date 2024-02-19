<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateDataRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function updateData(UpdateDataRequest $request){
        Auth::user()->update($request->validated());
        return redirect()->back()->with('success', 'Данные успешно изменены');
    }
}
