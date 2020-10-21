@extends('base')
@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">agency</h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Agency Name</td>
          <td>Agency Email</td>
          <td>Agency Phone</td>
          <td>Agency Location</td>
          
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($data as $data)
        <tr>
            <td>{{$agency->id}}</td>
            <td>{{$agency->agency_name}}</td>
            <td>{{$agency->agency_mail}}</td>
            <td>{{$agency->agency_phone}}</td>
            <td>{{$agency->agency_location}}</td>
            
            <td>
                <a href="{{ action('App\Http\Controllers\AgencyController@edit',$agency->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ action('App\Http\Controllers\AgencyController@destroy', $agency->id)}}" method="post"onSubmit="return confirm('Are you sure to delete?')">
                  {{csrf_field()}}
                 
                  <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection