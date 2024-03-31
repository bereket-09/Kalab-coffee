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
      <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Events</h1>
      <div class="d-inline-flex mb-lg-5">
          <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
          <p class="m-0 text-white px-2">/</p>
          <p class="m-0 text-white">Events</p>
      </div>
  </div>
</div>
  <!-- Page Header End -->




<div class="container-fluid pt-5">
  <div class="container">
      <div class="section-title">
          <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Upcoming Events </h4>
          <h1 class="display-4"></h1>
      </div>

      <div class="blog-home2 py-5">
        <div class="container">
          <!-- Row  -->
          <div class="row justify-content-center">
            <!-- Column -->
            <div class="col-md-8 text-center">
              {{-- <h3 class="my-3">Upcoming Events</h3> --}}
              <h6 class="subtitle font-weight-normal">Where Every Event Brews Warm Memories and Rich Conversations.</h6>
            </div>
            <!-- Column -->
            <!-- Column -->
          </div>
          <div class="row mt-4">
            <!-- Column -->
            @foreach ($events as $event)
            <div class="col-md-4 on-hover">

                <div class="card border-0 mb-4">
                  <a href="{{ route('event-show', ['id' => $event->id]) }}"><img class="card-img-top" src="{{ Storage::url($event->image) }}" alt="{{$event->name}}"></a>
                  <div class="date-pos bg-info-gradiant p-2 d-inline-block text-center rounded text-white position-absolute">{{$event->month}}<span class="d-block">{{$event->date}}</span></div>
                  <h5 class="font-weight-medium mt-3"><a href="{{ route('event-show', ['id' => $event->id]) }}" class="text-decoration-none link">{{$event->name}}</a></h5>
                  <p class="mt-3">{{$event->location}}</p>
                  <a href="{{ route('event-show', ['id' => $event->id]) }}" class="text-decoration-none linking text-themecolor mt-2">Learn More</a>
                </div>
              </div>
            @endforeach

            <!-- Column -->
            {{-- <div class="col-md-4 on-hover">
              <div class="card border-0 mb-4">
                <a href="#"><img class="card-img-top" src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/blog/blog-home/img2.jpg" alt="wrappixel kit"></a>
                <div class="date-pos bg-info-gradiant p-2 d-inline-block text-center rounded text-white position-absolute">Oct<span class="d-block">23</span></div>
                <h5 class="font-weight-medium mt-3"><a href="#" class="text-decoration-none link">New Seminar on Newest Food Recipe from World’s Best</a></h5>
                <p class="mt-3">Business Park, Opp. Corns Sam Restaurant, New Yoark, US</p>
                <a href="#" class="text-decoration-none linking text-themecolor mt-2">Learn More</a>
              </div>
            </div> --}}
            <!-- Column -->
            {{-- <div class="col-md-4 on-hover">
              <div class="card border-0 mb-4">
                <a href="#"><img class="card-img-top" src="https://www.wrappixel.com/demos/ui-kit/wrapkit/assets/images/blog/blog-home/img1.jpg" alt="wrappixel kit"></a>
                <div class="date-pos bg-info-gradiant p-2 d-inline-block text-center rounded text-white position-absolute">Oct<span class="d-block">23</span></div>
                <h5 class="font-weight-medium mt-3"><a href="#" class="text-decoration-none link">Learn from small things to create something bigger.</a></h5>
                <p class="mt-3">Business Park, Opp. Corns Sam Restaurant, New Yoark, US</p>
                <a href="#" class="text-decoration-none linking text-themecolor mt-2">Learn More</a>
              </div>
            </div> --}}
          </div>
        </div>
      </div>

</div>
</div>
