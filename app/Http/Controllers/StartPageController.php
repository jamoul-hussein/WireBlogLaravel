<?php

namespace App\Http\Controllers;

use App\Models\AbstractBlogs;
use Illuminate\Http\Request;

class StartPageController extends Controller
{
    public function index(Request $request)
    {
        $abstractBlogs = AbstractBlogs::all();

        return view('startPage', [
            'abstractBlogs' => $abstractBlogs,
        ]);
    }
}
