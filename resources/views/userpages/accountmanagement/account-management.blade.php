@extends('userpages.sidebar')

@section('content')
    <div class="container">
        <h1>Account Management</h1>
        <div class="row">
            <a href="{{ route('create.account') }}" class="btn btn-success">Create Account</a>
        </div><br>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Last name</th>
                        <th scope="col">First name</th>
                        <th scope="col">Middle name</th>
                        <th scope="col">Handle Barangay</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($users as $user)
                    <tr>
                        <th>{{ $user->user_id }}</th>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->middle_name }}</td>
                        <td>Wala pa</td>   
                        <td><a href="{{ route('view.account', $user->user_id) }}" class="btn btn-success">SHOW</a></td>   
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection