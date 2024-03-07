<?php

namespace App\Http\Controllers\BlogPage;

use App\Http\Controllers\Controller;
use App\Models\AbstractBlogs;
use App\Models\ConcreteBlogs;
use App\Models\ImagesBlogs;

class ConcreteBlogsController extends Controller
{
    public function index($concreteBlogId)
    {
        $abstractBlogs = AbstractBlogs::all()->where('concrete_blogs_id', '=', $concreteBlogId);

        $blogTitle = '';
        $blogCategory = '';
        $blogImageFk = '';
        foreach ($abstractBlogs->toArray() as $abstractBlog) {
            $blogTitle = $abstractBlog['name'];
            $blogCategory = $abstractBlog['category'];
            $blogImageFk = $abstractBlog['images_blogs_id'];
        }

        $concreteBlog = ConcreteBlogs::all()->where('id', '=', $concreteBlogId);
        $content = '';
        $created_at = '';

        $blogImage = ImagesBlogs::all()->where('id', '=', $blogImageFk);

        foreach ($blogImage->toArray() as $image) {
            $imageLink = $image['image_link'];
        }

        foreach ($concreteBlog->toArray() as $concreteBlogColumn) {
            $content = $concreteBlogColumn['content'];
            $created_at = $concreteBlogColumn['created_at'];
        }

        return view('concrete-blog', [
            'id' => $concreteBlogId,
            'content' => $content,
            'created_at' => $created_at,
            'blogTitle' => $blogTitle,
            'blogCategory' => $blogCategory,
            'blogImageLink' => $imageLink,
        ]);
    }
}
