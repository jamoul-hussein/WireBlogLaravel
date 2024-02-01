@extends('layouts.master')
<link rel="stylesheet" type="text/css" href="{{ asset('css/post.blog.page.css') }}">

@section('main')
    <div class="post-blog">
        {{$blogTitle}}
        {{$blogImage}}
        {{$blogCategory}}
        {{$blogBody}}
        <h2>Post a Blog</h2>
        <form action="{{ url("posts/") }}">
            <div class="blog-title-container">
                <label for="blog-title">Blog Title</label>
                <input type="text" id="blog-title" name="blogTitle" placeholder="Your blog title..">
            </div>

            <div class="blog-image-container">
                <label for="blog-image">Blog Image</label>
                <input type="text" id="blog-image" name="blogImage" placeholder="Your blog image..">
            </div>

            <div class="blog-category-container">
                <label for="blog-category">Blog Category</label>
                <input type="text" id="blog-category" name="blogCategory" placeholder="Your blog category..">
            </div>

            <div class="blog-body-container">
                <label for="blog-boy">Blog body</label>
                <input type="text" id="blog-body" name="blogBody" placeholder="Your blog body..">
            </div>
            <input type="submit" name="submitPost" value="Submit">
        </form>
    </div>
@endsection
