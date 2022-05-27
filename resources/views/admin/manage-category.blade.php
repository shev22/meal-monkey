@extends('partials.admin-layout')
@section('content')


<div class="main-content">
    <div class="wrapper">
        <h1>Add Category</h1>
        <br /><br />
        <a href="{{url('/add-category')}}" class="btn-primary">Add Category</a>
        <br /><br />

        
        <table class="tbl-full">
            <tr>
                <th>S.N.</th>
                <th>Title</th>
                <th>Image</th>
                <th>Available</th>
                <th>Actions</th>

            </tr>
            @foreach ($category as $cat) 
            <tr>
                 <td>{{$i++}}</td>
                <td> {{$cat->title}}</td>
                <td> <img src="{{asset('images/'.$cat->image_name)}}" width="150px" height="120px"></td>
            
                <td> {{$cat->featured}}</td>
              
                <td>
                    <form action="{{url('category.delete',$cat->id) }}" method="POST">
                    
                    @csrf
                    @method('DELETE')
                        <button class="btn-danger"> delete Category</button> 
                    </form>
                </td>
            </tr>
         @endforeach 
        </table> 
       
       {{-- {{$category->links()}}  --}}
    </div>
</div>





@endsection






