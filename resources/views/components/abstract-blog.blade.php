<a class="abstract-blog" href="/blog/{{$abstractBlogId}}">
    <img src="https://img.freepik.com/free-photo/painting-mountain-lake-with-mountain-background_188544-9126.jpg">
    <h2>{{$abstractBlogName}}</h2>
    <p>{{$abstractBlogDescription}}</p>
    <div>category: {{$abstractBlogCategory}}</div>
    <hr>
    <div>created at {{$abstractBlogCreatedAt}}</div>
    @foreach($imagesBlogs as $imagesBlog)
        <h1>$imagesBlog</h1>
    @endforeach
</a>
