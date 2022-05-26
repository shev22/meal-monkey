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
                <li><a href="/admin">Home</a></li>
                <li><a href="/manage-admin">Admin</a></li>
                <li><a href="/manage-category">Category</a></li>
                <li><a href="/manage-food">Food</a></li>
                <li><a href="/manage-order">Order</a></li>
                <li><a href="/admin.logout" class="btn-secondary">Log out</a></li>
                <li><a href="/" class="btn-secondary">Guest Home</a></li>
            </ul>
        </div>
    </div>
    @yield('content')