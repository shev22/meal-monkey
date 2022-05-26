@extends('partials.pages-layout')
@section('content')
<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="/" title="Logo">
                    <img src="images/logo.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>
            @include('partials.menu')

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->



    <!-- CAtegories Section Starts Here -->
    <section class="categories">
        <div class="container">
            <h2 class="text-center">Explore Category</h2>

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
    @include('partials.footer')