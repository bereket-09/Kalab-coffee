<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="TemplateMo">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">

  <title>Kalab's Coffee</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


  <!-- Additional CSS Files -->
  <link rel="stylesheet" href=assets/css/fontawesome.css">
  <link rel="stylesheet" href="assets/css/templatemo-stand-blog.css">
  <link rel="stylesheet" href="assets/css/owl.css">

<!-- Page Header Start -->
<div class="container-fluid page-header mb-5 position-relative overlay-bottom">
  <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
      <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Blogs</h1>
      <div class="d-inline-flex mb-lg-5">
          <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
          <p class="m-0 text-white px-2">/</p>
          <p class="m-0 text-white">Blogs</p>
      </div>
  </div>
</div>
  <!-- Page Header End -->




<div class="container-fluid pt-5">
  <div class="container">
      <div class="section-title">
          <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">News & Blogs</h4>
          <h1 class="display-4"></h1>
      </div>

<div class="blog-home5 py-2">
  <div class="container">
    <!-- Row  -->
    <div class="row justify-content-center">
      <!-- Column -->
      <div class="col-md-8 text-center">
        {{-- <h3 class="mb-3">Latest from Our Blog</h3> --}}
        {{-- <h4 class="subtitle font-weight-normal">You can relay on our amazing features list and also our customer services will be great experience for you without doubt</h4> --}}
      </div>
      <!-- Column -->
    </div>
    <!-- Row  -->
    <div class="row mt-4">

       <!-- Column -->
       @foreach($blogs as $blog)
         
       <div class="col-md-4">
        
       <a href="{{ route('blog-show', ['id' => $blog->id]) }}">
         <div class="card b-h-box position-relative font-14 border-0 mb-4">
           <img class="card-img" src="{{ Storage::url($blog->banner) }}" alt="Card image" style="min-height: 268px;border-radius: 5%;">
           <div class="card-img-overlay overflow-hidden" style="border-radius: 5%;">
             <div class="d-flex align-items-center">
                 <span class="bg-danger-gradiant badge overflow-hidden text-white px-3 py-1 font-weight-normal">{{$blog->category_name}}</span>
                 <div class="ml-2">
                   <span class="ml-2">{{$blog->published_at}}</span>
                 </div>
             </div>
             <h5 class="card-title my-3 font-weight-normal">{{$blog->title}}</h5>
             <p class="card-text">{{ $blog->excerpt }}...</p>
           </div>
         </div>
         
     </a>
       </div>
 
       @endforeach

 
      <!-- Column -->
    </div>
  </div>
</div>



</div>
</div>