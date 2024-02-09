<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wire Blog</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/startPage.css') }}" >
</head>
<body>
<section class="layout">
    <div class="sidebar">

        <h1 class="text-center">Wire Blog</h1>

        <nav class="sidebar-nav" id="sidebar-nav">
            <ul>
                <li class="sidebar-nav-item active"><a href="/startPage" class="sidebar-nav-link">
                        <i></i>
                        Blog Home
                    </a></li>
                <li class="sidebar-nav-item"><a href="/post/blog" class="sidebar-nav-link">
                        <i></i>
                        Post a Blog
                    </a></li>
                <li class="sidebar-nav-item"><a href="/" class="sidebar-nav-link">
                        <i></i>
                        About Wire
                    </a></li>
                <li class="sidebar-nav-item"><a href="/" class="sidebar-nav-link">
                        <i class="far fa-comments"></i>
                        Contact Us
                    </a></li>
            </ul>
        </nav>
    </div>

       @yield('main')
</body>
</html>
