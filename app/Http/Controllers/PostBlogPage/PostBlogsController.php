<?php

namespace App\Http\Controllers\PostBlogPage;

use App\Http\Controllers\Controller;
use App\Models\AbstractBlogs;
use App\Models\ConcreteBlogs;
use App\Models\ImagesBlogs;

class PostBlogsController extends Controller
{
    private ?string $blogTitle = null;
    private ?string $blogImage = null;
    private ?string $blogCategory = null;
    private ?string $blogBody = null;

    public function index()
    {
        return view('post-blog');
    }

    public function update()
    {

        if (isset($_SERVER['REQUEST_METHOD'])) {
            if (isset($_GET['blogTitle'])) {
                $this->setBlogTitle($_GET['blogTitle']);
            }

            if (isset($_GET['blogImage'])) {
                $this->setBlogImage($_GET['blogImage']);
            }

            if (isset($_GET['blogCategory'])) {
                $this->setBlogCategory($_GET['blogCategory']);
            }

            if (isset($_GET['blogBody'])) {
                $blogBody = nl2br($_GET['blogBody']);
                $this->setBlogBody($blogBody);
            }
        }

        $concrete_blog_id = $this->saveContentIntoConcreteBlogs()->id;
        $image_blog_id = $this->saveImageLinkIntoImageBlogs()->id;

        $abstractBlogs = new AbstractBlogs();
        $abstractBlogs->name = $this->getBlogTitle();
        $abstractBlogs->description = $this->getBlogTitle();
        $abstractBlogs->category = $this->getBlogCategory();
        $abstractBlogs->concrete_blogs_id = $concrete_blog_id;
        $abstractBlogs->images_blogs_id = $image_blog_id;
        $abstractBlogs->save();

        return view('post-blog', [
            'blogTitle' => $this->getBlogTitle() ?? null,
            'blogImage' => $this->getBlogImage() ?? null,
            'blogCategory' => $this->getBlogCategory() ?? null,
            'blogBody' => $this->getBlogBody() ?? null
        ]);
    }


    private function saveContentIntoConcreteBlogs(): ConcreteBlogs
    {
        $concreteBlogs = new ConcreteBlogs();
        $concreteBlogs->content = $this->getBlogBody();
        $concreteBlogs->save();

        return $concreteBlogs;
    }

    private function saveImageLinkIntoImageBlogs(): ImagesBlogs
    {
        $imagesBlogs = new ImagesBlogs();
        $imagesBlogs->image_link = $this->getBlogImage();
        $imagesBlogs->save();

        return $imagesBlogs;
    }

    /**
     * @return string
     */
    public function getBlogTitle(): string
    {
        return $this->blogTitle;
    }

    /**
     * @param string $blogTitle
     */
    public function setBlogTitle(string $blogTitle): void
    {
        $this->blogTitle = $blogTitle;
    }

    /**
     * @return string
     */
    public function getBlogImage(): string
    {
        return $this->blogImage;
    }

    /**
     * @param string $blogImage
     */
    public function setBlogImage(string $blogImage): void
    {
        $this->blogImage = $blogImage;
    }

    /**
     * @return string
     */
    public function getBlogCategory(): string
    {
        return $this->blogCategory;
    }

    /**
     * @param string $blogCategory
     */
    public function setBlogCategory(string $blogCategory): void
    {
        $this->blogCategory = $blogCategory;
    }

    /**
     * @return string
     */
    public function getBlogBody(): string
    {
        return $this->blogBody;
    }

    /**
     * @param string $blogBody
     */
    public function setBlogBody(string $blogBody): void
    {
        $this->blogBody = $blogBody;
    }
}
