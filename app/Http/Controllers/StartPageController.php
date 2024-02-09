<?php

namespace App\Http\Controllers;

use App\Models\AbstractBlogs;
use App\Models\ImagesBlogs;
use Illuminate\Http\Request;

class StartPageController extends Controller
{

    public function index(Request $request)
    {
        $abstractBlogs = AbstractBlogs::with('imagesBlog')->get();

        return view('startPage', [
            'abstractBlogs' => $abstractBlogs,
        ]);
    }
}
