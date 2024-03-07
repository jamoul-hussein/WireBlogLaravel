<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wire Blog</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/startPage.css') }}">
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
<section class="layout">
    <aside>
        <div class="sidebar">
            <nav class="sidebar-nav" id="sidebar-nav">
                <h1 class="sidebar-header">Wire Blog</h1>
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
    </aside>


    <section>
        <div class="body">
            {{--            <div class="account-bar">--}}
            {{--                <div class="account-icon">--}}
            {{--                    <img src="https://cdn-icons-png.flaticon.com/256/5231/5231498.png">--}}
            {{--                </div>--}}
            {{--            </div>--}}
            <nav class="bg-gray-800">
                <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
                    <div class="relative flex h-16 items-center justify-between">
                        <div class="flex sm:justify-start">
                        </div>
                        <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                            <button type="button" class="relative rounded-full bg-gray-800 p-1 text-gray-400 hover:#FDE2FF focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">View notifications</span>
                                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                                </svg>
                            </button>

                            <!-- Profile dropdown -->
                            <div class="relative ml-3">
                                <div>
                                    <button type="button" class="relative flex rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                                        <span class="absolute -inset-1.5"></span>
                                        <span class="sr-only">Open user menu</span>
                                        <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1519244703995-f4e0f30006d5?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="stroke-gray-400">

                </div>
            </nav>
            @yield('main')
        </div>
    </section>
</body>
</html>
