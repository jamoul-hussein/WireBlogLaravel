<?php

namespace App\Http\Controllers\BlogPage;

use App\Http\Controllers\Controller;
use App\Models\AbstractBlogs;
use App\Models\ConcreteBlogs;
use Illuminate\Http\Request;

class ConcreteBlogsController extends Controller
{
    public function index($id)
    {
        $concreteBlog = ConcreteBlogs::all()->where('id','=', $id);
        $content = '';
        $created_at = '';

        foreach ($concreteBlog->toArray() as $concreteBlogColumn){
            $id = $concreteBlogColumn['id'];
            $content = $concreteBlogColumn['content'];
            $created_at = $concreteBlogColumn['created_at'];
        }
        return view('concrete-blog', [
            'id' => $id,
            'content' => $content,
            'created_at' => $created_at,
        ]);
    }
}
