@extends('partials.admin-layout')
@section('content')



<div class="main-content">
    <div class="wrapper">
        <h1>Manage Food</h1>
        <br /><br />
        <a href="{{url('/add-food')}}" class="btn-primary">Add Food</a>
        <br /><br />

        
        <table class="tbl-full">
            <tr>
                <th>S.N.</th>
                <th>Title</th>
                <th>Image</th>
                <th>description</th>
                <th>Price</th>
                <th>Available</th>
                <th>Actions</th>

            </tr>
              @foreach ($eatery as $chop) 
            <tr>
                 <td>{{$i++}}</td>
                <td> {{$chop->title}}</td>
                <td> <img src="{{asset('images/'.$chop->image_name)}}" width="150px" height="120px"></td>
                <td> {{$chop->description}}</td>
                <td> ${{$chop->price}}</td>
                <td> {{$chop->featured}}</td>  


                <form action="{{url('food.delete',$chop->id) }}" method="POST">
                    
                    @csrf
                    @method('DELETE')
                <td>
                    <button type= "submit" class="btn-danger"> delete Food</button>
                </form>
                </td>
            </tr>
           @endforeach 
        </table> 
       
        {{-- {{$administrators->links()}} --}}
    </div>
</div>





@endsection






