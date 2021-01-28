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
    <h1 class="display-3">Vulnerable Families </h1>    
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Vulnerable Name</td>
          <td>Vulnerable Phone</td>
          <td>Vulnerable Location</td>
          <td>Vulnerable Income</td>
          <td>Vulnerable Family</td>
          <td>Vulnerable Status</td>
          
          
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    @foreach ($vulnerables as $vulnerable)
            
            <tr>
                <td>{{ $vulnerable->id }}</td>

                <td>{{ $vulnerable->vulnerable_name }}</td>
                <td>{{ $vulnerable->vulnerable_phone }}</td>
                <td>{{ $vulnerable->vulnerable_location }}</td>
                <td>{{$vulnerable->vulnerable_income }}</td>
                <td>{{ $vulnerable->vulnerable_family }}</td>
                <td>{{ $vulnerable->vulnerable_status }}</td>

               <td><a href="{{action('App\Http\Controllers\VulnerableController@edit', $vulnerable->id)}}" class="btn btn-primary">Edit</a></td>

          <td> <form action="{{action('App\Http\Controllers\VulnerableController@destroy', $vulnerable->id)}}" method="post"onSubmit="return confirm('Are you sure to delete?')">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="DELETE">
                    <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach          
        </tbody>
    </table>
    @if(!empty(Session::get('success')))
        <div class="alert alert-success"> {{ Session::get('success') }}</div>
    @endif
    @if(!empty(Session::get('error')))
        <div class="alert alert-danger"> {{ Session::get('error') }}</div>
    @endif
</div>

@endsection
</body>