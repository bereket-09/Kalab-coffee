

<!-- Page Header Start -->
  <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
      <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
          <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">{{$blog->title}}</h1>
          <div class="d-inline-flex mb-lg-5">
              <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
              <p class="m-0 text-white px-2">/</p>
              <p class="m-0 text-white">Blogs</p>
              <p class="m-0 text-white px-2">/</p>
              <p class="m-0 text-white">{{$blog->title}}</p>
          </div>
      </div>
  </div>
  <!-- Page Header End -->
       
       
                <!-- Page Content -->
                <!-- Banner Starts Here -->
                <div class="heading-page header-text">
                  <section class="page-heading">
                    <div class="container">
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="text-content">
                            <h5>Last Update : {{$blog->updated_at}}</h5>
                            <h2>{{$blog->title}}</h2>
                          </div>
                        </div>
                      </div>
                    </div>
                  </section>
                </div>
                
                <!-- Banner Ends Here -->
            

            
            
                <section class="blog-posts grid-system">
                  <div class="container">
                    <div class="row">
                      <div class="col-lg-8">
                        <div class="all-blog-posts">
                          <div class="row">
                            <div class="col-lg-12">
                              <div class="blog-post">
                                <div class="blog-thumb">
                                  <img src="{{ Storage::url($blog->banner) }}" alt="" style="width:100%;">

                                </div>
                                <div class="down-content">
                                  <span>{{$blog->category_name}}</span>
                                  <a href="post-details.html"><h4>{{$blog->title}}</h4></a>
                                  <ul class="post-info">
                                    <li><a href="#">{{$blog->author_name}}</a></li>
                                    <li><a href="#">{{$blog->published_at}}</a></li>
                                    {{-- <li><a href="#">10 Comments</a></li> --}}
                                  </ul>
                                  <p>{!! $blog->content !!}</p>
                                  <div class="post-options">
                                    <div class="row">
                                      <div class="col-6">
                                        <ul class="post-tags">
                                          <li><i class="fa fa-tags"></i></li>
                                          <li><a href="#">{{$blog->slug}}</a></li>
                                          {{-- <li><a href="#">TemplateMo</a></li> --}}
                                        </ul>
                                      </div>
                                      <div class="col-6">
                                        <ul class="post-share">
                                          <li><i class="fa fa-share-alt"></i></li>
                                          <li><a href="#">Facebook</a>,</li>
                                          <li><a href="#"> Twitter</a></li>
                                        </ul>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                     
                
                          </div>
                        </div>
                      </div>
                      <div class="col-lg-4">
                        <div class="sidebar">
                          <div class="row">
                            
                            <div class="col-lg-12">
                              <div class="sidebar-item recent-posts">
                                <div class="sidebar-heading">
                                  <h2>Recent Posts</h2>
                                </div>
                                <div class="content">
                                  <ul>
                                    <li><a href="post-details.html">
                                      @foreach ($latestBlogs as $latest)
                                      <h5>{{$latest->title}}</h5>
                                      <span>{{$latest->published_at}}</span>
                                    </a></li>
                                      @endforeach
                                     
                            
                                  </ul>
                                </div>
                              </div>
                            </div>
                            <div class="col-lg-12">
                              <div class="sidebar-item categories">
                                <div class="sidebar-heading">
                                  <h2>Categories</h2>
                                </div>
                                <div class="content">
                                  <ul>

                                    @foreach ($categories as $categorie)
                                    <li><a href="#">- {{$categorie->name}}</a></li>
                                    @endforeach
                                  </ul>
                                </div>
                              </div>
                            </div>
                     
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </section>
            
                
         