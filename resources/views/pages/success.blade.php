@extends('partials.pages-layout')
@section('content')
<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="{{asset('images/logo.png')}}"  alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            @include('partials.menu')

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search">
        <div class="container">
            
            <h2 class="text-center text-white">Thank you for your order.</h2>

            

        </div>
    </section>
    @include('partials.footer')