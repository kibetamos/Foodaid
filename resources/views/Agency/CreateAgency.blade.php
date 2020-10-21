@extends('base')
@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Add a contact</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form action="{{url('/CreateAgency') }}" method="POST">
          @csrf
          <div class="form-group">    
              <label for="first_name">Agency Name:</label>
              <input type="text" class="form-control" name="agency_name"/>
          </div>

          <div class="form-group">
              <label for="last_name">Agency Mail:</label>
              <input type="text" class="form-control" name="agency_mail"/>
          </div>
          <div class="form-group">
              <label for="email">Agency Phone:</label>
              <input type="text" class="form-control" name="agency_phone"/>
          </div>
          <div class="form-group">
              <label for="city">Agency Location:</label>
              <input type="text" class="form-control" name="agency_location"/>
          </div>                         
          <button type="submit" class="btn btn-primary-outline">Add Agency</button>
      </form>
  </div>
</div>
</div>
@endsection