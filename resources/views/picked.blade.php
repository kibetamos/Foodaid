@extends('base')
@section('main')
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
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Picked donation</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td> Name</td>
          <td> Email</td>
          <td> Phone</td>
          <td> Location</td>
        </tr>
    </thead>
    <tbody>
        @foreach($agencies as $agency)
        <tr>
            <td>{{$agency->id}}</td>
            <td>{{$agency->agency_name}}</td>
            <td>{{$agency->agency_mail}}</td>
            <td>{{$agency->agency_phone}}</td>
            <td>{{$agency->agency_location}}</td>
            
            <td>
                <a href="{{ action('App\Http\Controllers\AgencyController@edit',$agency->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td> <form action="{{action('App\Http\Controllers\AgencyController@destroy', $agency->id)}}" method="post"onSubmit="return confirm('Are you sure to delete?')">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection
</body>