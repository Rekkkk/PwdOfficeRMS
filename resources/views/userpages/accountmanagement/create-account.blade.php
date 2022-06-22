@extends('userpages.sidebar')

@section('content')
    <style>
        #select-barangay-div{
            display: none;
        }
    </style>
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <div class="container">
        <form action="{{ route('create') }}" method="POST">
            @csrf
        <h1>Create Account</h1>
        <div class="row">
            <div class="col">
                <label>Last Name :</label>
                <input type="text" name="last_name" class="form-control" placeholder="Enter last name">
            </div>
            <div class="col">
                <label>First name :</label>
                <input type="text" name="first_name" class="form-control" id="email" placeholder="Enter first name">
            </div>
            <div class="col">
                <label>Middle Name :</label>
                <input type="text" name="middle_name" class="form-control" placeholder="Enter middle name">
            </div>
            <div class="col">
                <label>Affiliation (Optional) :</label>
                <input type="text" name="affiliation" class="form-control" placeholder="Enter Affiliation">
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label>Date of Birth :</label>
                <input type="date" class="form-control" name="birthday">
            </div>
            <div class="col">
                <label>Sex / Gender :</label>
                <select name="gender" class="custom-select mb-3">
                <option selected>Please select a gender</option>
                <option value="Male">Male</option>  
                <option value="Female">Female</option>
                <option value="Others">Other</option>
                </select>
            </div>
            <div class="col">
                <label>Civil Status:</label>
                <select name="civil_status" class="custom-select mb-3">
                    <option selected>Please select a civil status</option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Widowed">Widowed</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <label>Address :</label>
                <input type="text" class="form-control" placeholder="Enter Address" name="address">
            </div>
            <div class="col">
                <label>Phone Number :</label>
                <input type="text" class="form-control" placeholder="Enter cellphone number" name="phone_number" minlength="11" maxlength="11">
            </div>    
            </div><br>
            <div class="row">
                <div class="col">
                    <label>Email :</label>
                    <input type="email" class="form-control" placeholder="Enter Address" name="email">
                </div>
                <div class="col">
                    <label>Password :</label>
                    <input type="password" class="form-control" placeholder="Enter Address" name="password">
                </div>
            </div><br>
            <div class="row">
                <div class="col">
                    <input type="button" value=" Next "data-toggle="modal" data-target="#myModal" class="btn btn-primary">
                </div>
            </div><br>
            <div class="modal" id="myModal" >
                <div class="modal-dialog ">
                    <div class="modal-content" >
                        <div class="modal-header">
                            <h4 class="modal-title">Assign Barangay</h4>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>
                        <div class="modal-body">
                        <select  name="barangay" class="custom-select mb-3">
                            <option selected>Select Barangay</option>
                            @foreach($barangays as $barangay)
                                <option value="{{ $barangay->barangay_id }}">{{ $barangay->barangay_name }}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-success">Create Account</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection