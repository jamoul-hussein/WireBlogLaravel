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
                <div class="abstract-blog">
                    <img src="https://img.freepik.com/free-photo/painting-mountain-lake-with-mountain-background_188544-9126.jpg">
                    <h2>sadsad</h2>
                    <p>sadsadsadsadasdsadsadsadsadsadsadasdasdaklmlaskdmkaslm</p>
                    <div>category: programming</div>
                    <hr>
                    <div>created at 02.02.2022</div>
                </div>
                <div class="abstract-blog">
                    <img src="https://img.freepik.com/free-photo/painting-mountain-lake-with-mountain-background_188544-9126.jpg">
                    <h2>sadsad</h2>
                    <p>sadsadsadsadasdsadsadsadsadsadsadasdasdaklmlaskdmkaslm</p>
                </div>
            </div>
        </div>
    </section>
@endsection
