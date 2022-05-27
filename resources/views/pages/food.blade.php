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
            
            <form action="{{url('/food-search')}}" method="get">
                <input type="search" name="search" placeholder="Search for Food.." required>
                <input type="submit" name="submit" value="Search" class="btn btn-primary">
            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            @foreach($foodPage as $fdPage)
            
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="{{asset('images/'.$fdPage->image_name)}}" alt="Chicke Hawain Pizza" width = '110px' height = '110px'class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
                    <h4> {{$fdPage->title}}</h4>
                    <p class="food-price"> ${{$fdPage->price}}</p>
                    <p class="food-detail">
                        {{$fdPage->description}}
                    </p>
                    <br>

                    <a href="{{url('/order', $fdPage->id)}}"  class="btn btn-primary">Order Now</a>
                </div>
            </div>

            @endforeach

            


            <div class="clearfix"></div>

            

        </div>

    </section>
    @include('partials.footer')