@extends('layouts.master')
@extends('layouts.navbar')

<!DOCTYPE html>
<html lang="en">
<title>Food Donation</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: "Lato", sans-serif}
.mySlides {display: none}
</style>
<body>

<!-- Navbar 

<button>VIEW DOnation..</button>
<div></div>
<button></button>

-->

@extends('layouts.app')
@section('content')
<div class="container" align="center">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    Hey! you are admin.
                </div>

<a href="show" class="w3-button w3-black">Check Agency</a>

<a href="donation" class="w3-button w3-black">Check Donations</a>


<a href="" class="w3-btn w3-black">Check Donors</a>

<a href="vulnerable" class="w3-btn w3-black">Check Vulnerables</a>
                <div> 

                    
                    <div>
                        <a href="" class="w3-btn w3-black">Check Donors</a>
                        <div>
                            
                        </div>
                    </div>
                    <button>Check Donations</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

</body>
</html>