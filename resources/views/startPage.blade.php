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
        <h1>sadasdsa</h1>

        </div>
    </section>
@endsection

{{--@section('main')--}}
{{--    <div class="container-fluid">--}}
{{--        <!-- Search form -->--}}
{{--        <div class="row tm-row">--}}
{{--            <div class="col-12">--}}
{{--                <form method="GET" class="form-inline tm-mb-80 tm-search-form">--}}
{{--                    <input class="form-control tm-search-input" name="query" type="text" placeholder="Search..."--}}
{{--                           aria-label="Search">--}}
{{--                    <button class="tm-search-button" type="submit">--}}
{{--                        <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>--}}
{{--                    </button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="row tm-row">--}}
{{--            <article class="col-12 col-md-6 tm-post">--}}
{{--                <hr class="tm-hr-primary">--}}
{{--                <a href="post.html" class="effect-lily tm-post-link tm-pt-60">--}}
{{--                    <div class="tm-post-link-inner">--}}
{{--                        <img src="https://img.freepik.com/free-photo/painting-mountain-lake-with-mountain-background_188544-9126.jpg" alt="Image" class="img-fluid">--}}
{{--                    </div>--}}
{{--                    <span class="position-absolute tm-new-badge">New</span>--}}
{{--                    <h2 class="tm-pt-30 tm-color-primary tm-post-title">Simple and useful HTML layout</h2>--}}
{{--                </a>--}}
{{--                <p class="tm-pt-30">--}}
{{--                    There is a clickable image with beautiful hover effect and active title link for each post item.--}}
{{--                    Left side is a sticky menu bar. Right side is a blog content that will scroll up and down.--}}
{{--                </p>--}}
{{--                <div class="d-flex justify-content-between tm-pt-45">--}}
{{--                    <span class="tm-color-primary">Travel . Events</span>--}}
{{--                    <span class="tm-color-primary">June 24, 2020</span>--}}
{{--                </div>--}}
{{--                <hr>--}}
{{--                <div class="d-flex justify-content-between">--}}
{{--                    <span>36 comments</span>--}}
{{--                    <span>by Admin Nat</span>--}}
{{--                </div>--}}
{{--            </article>--}}
{{--            <article class="col-12 col-md-6 tm-post">--}}
{{--                <hr class="tm-hr-primary">--}}
{{--                <a href="post.html" class="effect-lily tm-post-link tm-pt-60">--}}
{{--                    <div class="tm-post-link-inner">--}}
{{--                        <img src="https://img.freepik.com/free-photo/painting-mountain-lake-with-mountain-background_188544-9126.jpg" alt="Image" class="img-fluid">--}}
{{--                    </div>--}}
{{--                    <span class="position-absolute tm-new-badge">New</span>--}}
{{--                    <h2 class="tm-pt-30 tm-color-primary tm-post-title">Simple and useful HTML layout</h2>--}}
{{--                </a>--}}
{{--                <p class="tm-pt-30">--}}
{{--                    There is a clickable image with beautiful hover effect and active title link for each post item.--}}
{{--                    Left side is a sticky menu bar. Right side is a blog content that will scroll up and down.--}}
{{--                </p>--}}
{{--                <div class="d-flex justify-content-between tm-pt-45">--}}
{{--                    <span class="tm-color-primary">Travel . Events</span>--}}
{{--                    <span class="tm-color-primary">June 24, 2020</span>--}}
{{--                </div>--}}
{{--                <hr>--}}
{{--                <div class="d-flex justify-content-between">--}}
{{--                    <span>36 comments</span>--}}
{{--                    <span>by Admin Nat</span>--}}
{{--                </div>--}}
{{--            </article>--}}
{{--        </div>--}}
{{--        <div class="row tm-row tm-mt-100 tm-mb-75">--}}
{{--            <div class="tm-prev-next-wrapper">--}}
{{--                <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next disabled tm-mr-20">Prev</a>--}}
{{--                <a href="#" class="mb-2 tm-btn tm-btn-primary tm-prev-next">Next</a>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <div class="tm-paging-wrapper">--}}
{{--            <span class="d-inline-block mr-3">Page</span>--}}
{{--            <nav class="tm-paging-nav d-inline-block">--}}
{{--                <ul>--}}
{{--                    <li class="tm-paging-item active">--}}
{{--                        <a href="#" class="mb-2 tm-btn tm-paging-link">1</a>--}}
{{--                    </li>--}}
{{--                    <li class="tm-paging-item">--}}
{{--                        <a href="#" class="mb-2 tm-btn tm-paging-link">2</a>--}}
{{--                    </li>--}}
{{--                    <li class="tm-paging-item">--}}
{{--                        <a href="#" class="mb-2 tm-btn tm-paging-link">3</a>--}}
{{--                    </li>--}}
{{--                    <li class="tm-paging-item">--}}
{{--                        <a href="#" class="mb-2 tm-btn tm-paging-link">4</a>--}}
{{--                    </li>--}}
{{--                </ul>--}}
{{--            </nav>--}}
{{--        </div>--}}

{{--        <footer class="row tm-row">--}}
{{--            <hr class="col-12">--}}
{{--            <div class="col-md-6 col-12 tm-color-gray tm-copyright">--}}
{{--                Copyright 2020 Xtra Blog Company Co. Ltd.--}}
{{--            </div>--}}
{{--        </footer>--}}
{{--@endsection--}}
