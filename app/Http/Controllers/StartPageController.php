<?php

namespace App\Http\Controllers;

use App\Models\AbstractBlogs;
use App\Models\ImagesBlogs;
use Illuminate\Http\Request;

class StartPageController extends Controller
{
    public function index(Request $request)
    {
        $abstractBlogs = AbstractBlogs::all();
        $imagesBlogs = ImagesBlogs::all();

        return view('startPage', [
            'abstractBlogs' => $abstractBlogs,
            'imagesBlogs' => $imagesBlogs,
        ]);
    }
}
