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
            
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>

            <form action="{{'/food-order'}}" class="order" action =post>
                @csrf
                <fieldset>
                    <legend>Selected Food</legend>


                    @foreach ($orders as $order)
                        
                    @endforeach
                    <div class="food-menu-img">
                        <img src="{{asset('images/'.$order->image_name)}}" alt="Chicke Hawain Pizza" class="img-responsive img-curve">
                    </div>
    
                    <div class="food-menu-desc">
                        <h3>{{$order->title}}</h3>
                        <input type="hidden" value="{{$order->title}}" name = "title">
                        <p class="food-price">${{$order->price}}</p>
                            <input type="hidden" value="{{$order->price}}" name = "price">
                     
                        <div class="order-label">Quantity</div>
                        <input type="number" name="qty" class="input-responsive" value="1" required>
                        
                    </div>

                </fieldset>
                
                <fieldset>
                    <legend>Delivery Details</legend>
                    <div class="order-label">Full Name</div>
                    <input type="text" name="name" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact"  class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="btn btn-primary">
                </fieldset>

            </form>

        </div>
    </section>
    @include('partials.footer')