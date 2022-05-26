@extends('partials.admin-layout')
@section('content')




<div class="main-content">
    <div class="wrapper">
        <h1>Manage Ordery</h1>
      
        
        <table class="tbl-full">
            <tr>
                <th>S.N.</th>
                <th>food</th>
                <th>price</th>
                <th>qty</th>
                <th>total</th>
                <th>order date</th>
                <th>status</th>
                <th>Customer Name</th>
                <th>Customer Contact</th>
                <th>Customer Email</th>
                <th>Customer Address</th>
                <th>Actions</th>
            </tr>
          @foreach ($orderLists as $orderList)
            <tr>
                <td>{{$i++}}</td>
                <td> {{$orderList->food}}</td>
                <td> {{$orderList->price}}</td> 
                <td> {{$orderList->qty}}</td> 
                <td> {{$orderList->total}}</td> 
                <td> {{$orderList->order_date}}</td> 
                <td> {{$orderList->status}}</td> 
                <td> {{$orderList->customer_name}}</td>
                <td> {{$orderList->customer_contact}}</td> 
                <td> {{$orderList->customer_email}}</td> 
                <td> {{$orderList->customer_address}}</td> 
                
                <td>
                    <form action="{{url('order.delete',$orderList->id) }}" method="POST">
                    
                        @csrf
                        @method('DELETE')
                        <button type= "submit" class="btn-danger"> delete order</button>
                    </form>
                </td>
            </tr>
             @endforeach 
        </table> 
       
        {{-- {{$administrators->links()}} --}}
    </div>
</div>







@endsection






