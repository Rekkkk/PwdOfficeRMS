@extends('userpages.sidebar')

@section('content')
<h1>Appointment Management</h1>

<input class="form-control" id="myInput" type="text" placeholder="Search" style="width: 20%; margin-left: 80%"><br>
        <h4>Appointments Today</h4>
        <a href="" style="margin-left: 80%">View all Appointments</a><br><br>
        <table class="table table-hover" >
            <thead>
                <tr>
                    <th>Reference No.</th>
                    <th>Transaction</th>
               
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                </tr>
            </thead>
            <tbody id="myTable" style="cursor: pointer">
                <tr>
                    <td>Example</td>
                    <td>Example</td>
                    <td>Example</td>
                    <td>Example</td>
                    <td>Example</td>
                </tr>
            </tbody>
        </table>
@endsection