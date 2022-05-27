<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meal Monkey</title>
    <link rel="stylesheet" href="/css/admin.css">
</head>
<body>
  
    <div class="menu text-center">
        <div class="wrapper">
            <ul>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li></li>
                <li><a href="/" >Guest Home</a></li>
            </ul>
        </div>
    </div>
<div class="main-content">
    <div class="wrapper">
        <h1>Log in</h1>
        <br>
        <form action="{{ url('/auth/check') }}" method="post"> 
            @csrf

           
                <table class="tbl-30">
                    <tr>
                        <td>Email</td>
                        <td> <input class="form" type="text" class="form-control" name="email" placeholder="Enter email address" ></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input class="form" type="password" class="form-control" name="password" placeholder="Enter password">
                        </td>
                    </tr>
                        <td colspan="2">
                            <button type="submit" class="btn  btn-primary">Sign In</button>
                        </td>
                    </tr>
                </table>
   
        </form>
    </div>
</div>

