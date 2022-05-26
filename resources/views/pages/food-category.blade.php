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
            
            <h2>Food on <a href="#" class="text-white"></a>{{$category_id['title']}}</h2>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->



    <!-- fOOD MEnu Section Starts Here -->
    <section class="food-menu">
        <div class="container">
            <h2 class="text-center">Food Menu</h2>

            @foreach($foodCategory as $foodCat)
            <div class="food-menu-box">
                <div class="food-menu-img">
                    <img src="{{asset('images/'.$foodCat->image_name)}}" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                </div>
                <div class="food-menu-desc">
                    <h4> {{$foodCat->title}}</h4>
                    <p class="food-price"> ${{$foodCat->price}}</p>
                    <p class="food-detail">
                        {{$foodCat->description}}
                    </p>
                    <br>

                    <a href="order.html" class="btn btn-primary">Order Now</a>
                </div>
            </div>

            @endforeach
            <div class="clearfix"></div>

            

        </div>

    </section>
    @include('partials.footer')