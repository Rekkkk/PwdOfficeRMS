@extends('userpages.sidebar')

@section('content')
    <div class="container">
        <h1>Account Management</h1>
        <div class="row">
            <form action="{{ route('create.account') }}">
                <input type="submit" value="Create Account" class="btn btn-success" id="create-account">
            </form>
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
  
@endsection