<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Meal Monkey</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="menu text-center">
        <div class="wrapper">
           
<div class="main-content">
    <div class="wrapper">
        <h4>Login | Custom Auth</h4><hr>
        <form action="{{ url('/auth/check') }}" method="post"> 
            @csrf

            <div class="box">
                <table class="tbl-30">
                    <tr>
                        <td>Email</td>
                        <td> <input type="text" class="form-control" name="email" placeholder="Enter email address" ></td>
                    </tr>
                    <tr>
                        <td>Password</td>
                        <td><input type="password" class="form-control" name="password" placeholder="Enter password">
                        </td>
                    </tr>
                        <td colspan="2">
                            <button type="submit" class="btn btn-block btn-primary">Sign In</button>
                        </td>
                    </tr>
                </table>
            </div>
        </form>
    </div>
</div>

</div>
</div>



























</body>
</html>