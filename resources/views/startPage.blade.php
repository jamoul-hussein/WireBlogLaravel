@extends('layouts.master')

@section('main')
        <div class="body">

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
