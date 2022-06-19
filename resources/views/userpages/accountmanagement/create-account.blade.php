@extends('userpages.sidebar')

@section('content')
<form action="{{ route('create') }}" method="GET">
    <h1>Create Account</h1>
    <div class="form-row">
        <div class="col">
            <label>First name :</label>
            <input type="text" name="firstname" class="form-control" id="email" placeholder="Enter first name">
        </div>
        <div class="col">
            <label>Middle Name :</label>
            <input type="text" name="middlename" class="form-control" placeholder="Enter middle name">
        </div>
        <div class="col">
            <label>Last Name :</label>
            <input type="text" name="lastname" class="form-control" placeholder="Enter last name">
        </div>
        {{-- <div class="col">
            <label>Affiliation(Optional) :</label>
            <input type="text" class="form-control" placeholder="Enter affiliation">
        </div> --}}
    </div>
    <div class="form-row">
        <div class="col">
            <label>Date of Birth :</label>
            <input type="date" class="form-control" name="birthday" placeholder="Enter affliation">
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
        {{-- <div class="col">
                <label>Civil Status:</label>
                <select name="civil status" class="custom-select mb-3">
                    <option selected>Please select a civil status</option>
                    <option value="Single">Single</option>
                    <option value="Married">Married</option>
                    <option value="Widowed">Widowed</option>
                </select>
        </div> --}}
        {{-- <div class="col">
            <label>Address :</label>
            <input type="text" class="form-control" placeholder="Enter affiliation">
        </div> --}}
    </div>
    {{-- <div class="form-row">
        <div class="col">
            <label>Email Address :</label>
            <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Enter email aadress">
            <div class="input-group-append">
                <span class="input-group-text">@example.com</span>
            </div>
            </div>
        </div>
        <div class="col">
            <label>Phone Number :</label>
            <input type="text" class="form-control" placeholder="Enter cellphone number">
        </div>    
    </div> --}}
    <div class="row">
        <div class="col">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
  </form>
@endsection