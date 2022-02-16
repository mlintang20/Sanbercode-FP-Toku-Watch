@extends('layouts.master')

@section('content')
    <!--================ Hero banner start =================-->
    @include('home.herobanner')
    <!--================ Hero banner start =================-->

    <!--================ Hero Carousel start =================-->
    @include('home.herocarousel')
    <!--================ Hero Carousel end =================-->

    <!-- ================ trending product section start ================= -->  
    @include('home.trendingproduct')
    <!-- ================ trending product section end ================= -->  

    <!-- ================ offer section start ================= --> 
    @include('home.offer')
    <!-- ================ offer section end ================= --> 

    <!-- ================ Best Selling item  carousel ================= --> 
    @include('home.bestselling')
    <!-- ================ Best Selling item  carousel end ================= -->
@endsection