<?php

namespace App\Http\Controllers\barista;

use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Coffee;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $applications = Application::all();

        foreach ($applications as $application) {

            $application['status'] = $application->status->title;

            $orderItems = json_decode($application['order'], true);
            foreach ($orderItems as &$item) {
                $product = Coffee::find($item['coffee_id']);

                if ($product) {
                    $item['title'] = $product->title;
                    $item['cost'] = $product->cost;
                    $item['recept'] = $product->recept;
                    $item['id'] = $product->id;
                }
            }

            $application['order'] = json_encode($orderItems);
        }

        return view('cabinet', ['applications' => $applications]);
    }
}
