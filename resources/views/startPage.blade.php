@extends('layouts.master')

@section('main')
    <section class="layout">
        <div class="sidebar">

            <h1 class="text-center">Wire Blog</h1>

            <nav class="sidebar-nav" id="sidebar-nav">
                <ul>
                    <li class="sidebar-nav-item active"><a href="index.html" class="sidebar-nav-link">
                            <i class="fas fa-home"></i>
                            Blog Home
                        </a></li>
                    <li class="sidebar-nav-item"><a href="post.html" class="sidebar-nav-link">
                            <i class="fas fa-pen"></i>
                            Single Post
                        </a></li>
                    <li class="sidebar-nav-item"><a href="about.html" class="sidebar-nav-link">
                            <i class="fas fa-users"></i>
                            About Xtra
                        </a></li>
                    <li class="sidebar-nav-item"><a href="contact.html" class="sidebar-nav-link">
                            <i class="far fa-comments"></i>
                            Contact Us
                        </a></li>
                </ul>
            </nav>

        </div>

        <div class="body">
            <div class="abstract-blogs-container">

                @foreach($abstractBlogs as $abstractBlog)
                    @include('components.abstract-blog' , [
                            'abstractBlogId' => $abstractBlog->id,
                             'abstractBlogName' => $abstractBlog->name,
                             'abstractBlogDescription' => $abstractBlog->description,
                             'abstractBlogCategory'=>  $abstractBlog->category,
                             'abstractBlogCreatedAt' => $abstractBlog->created_at,
                    ])
                @endforeach

            </div>
        </div>
    </section>
@endsection
