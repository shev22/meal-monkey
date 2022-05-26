@extends('partials.admin-layout')
@section('content')


<div class="main-content">
    <div class="wrapper">
        <h1>Update Admin</h1>
        <br><br>

<form action="{{url('edit-admin',$administrator->id)}}"method="POST">
    @csrf
    @method('PUT')

    <div class="box1">
        <table class="tbl-30">
            <tr>
                <td>Full Name</td>
                <td><input class="form" type="text" name="full_name" value= "{{$administrator->full_name}}"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input class="form" type="text" name="username" value="{{$administrator->username}}"></td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Update Admin" class=btn-secondary>
                </td>
            </tr>
        </table>
    </div>
</div>
</div>
</form>

@endsection