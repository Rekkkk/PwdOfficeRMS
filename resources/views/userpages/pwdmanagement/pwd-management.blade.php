@extends('userpages.sidebar')

@section('content')
    <div class="container">
        <h1>PWD Management</h1>

        <input class="form-control" id="myInput" type="text" placeholder="Search" style="width: 20%; margin-left: 80%"><br>
        <input type="button" class="btn btn-success" value="Add new PWD" data-toggle="modal" data-target="#add-pwd-type"><br><br>
 
        <table class="table table-hover" >
            <thead>
                <tr>
                    <th>PWD No.</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Middle Name</th>
                </tr>
            </thead>
            <tbody id="myTable" style="cursor: pointer">
            @foreach($pwd as $pwds)       
                <tr>
                    <td>{{$pwds->pwd_id}}</td>
                    <td>{{$pwds->first_name}}</td>
                    <td>{{$pwds->last_name}}</td>
                    <td>{{$pwds->middle_name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    <div class="modal fade" id="add-pwd-type">
        <div class="modal-dialog" style="margin-top: 20%">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Select transaction type</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
            

                <div class="modal-body">
                    <div style="text-align: center">
                        <button class="btn btn-success">Walk in</button>
                        <button class="btn btn-info">Appointment</button>
                    </div>
                  
                                
                </div>
                    
                <div class="modal-footer">
                        
                </div>
            </div>
        </div>
    </div>






<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>




@endsection