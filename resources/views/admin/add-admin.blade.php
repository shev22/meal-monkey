
@extends('partials.admin-layout')
@section('content')



<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>
        <br>
        <form action="{{'admin.store'}}" method="POST">
            @csrf

            <div class="box">
                <table class="tbl-30">
                    <tr>
                        <td>Full Name</td>
                        <td><input class = "form" type="text" name="full_name" placeholder="Enter Your Username"></td>
                    </tr>
                    <tr>
                        <td>Username</td>
                        <td><input   class = "form" type="text" name="username" placeholder="Enter Your Username"></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input  class = "form" type="password" name="password" placeholder="Enter Your Password"></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add Admin" class=btn-secondary1>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
</div>

@endsection