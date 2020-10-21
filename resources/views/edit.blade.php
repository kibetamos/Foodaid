@extends('base') 
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update a agency</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form action="{{action('App\Http\Controllers\AgencyController@update', $agency->id)}}" method="POST">

            @method('post') 
            @csrf
            <div class="form-group">
                <input type="hidden" value="{{$agency->agency_id}}" name="id"/>
                <label for="first_name">Agency Name:</label>
                <input type="text" class="form-control" name="first_name" value={{ $agency->agency_name }} />
            </div>
            <div class="form-group">
                <label for="last_name">Agency Mail:</label>
                <input type="text" class="form-control" name="last_name" value={{ $agency->agency_mail }} />
            </div>
            <div class="form-group">
                <label for="email">Agency Phone:</label>
                <input type="text" class="form-control" name="email" value={{ $agency->agency_phone}} />
            </div>
            <div class="form-group">
                <label for="city">Agency Location:</label>
                <input type="text" class="form-control" name="city" value={{ $agency->agency_location }} />
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection