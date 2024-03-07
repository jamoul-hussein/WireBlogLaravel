<?php

namespace App\Http\Controllers\RegistrationPage;

use Illuminate\Http\Request;

class RegistrationController
{
    public function index(Request $request)
    {
        return view('registration');
    }
}
