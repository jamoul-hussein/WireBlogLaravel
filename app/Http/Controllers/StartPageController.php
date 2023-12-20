<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StartPageController extends Controller
{
    public function index(Request $request)
    {
        $name = $request->name;
        return view('startPage', [
            'students' => ['anisha', 'haseena', 'akshita', 'jyotika'],
            'mytest' => 'heheheheh '. $name,
        ]);
    }
}
