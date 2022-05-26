@extends('partials.admin-layout')
@section('content')

<div class="main-content">
    <div class="wrapper">
        <h1>DASHBOARD</h1>

        <div class="col-4 text-center">
            <h1>{{$category}}</h1>
            <br />
            Categories
        </div>
        <div class="col-4 text-center">
            <h1>{{$food}}</h1>
            <br />
           Food
        </div>
        <div class="col-4 text-center">
            <h1>{{$total_orders}}</h1>
            <br />
            Total Orders
        </div>
        <div class="col-4 text-center">
            <h1>${{$total_revenue}}</h1>
            <br />
            Revenue Generated
        </div>
        <div class="clearfix"></div>
    </div>
</div>


@endsection