@extends('partials.pages-layout')
@section('content')
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo.png" alt="Restaurant Logo" class="img-responsive">
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

    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Food</h2>


            @foreach($category as $cat)
            <a href="{{url('/food-category', $cat->id)}}">
            <div class="box-3 float-container">
                <img src="{{asset('images/'.$cat->image_name)}}" alt="Pizza" class="img-responsive img-curve">

                <h3 class="float-text text-white"> {{$cat->title}}</h3>
            </div>
            </a>
@endforeach
           

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Categories Section Ends Here -->

    <!-- fOOD MEnu Section Starts Here -->


    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            @foreach($foodIndex as $fdIndex)
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="{{asset('images/'.$fdIndex->image_name)}}" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
                    <h4> {{$fdIndex->title}}</h4>
                    <p class="food-price"> ${{$fdIndex->price}}</p>
                    <p class="food-detail">
                        {{$fdIndex->description}}
                    </p>
                    <br>

                    <a href="{{url('/order', $fdIndex->id)}}" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            @endforeach


            <div class="clearfix"></div>

            

        </div>

        <p class="text-center">
            <a href="#">See All Foods</a>
        </p>
    </section>
    <!-- fOOD Menu Section Ends Here -->

    <!-- social Section Starts Here -->
  @include('partials.footer')