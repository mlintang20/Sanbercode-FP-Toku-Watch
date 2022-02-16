@extends('layouts_aroma.master_aroma')

@section('content')
    <!--================ Hero banner start =================-->
    @include('layouts_aroma.home.herobanner')
    <!--================ Hero banner start =================-->

    <!--================ Hero Carousel start =================-->
    @include('layouts_aroma.home.herocarousel')
    <!--================ Hero Carousel end =================-->

    <!-- ================ trending product section start ================= -->  
    @include('layouts_aroma.home.trendingproduct')
    <!-- ================ trending product section end ================= -->  

    <!-- ================ offer section start ================= --> 
    @include('layouts_aroma.home.offer')
    <!-- ================ offer section end ================= --> 

    <!-- ================ Best Selling item  carousel ================= --> 
    @include('layouts_aroma.home.bestselling')
    <!-- ================ Best Selling item  carousel end ================= -->
@endsection