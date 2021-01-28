@extends('base')
@section('main')
    <section class="content">
      <div class="row">

        <div class="col-md-12">
          <div class="box box-info">
            <div class="box-header">
              <h3 class="box-title">Donation made</h3>

           
            </div>
            <div class="box-body table-responsive" id="table_wrapper">
                  <table id="report-table" class="table table-bordered table-striped table-sm">
               <thead>
                 <tr class="box-success">  
                  <th>Donor</th>
                   <th>Type of food</th>
                    <th>Date donated</th>
                    <th>Agency assigned</th>
                    <th>Status</th>
         
                 
                     
                                     
                </tr>
              </thead>
               <tbody>
                  @if(!empty($data))
                   @foreach ($data as $user)
                      <tr>
                       
                         <td>{{$user->name}}</td>
                         <td>{{$user->product_id}}</td>
                         <td>{{$user->amount_owed}}</td>
                         <td>{{$user->amount_paid}}</td>
                         <td>@if($user->status == 'Active') <span class="label label-danger">Active</span>
                          @else<span class="label label-success">Closed</span> @endif</td>
                 
                   
                 
                      </tr>
                  @endforeach
                  @endif
              </tbody>
              </table>
             
             
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
   
    </section>
   <script type="text/javascript">
 
     $(document).ready(function() {
var table = $('#report-table').DataTable(
    {
    paging     : true,
    lengthChange: true,
    searching   : true,
    ordering   : true,
    info       : true,
    autoWidth   : true,
    buttons: [
       'excel'
    ]
    });

    table.buttons().container()
        .appendTo( '#table_wrapper .col-sm-6:eq(0)' );

} );
</script>
@endsection