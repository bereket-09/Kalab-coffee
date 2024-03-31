<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Kalab's Coffee</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="favicon.ico" rel="icon">

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    
    {{-- <link rel="stylesheet" href="{{URL::to('/')}}"> --}}

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::to('/')}}/lib/owlcarousel/assets/owl.carousel.min.css">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{URL::to('/')}}/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

    <link rel="stylesheet" href="{{URL::to('/')}}/css/custom.css">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{URL::to('/')}}/css/style.min.css">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="{{ route('home') }}" class="navbar-brand px-lg-4 m-0">
                <div class="rounded-circle bg-white p-3">
                    {{-- <img src="logo.png" alt="Kalab's Coffee Logo" class="img-fluid" style="width: 80px;">  --}}
                    
                    <img src="{{ asset('logo.png') }}" alt="Kalab's Coffee Logo" class="img-fluid" style="width: 80px;">

                </div>
            </a>
    
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>   
            </button>
            <div class="collapse navbar-collapse justify-content-between align-items-center" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4">
                    <a href="{{ route('home') }}" class="nav-item nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="nav-item nav-link {{ Route::currentRouteName() === 'about' ? 'active' : '' }}">About</a>
                    <a href="{{ route('services') }}" class="nav-item nav-link {{ Route::currentRouteName() === 'services' ? 'active' : '' }}">Service</a>
                    <a href="{{ route('menus') }}" class="nav-item nav-link {{ Route::currentRouteName() === 'menus' ? 'active' : '' }}">Menu</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle {{ Route::currentRouteName() === 'reservation' || Route::currentRouteName() === 'testimonials' ? 'active' : '' }}" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu text-capitalize">
                            <a href="{{ route('blogs') }}" class="dropdown-item {{ Route::currentRouteName() === 'blogs' ? 'active' : '' }}">News and Blogs</a>
                            
                            <a href="{{ route('events') }}" class="dropdown-item {{ Route::currentRouteName() === 'events' ? 'active' : '' }}">Events</a>
                            <a href="{{ route('testimonials') }}" class="dropdown-item {{ Route::currentRouteName() === 'testimonials' ? 'active' : '' }}">Testimonial</a>
                        </div>
                    </div>
                    <a href="{{ route('contact') }}" class="nav-item nav-link {{ Route::currentRouteName() === 'contact' ? 'active' : '' }}">Contact</a>
                </div>
            </div>
        </nav>
    </div>
    
    
    <!-- Navbar End -->