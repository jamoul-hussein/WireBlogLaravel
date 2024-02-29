@extends('layouts.master')

@section('main')
    <section>
        <div class="body">
            <div class="account-bar">
                <div class="account-icon">
                    <img src="https://cdn-icons-png.flaticon.com/256/5231/5231498.png">
                </div>
            </div>
            <div class="abstract-blogs-container">
                @if($abstractBlogs)
                    @foreach($abstractBlogs as $abstractBlog)
                        @include('components.abstract-blog' , [
                                 'abstractBlogId' => $abstractBlog->id,
                                 'abstractBlogName' => $abstractBlog->name,
                                 'abstractBlogDescription' => $abstractBlog->description,
                                 'abstractBlogCategory'=>  $abstractBlog->category,
                                 'abstractBlogCreatedAt' => $abstractBlog->created_at,
                                 'imageLink' => $abstractBlog->imagesBlog->image_link,
                        ])
                    @endforeach
                @endif

            </div>
        </div>
    </section>
@endsection
