<?php

namespace App\Http\Controllers;

use App\Models\Application;
use App\Models\Coffee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        switch (Auth::user()->role_id) {
            case 1:
                return redirect('/admin');
            case 2:

                $applications = Auth::user()->applications;

                foreach ($applications as $application) {

                    $application['status'] = $application->status->title;

                    $orderItems = json_decode($application['order'], true);
                    foreach ($orderItems as &$item) {
                        $product = Coffee::find($item['coffee_id']);

                        if ($product) {
                            $item['title'] = $product->title;
                            $item['cost'] = $product->cost;
                        }
                    }

                    $application['order'] = json_encode($orderItems);
                }

                return view('home', ['applications' => $applications]);
            case 3:
                return redirect('/cabinet');
        }
    }
}
