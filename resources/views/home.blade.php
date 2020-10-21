
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css" integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
<!-- Stored in resources/views/layouts/app.blade.php -->

<html>
    <head>
        <title>Food Aid| @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <a href="{{ url('/dashboard') }}" class="right">Dashboard</a>
        <a href="{{ url('/dashboard') }}" class="right">About</a>
        <a href="{{ url('/donateCreate') }}" class="right">Donate</a>
        <a href="{{ url('/dashboard') }}" class="right">Contact</a>
<style>
    body{
        background-color: skyblue;
    }
img {
  display: block;
  margin-left: auto;
  margin-right: auto;
  height:auto;
}
.right{

    float: right;
}

</style>
    </head>
    <body>
       <section><h5>This is our homepage.WELCOME HOME</h></section> 
<img src="1.jpg" alt="Food Aid" style="width:100%";>
        @section('sidebar')
         
        @show

        <div class="container">
            @yield('content')
            
        </div>
         <div class="container">
         @extends('footer')
        </div>

</html>
