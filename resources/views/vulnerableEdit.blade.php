<!-- resources/views/dashboard/reservationEdit.blade.php -->
@extends('index')
@section('title', 'vulnerable')
@section('content')
<style type="text/css">
  /* Style inputs, select elements and textareas */
input[type=text], select, textarea{
  width: 70%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  resize: vertical;
}

/* Style the label to display next to the inputs */
label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

/* Style the submit button */
input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

/* Style the container */
.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

/* Floating column for labels: 25% width */
.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

/* Floating column for inputs: 75% width */
.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}  
</style>
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Edit vulnerable</h1>

     
           @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{action('App\Http\Controllers\VulnerableController@update', $vulnerable->id)}}" method="POST">

            @method('post') 
            @csrf
       
        <div class="col-sm-8">
     <div class="form-group">
        
        <div class="form-group">
            <input type="hidden" value="{{$vulnerable->donor_id}}" name="id" />
            <label for="title">Vulnerable Name:</label>
            <input type="text" class="form-control" name="vulnerable_name" value={{$vulnerable->vulnerable_name}} />
        </div>
    </div>
</div>
  
          
 <div class="col-sm-8">
                        <div class="form-group">
        <div class="form-group">
            <div>
            <label for="staff">Vulnerable Phone :</label>
             <input type="text" class="form-control" name="vulnerable_phone"value={{$vulnerable->vulnerable_phone}}>
        </div>
    </div>
</div>
</div>
 <div class="col-sm-8">
                        <div class="form-group">
            <div class="form-group">
                <label for="start">Vulnerable Location</label>
                <input type="text" class="form-control" name="vulnerable_location"required value={{$vulnerable->vulnerable_location}}>
            </div>
            </div>
            <div class="form-group">
                <label for="end">Vulnerable Income:</label>
                <input type="text" class="form-control" name="vulnerable_income"required value={{$vulnerable->vulnerable_income}}>
            </div>

</div>
 <div class="col-sm-8">
       <div class="form-group">
            <div class="form-group">
                <label for="end">Vulnerable Family:</label>
                <input type="text" class="form-control" name="vulnerable_family"value={{$vulnerable->vulnerable_family}}>
            </div>
        </div>
    </div>
    <div class="col-sm-8">
       
            <div class="form-group">
                <label for="end">Vulnerable Status:</label>
                <input type="text" class="form-control" name="vulnerable_status"value={{$vulnerable->vulnerable_status}}>
            </div>
       
    </div>

    <div class="col-sm-8">
                        <div class="form-group"> 
        <button type="submit" class="btn btn-primary">Update</button
    </div>
</div>
        </form>
    </div>
</div>
@endsection
         
       
