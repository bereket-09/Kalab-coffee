

@include('frontend.header')

@include('frontend.blogs-detail.detail', ['blog' => $blog, 'latestBlog' => $latestBlogs, 'categories' => $categories])

@include('frontend.footer')

