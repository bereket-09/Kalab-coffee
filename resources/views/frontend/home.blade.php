@include('frontend.header')

@include('frontend.master', ['menus' => $menus,'testimonials' => $testimonials,'flavors'=>$flavors])

@include('frontend.footer')

{{-- @extends('frontend.master') --}}




