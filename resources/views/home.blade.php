@extends('layouts.app')
@extends('layouts.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    You don't seem to be an admin!
                </div>
            </div>
        </div>
    </div>
</div>
<a href="donation" class="w3-btn w3-black">Check Donations</a>
@endsection