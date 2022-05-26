@extends('partials.pages-layout')
@section('content')
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="/" title="Logo">
                    <img src="{{asset('images/logo.png')}}" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            @include('partials.menu')

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search text-center">
        <div class="container">
            
            <h2>Foods on Your Search <a href="#" class="text-white">{{$_GET['search']}}</a></h2>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>
            @foreach($foodSearch as $search)
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="{{asset('images/'.$search->image_name)}}" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
                    <h4> {{$search->title}}</h4>
                    <p class="food-price"> ${{$search->price}}</p>
                    <p class="food-detail">
                        {{$search->description}}
                    </p>
                    <br>

                    <a href="{{url('/order', $search->id)}}"  class="btn btn-primary">Order Now</a>
                </div>
            </div>

            @endforeach

            <div class="clearfix"></div>

            

        </div>

    </section>
    @include('partials.footer')