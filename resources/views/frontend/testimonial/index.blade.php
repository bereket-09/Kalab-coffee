
@include('frontend.header')
{{-- @extends('frontend.testimonial.testimonial') --}}

@include('frontend.testimonial.testimonial', ['testimonials' => $testimonials])

@include('frontend.footer')


