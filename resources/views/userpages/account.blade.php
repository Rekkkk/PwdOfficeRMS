@extends('userpages.sidebar')

@section('content')
    <div class="container">
        <h1>Account Management</h1>
        <div class="row">
            <input type="button" value="Create Account" class="btn btn-success" id="create-account">
           
        </div><br>
        <div class="row">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Last</th>
                    <th scope="col">Handle</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Mark</td>
                    <td>Otto</td>
                    <td>@mdo</td>
                    <td>Otto</td>   
                 
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                    <td>Otto</td>
                  </tr>
                  <tr>
                    <th scope="row">3</th>
                    <td>Larry</td>
                    <td>the Bird</td>
                    <td>@twitter</td>
                    <td>Otto</td>
                  </tr>
                </tbody>
              </table>
        </div>

    </div>
    <form>
        <div class="form-row">
            <div class="col">
                <label>First name :</label>
                <input type="text" class="form-control" id="email" placeholder="Enter first name">
            </div>
            <div class="col">
                <label>Middle Name :</label>
                <input type="text" class="form-control" placeholder="Enter middle name">
            </div>
            <div class="col">
                <label>Last Name :</label>
                <input type="text" class="form-control" placeholder="Enter last name">
            </div>
            <div class="col">
                <label>Affiliation(Optional) :</label>
                <input type="text" class="form-control" placeholder="Enter affiliation">
            </div>
        </div>
        <div class="form-row">
            <div class="col">
                <label>Date of Birth :</label>
                <input type="date" class="form-control" placeholder="Enter affliation">
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
                    <select name="civil status" class="custom-select mb-3">
                        <option selected>Please select a civil status</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Widowed">Widowed</option>
                    </select>
            </div>
            <div class="col">
                <label>Address :</label>
                <input type="text" class="form-control" placeholder="Enter affiliation">
            </div>
        </div>
        <div class="form-row">
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
        </div>
        <div class="row">
            <div class="col">
                <button type="button" class="btn btn-primary">Submit</button>
            </div>
        </div>
      </form>
@endsection