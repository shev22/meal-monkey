@extends('partials.admin-layout')
@section('content')



<div class="main-content">
    <div class="wrapper">
        <h1>Manage Admin</h1>
        <br /><br />
        <a href="{{"/add-admin"}}" class="btn-primary">Add Admin</a>
        <br /><br />

        
        <table class="tbl-full">
            <tr>
                <th>S.N.</th>
                <th>Full Name</th>
                <th>Username</th>
                <th>Actions</th>
            </tr>
            @foreach ($administrators as $administrator)
            <tr>
                <td>{{$i++}}</td>
                <td> {{$administrator->full_name}}</td>
                <td> {{$administrator->username}}</td>
                <td>
                    
                    <form action="{{url('admin.delete',$administrator->id) }}" method="POST">
                        <a href="{{ url('/update-password') }}" class="btn-primary">change password</a>
                        <a href="{{ url('/update-admin',$administrator->id) }}"class="btn-secondary">update admin</a>
                  
                    @csrf
                    @method('DELETE')
                        <button type= "submit" class="btn-danger"> delete admin</button>
                   </form>
                </td>
            </tr>
            @endforeach
        </table> 
       
        {{-- {{$administrators->links()}} --}}
    </div>
</div>
@endsection








