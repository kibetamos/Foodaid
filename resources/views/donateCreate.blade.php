@extends('index')
@section('title', 'make a donation')
@section('content')
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<style type="text/css">
  /* Style inputs, select elements and textareas */
input[type=text], select, textarea{
  width: 100%;
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
  width: 50%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;

}
body{
  background-color: skyblue;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}  
</style>
<body>
<section>  Fill your donations here </section>
<form action="{{url('donateCreate') }}" method="POST">
                @csrf
                <div class="row">

  <script src= 
"https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"> 
    </script> 
    <div class="row">
      <div class="col-25">
        <label for="fname">Donor Name</label>
      </div>
      <div class="col-75">
        <input type="text" id="donor_name" name="donor_name" placeholder="Your name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="donor_mail">Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="donor_mail" name="donor_mail" placeholder="Email..">
      </div>
    </div>
     <div class="row">
      <div class="col-25">
        <label for="lname">Phone no.</label>
      </div>
      <div class="col-75">
        <input type="text" id="donor_phone" name="donor_phone" placeholder="phone number..">
      </div>
    </div>
     <div class="row">
      <div class="col-25">
        <label for="lname">Location</label>
      </div>
      <div class="col-75">
        <input type="text" id="donor_location" name="donor_location" placeholder="Location..">
      </div>
    </div>
    
     <div class="row">
      <div class="col-25">
        <label for="lname">Food name</label>
      </div>
      <div class="col-75">
        <input type="text" id="food_name" name="food_name" placeholder="Food name..">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Food Amount</label>
      </div>
      <div class="col-75">
        <input type="text" id="food_amount" name="food_amount" placeholder="Food amount..">
      </div>
    </div>
     <div class="row">
      <div class="col-25">
        <label for="subject">Food description</label>
      </div>
      <div class="col-75">
        <textarea id="food_description" name="food_description" placeholder="Food Description.." style="height:100px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Donate">
    </div>
  </form>
</div>
@endsection
</body>
