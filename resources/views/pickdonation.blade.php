@extends('index')
@section('title', 'donations')
@section('content')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<div class="container mt-5">
    <style type="text/css">
        body{
            background-color: skyblue;
        }
    </style>
    <body>
        <a href="/admin/home" class="btn btn-default">Back</a>
    <h2>Your Donation</h2>
    <table class="table mt-3">
        <thead>
            <tr>
            <th scope="col">ID</th>
           
            <th scope="col">Donor Name</th>
            <th scope="col">Donor Mail</th>
            <th scope="col">Donor Phone </th>
            <th scope="col">Donor Location </th>
            <th scope="col">Food Name</th>
            <th scope="col">Food Amount</th>
            <th scope="col">Food Description</th>
           
             <button><th scope="col">Assign</th></button>
            </tr>
        </thead>
        <tbody>

            @foreach ($donations as $donation)
            
            <tr>
                <td>{{ $donation->id }}</td>
                <td>{{ $donation->donor_name }}</td>
                <td>{{ $donation->donor_mail }}</td>
                <td>{{ $donation->donor_phone }}</td>
                 <td>{{ $donation->donor_location }}</td>
                <td>{{ $donation->food_name }}</td>
                <td>{{ $donation->food_amount }}</td>
                <td>{{ $donation->food_description }}</td>

          <td> <form action="{{action('App\Http\Controllers\donationController@destroy', $donation->id)}}" method="post"onSubmit="return confirm('Are you sure to assign?')">
                 <td> <form action="{{action('App\Http\Controllers\donationController@destroy', $donation->id)}}" method="post"onSubmit="return confirm('Are you sure to assign?')">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-primary" type="submit">ASSIGN</button>
                    </form>
                </td>
            </tr>
            @endforeach 
                     
        </tbody>
    </table>
   

@endsection
</body>