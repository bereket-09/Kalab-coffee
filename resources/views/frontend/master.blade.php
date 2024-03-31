@if(session('alert'))
    <script>
        alert("{{ session('alert')['message'] }}");
        window.location.href = "{{ url('/') }}";
    </script>
@endif

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="blog-carousel" class="carousel slide overlay-bottom" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">Kalab Coffe</h2>
                        <h1 class="display-1 text-white m-0">Coffe Is Chemisry</h1>
                        <h2 class="text-white m-0"> Unlock the Science of Flavor! </h2>
                    </div>
                </div>
                <div class="carousel-item rounded-lg" >
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">We Have Been Serving</h2>
                        <h1 class="display-1 text-white m-0">THE BEST COFFEE</h1>
                        <h2 class="text-white m-0">* SINCE 2021 *</h2>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100 position-relative" src="img/coffe.jpg" alt="Image" >
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <h2 class="text-primary font-weight-medium m-0">Where the Aroma of Ambition</h2>
                        <h1 class="display-1 text-white m-0"> Meets the Chemistry of  </h1>
                        <h2 class="text-white m-0">Coffee</h2>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#blog-carousel" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#blog-carousel" data-slide="next">
                <span class="carousel-control-next-icon"></span>
            </a>
        </div>
    </div>
    <!-- Carousel End -->




    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">About Us</h4>
                <h1 class="display-4">Serving Since 2021</h1>
            </div>
            <div class="row">
                <div class="col-lg-4 py-0 py-lg-5">
                    <h1 class="mb-3">Our Story</h1>
                    <h5 class="mb-3">Kalab Coffee is the result of a shared passion and dedication to crafting a remarkable coffee experience. </h5>
                    <p>Founded in 2021 by a group of devoted coffee enthusiasts, our journey began with a mission to source the finest ethically and sustainably grown coffee beans from around the world. Through tireless experimentation, we perfected our blends and roasting techniques, creating bold, rich flavors that captivated coffee lovers everywhere. As our reputation grew, so did our commitment to social responsibility, supporting local farmers and giving back to our community.</p>
                    <a href="" class="btn btn-secondary font-weight-bold py-2 px-4 mt-2">Learn More</a>
                </div>
                <div class="col-lg-4 py-5 py-lg-0" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100" src="img/about.png" style="object-fit: cover;">
                    </div>
                </div>
                <div class="col-lg-4 py-0 py-lg-5" style="padding-left: 55px;">
                    <h1 class="mb-3">Our Vision</h1>
                    <p>As Kalab Coffee embraces the future, we blend innovation with a focus on sustainability, ethics, and social responsibility. With every sip, we spark joy and drive positive change, shaping a future where each taste brings delightful possibilities. Join us on this journey towards a brighter tomorrow, one sip at a time.</p>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Innovate coffee experiences sustainably. </h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Support local farmers and eco-friendly practices.</h5>
                    <h5 class="mb-3"><i class="fa fa-check text-primary mr-3"></i>Give back to communities, creating positive change.</h5>
                    <a href="" class="btn btn-primary font-weight-bold py-2 px-4 mt-2">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <div class="container-fluid py-5 w-100" style="overflow: hidden">
        <div class="container w-100">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Explore</h4>
                <h1 class="display-4">Our Recent Flavors</h1>


            </div>
            <div class="owl-carousel testimonial-carousel flavor" style="overflow: visible !important;margin-top:125px;">
                @foreach($flavors as $flavor)
                <div class="testimonial-item" style="height: 300px !important; overflow: visible !important;"> <!-- Adjusted height to accommodate margin and image height -->
                    <div class="d-flex align-items-center mb-3" style="
                        justify-content: space-evenly !important;
                        background: #F2A77C !important;
                        border-radius: 20% !important;
                        height: 300px !important;
                        width: 280px !important;
                        display: flex !important;
                        align-items: center !important;
                        flex-direction: column !important;
                        margin-bottom: 20px !important; /* Added margin-bottom */
                        position: relative !important; /* Added relative positioning */
                        overflow: visible !important;
                    ">
                        <img class="" src="{{ Storage::url($flavor->image) }}" alt="" style="
                            height: 280px !important;
                            width: 150px !important;
                            position: absolute !important; /* Added absolute positioning */
                            top: -90px !important; /* Adjusted top positioning */
                            left: 50% !important; /* Set left to 50% */
                            transform: translateX(-50%) !important; /* Center image horizontally */
                            border-radius: 20% !important; /* Matched border-radius with parent div */

                            transition: transform 0.3s ease !important; /* Added transition for smooth hover effect */
                        ">
                        <div class="ml-3" style="position: absolute !important; bottom: 20px !important; text-align: center !important;"> <!-- Adjusted text container positioning -->
                            <h4>{{$flavor->name}}</h4>
                        </div>
                    </div>
                </div>



            @endforeach

            </div>
        </div>
    </div>


    <!-- Service Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Our Services</h4>
                <h1 class="display-4">Fresh & Organic Beans</h1>
            </div>
            <div class="row">
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/service-1.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-truck service-icon"></i>Fastest Delivery</h4>
                            <p class="m-0">Experience swift satisfaction with our lightning-fast delivery service, ensuring your coffee reaches you promptly, ready to delight your senses.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/service-2.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-coffee service-icon"></i>Fresh Coffee Beans</h4>
                            <p class="m-0">Savor the essence of freshness with every cup, as our coffee beans are sourced and delivered to you at the peak of fresh flavor and aroma.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/service-3.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-award service-icon"></i>Best Quality Coffee</h4>
                            <p class="m-0">Immerse yourself in the pinnacle of coffee excellence, where each brew embodies unparalleled quality and taste, crafted to perfection.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 mb-5">
                    <div class="row align-items-center">
                        <div class="col-sm-5">
                            <img class="img-fluid mb-3 mb-sm-0" src="img/service-4.jpg" alt="">
                        </div>
                        <div class="col-sm-7">
                            <h4><i class="fa fa-table service-icon"></i>Brewed with passion </h4>
                            <p class="m-0">                                Each cup of our coffee is meticulously brewed with passion, ensuring an unforgettable experience with every sip.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Offer Start -->
    <div class="offer container-fluid my-5 py-5 text-center position-relative overlay-top overlay-bottom">
        <div class="container py-5">
            <h1 class="display-3 text-primary mt-3">Discover The Perfect Blend</h1>
            <h1 class="text-white mb-3"></h1>
            <h4 class="text-white font-weight-normal mb-4 pb-3"> Sign Up for Our Coffee Shop Newsletter Today!</h4>
            <form method="POST" action="{{ route('newsletter.subscribe') }}" class="form-inline justify-content-center mb-4">
                @csrf
                <div class="input-group">
                    <input type="email" name="email" class="form-control p-4" placeholder="Your Email" style="height: 60px;" required>
                    <div class="input-group-append">
                        <button class="btn btn-primary font-weight-bold px-4" type="submit">Sign Up</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Offer End -->


    <!-- Menu Start -->

    <div class="container-fluid pt-5">
        <div class="container">
            <div class="section-title">
                <h4 class="text-primary text-uppercase" style="letter-spacing: 5px;">Menu </h4>
                <h1 class="display-4">Taste the Magic: Explore Our Menu!</h1>
            </div>
            <div class="row">

                <div class="col-lg-6">
                    <h1 class="mb-5">Hot Coffee</h1>
                    @foreach($menus as $menu)
                        @if(strtolower($menu->category) === "hot")
                            <div class="row align-items-center mb-5">
                                <div class="col-4 col-sm-3">
                                       <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{ Storage::url($menu->image) }}"  alt="{{ $menu->name }}">

                                    {{-- <h5 class="menu-price">{{ $menu->price }}</h5> --}}
                                </div>
                                <div class="col-8 col-sm-9">
                                    <h4>{{ $menu->name }}</h4>
                                    <p class="m-0">{{ $menu->desc }}</p>
                                    {{-- <p class="m-0">Price: {{ $menu->price }} Birr.</p> --}}
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

                <div class="col-lg-6">
                    <h1 class="mb-5">Cold Coffee</h1>
                    @foreach($menus as $menu)
                        @if(strtolower($menu->category) === "cold")
                            <div class="row align-items-center mb-5">
                                <div class="col-4 col-sm-3">

                                    <img class="w-100 rounded-circle mb-3 mb-sm-0" src="{{ Storage::url($menu->image) }}"  alt="{{ $menu->name }}">
                                    <h5 class="menu-price">{{ $menu->price }}</h5>
                                </div>
                                <div class="col-8 col-sm-9">
                                    <h4>{{ $menu->name }}</h4>
                                    <p class="m-0">{{ $menu->desc }}</p>

                                <p class="m-0">Price: <strong>{{ $menu->price }} Birr.</strong></p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>

            </div>
        </div>
    </div>
    <!-- Menu End -->


    <!-- Reservation Start -->
    {{-- <div class="container-fluid my-5">
        <div class="container">
            <div class="reservation position-relative overlay-top overlay-bottom">
                <div class="row align-items-center">
                    <div class="col-lg-6 my-5 my-lg-0">
                        <div class="p-5">
                            <div class="mb-4">
                                <h1 class="display-3 text-primary">30% OFF</h1>
                                <h1 class="text-white">For Online Reservation</h1>
                            </div>
                            <p class="text-white">Lorem justo clita erat lorem labore ea, justo dolor lorem ipsum ut sed eos,
                                ipsum et dolor kasd sit ea justo. Erat justo sed sed diam. Ea et erat ut sed diam sea</p>
                            <ul class="list-inline text-white m-0">
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Lorem ipsum dolor sit amet</li>
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Lorem ipsum dolor sit amet</li>
                                <li class="py-2"><i class="fa fa-check text-primary mr-3"></i>Lorem ipsum dolor sit amet</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="text-center p-5" style="background: rgba(51, 33, 29, .8);">
                            <h1 class="text-white mb-4 mt-5">Book Your Table</h1>
                            <form class="mb-5">
                                <div class="form-group">
                                    <input type="text" class="form-control bg-transparent border-primary p-4" placeholder="Name"
                                        required="required" />
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control bg-transparent border-primary p-4" placeholder="Email"
                                        required="required" />
                                </div>
                                <div class="form-group">
                                    <div class="date" id="date" data-target-input="nearest">
                                        <input type="text" class="form-control bg-transparent border-primary p-4 datetimepicker-input" placeholder="Date" data-target="#date" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="time" id="time" data-target-input="nearest">
                                        <input type="text" class="form-control bg-transparent border-primary p-4 datetimepicker-input" placeholder="Time" data-target="#time" data-toggle="datetimepicker"/>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="custom-select bg-transparent border-primary px-4" style="height: 49px;">
                                        <option selected>Person</option>
                                        <option value="1">Person 1</option>
                                        <option value="2">Person 2</option>
                                        <option value="3">Person 3</option>
                                        <option value="3">Person 4</option>
                                    </select>
                                </div>

                                <div>
                                    <button class="btn btn-primary btn-block font-weight-bold py-3" type="submit">Book Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Reservation End -->


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
                        <img class="img-fluid  rounded-lg" src="{{ Storage::url($testimonial->image) }}" alt="{{ $testimonial->name }}">
                        <div class="ml-3">
                            <h4>{{ $testimonial->name }}</h4>
                            <i>{{ $testimonial->profession }}</i>
                        </div>
                    </div>
                    <p class="m-0">{{ $testimonial->content }}</p>
                    {{-- <p class="m-0">{{ $testimonial->id }}</p> --}}
                </div>
            @endforeach

            </div>
        </div>
    </div>
    <!-- Testimonial End -->




