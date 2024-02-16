@extends('layouts.master')
<link rel="stylesheet" type="text/css" href="{{ asset('css/post.blog.page.css') }}">

@section('main')
    <div class="post-blog-body">

        <form class="post-blog-form" action="{{ url("posts/") }}">
            <h2>Post a Blog</h2>
            <label for="blog-title">Blog Title</label>
            <div class="blog-title-container">
                <input type="text" id="blog-title" name="blogTitle" placeholder="Your blog title..">
            </div>

            <label for="blog-image">Blog Image Link</label>
            <div class="blog-image-container">
                <input type="text" id="blog-image" name="blogImage" placeholder="Your blog image Link..">
            </div>

            <label for="blog-category">Blog Category</label>
            <div class="blog-category-container">
                <input type="text" id="blog-category" name="blogCategory" placeholder="Your blog category..">
            </div>

            <label for="blog-body">Blog body</label>
            <div class="blog-body-container">
                <textarea type="text" id="blog-body" name="blogBody" placeholder="Your blog body.."></textarea>
            </div>
            <input type="submit" class="submitPost" name="submitPost" value="Submit">
        </form>
    </div>
@endsection
