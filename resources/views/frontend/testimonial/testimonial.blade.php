
    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 position-relative overlay-bottom">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h1 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase">Testimonial</h1>
            <div class="d-inline-flex mb-lg-5">
                <p class="m-0 text-white"><a class="text-white" href="">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Testimonial</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Testimonial</h4>
                <h1 class="display-4">Our Clients Say</h1>
            </div>
            <div class="owl-carousel testimonial-carousel">
             
                @foreach($testimonials as $testimonial)
                <div class="testimonial-item">
                    <div class="d-flex align-items-center mb-3">
                        <img class="img-fluid rounded-lg" src="{{ Storage::url($testimonial->image) }}" alt="{{ $testimonial->name }}">
                        <div class="ml-3">
                            <h4>{{ $testimonial->name }}</h4>
                            <i>{{ $testimonial->profession }}</i>
                        </div>
                    </div>
                    <p class="m-0">{{ $testimonial->content }}</p>
                </div>
            @endforeach
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
