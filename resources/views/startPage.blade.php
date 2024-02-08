@extends('layouts.master')

@section('main')
        <div class="body">


            @foreach($imagesBlogs as $imagesBlog)
                <h1>{{$imagesBlog->image_link}}</h1>
                {{$abstractBlogs}}
            @endforeach


            <div class="abstract-blogs-container">
            @if($abstractBlogs)
                @foreach($abstractBlogs as $abstractBlog)
                    @include('components.abstract-blog' , [
                             'abstractBlogId' => $abstractBlog->id,
                             'abstractBlogName' => $abstractBlog->name,
                             'abstractBlogDescription' => $abstractBlog->description,
                             'abstractBlogCategory'=>  $abstractBlog->category,
                             'abstractBlogCreatedAt' => $abstractBlog->created_at,
                    ])
                @endforeach
                @endif

            </div>
        </div>
    </section>
@endsection
