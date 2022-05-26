@extends('partials.admin-layout')
@section('content')



<div class="main-content">
    <div class="wrapper">
        <h1>Change Password</h1>
        <br><br> 



        <form action="" method="POST">
            <div class="box1">
                <table class="tbl-30">
                    <tr>
                        <td>Current Password</td>
                        <td><input class="form" type="password" name="current_password" placeholder="Old Passsword"></td>
                    </tr>
                    <tr>
                        <td>New Password</td>
                        <td><input class="form" type="password" name="new_password" placeholder="New Passsword"> </td>
                    </tr>
                    <tr>
                        <td>Confirm Password</td>
                        <td><input class="form" type="password" name="confirm_password" placeholder="New Passsword"> </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Change pass" class=btn-secondary1>
                        </td>
                    </tr>
                </table>
            </div>
    </div>
</div>
</form>



@endsection