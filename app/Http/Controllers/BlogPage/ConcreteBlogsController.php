<?php

namespace App\Http\Controllers\BlogPage;

use App\Http\Controllers\Controller;
use App\Models\AbstractBlogs;
use App\Models\ConcreteBlogs;
use Illuminate\Http\Request;

class ConcreteBlogsController extends Controller
{
    public function index($concreteBlogId)
    {

        $abstractBlogs = AbstractBlogs::all()->where('concrete_blogs_id', '=', $concreteBlogId);

        $blogTitle = '';
        $blogCategory = '';
        foreach ($abstractBlogs->toArray() as $abstractBlog) {
            $blogTitle = $abstractBlog['name'];
            $blogCategory = $abstractBlog['category'];
        }

        $concreteBlog = ConcreteBlogs::all()->where('id','=', $concreteBlogId);
        $content = '';
        $created_at = '';

        foreach ($concreteBlog->toArray() as $concreteBlogColumn){
            $content = $concreteBlogColumn['content'];
            $created_at = $concreteBlogColumn['created_at'];
        }
        return view('concrete-blog', [
            'id' => $concreteBlogId,
            'content' => $content,
            'created_at' => $created_at,
            'blogTitle' => $blogTitle,
            'blogCategory' => $blogCategory,
        ]);
    }
}
