<?php

namespace App\Http\Controllers\barista;

use App\Http\Controllers\Controller;
use App\Models\Application;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function changeStatus(Application $application){
        $application->update([
            'status_id' => 2
        ]);
        return redirect()->back();
    }
}
