@extends('userpages.sidebar')

@section('content')
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <div class="container">
        <form action="{{ route('create') }}" method="GET">
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
            <div class="col">
                <label>Assign Barangay :</label>
                <select  class="custom-select mb-3">
                    <option selected>Select Barangay</option>
                    @foreach($barangays as $barangay)
                        <option value="{{ $barangay->barangay_name }}">{{ $barangay->barangay_name }}</option>
                    @endforeach
                </select>
            </div>   
        </div><br><br>
        <div class="row">
            <div class="col">
                <button type="submit" class="btn btn-primary">Create Account</button>
            </div>
        </div>
        </form>
    </div>

@endsection