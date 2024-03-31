

@include('frontend.header')

@include('frontend.blogs.blogs', ['blogs' => $blogs, 'latestBlogs' => $latestBlogs, 'categories' => $categories])

@include('frontend.footer')

