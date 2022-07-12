@extends('userpages.sidebar')

@section('content')
    {{-- <div id='app'>
        <account-management-component :accounts = "{{ $users }}"/>
    </div> --}}
    <div class="container">
        <h1>Account Management</h1>
        <a href="{{ route('create.account') }}" class="btn btn-success">Add User</a><br><br>
        <div class="row">
            <table class="table table-hover"  style="text-align: center;">
                <thead>
                    <tr>
                        <th scope="col">Account ID</th>
                        <th scope="col">Last name</th>
                        <th scope="col">First name</th>
                        <th scope="col">Middle name</th>
                        <th scope="col">Handle Barangay</th>
                    </tr>
                </thead>
                <tbody style="cursor: pointer">
                @foreach($users as $user)       
                    <tr style="height : 50px" onclick="window.location='{{ route('view.account', $user->user_id) }}';">       
                        <td>{{ $user->user_id }}</td>
                        <td>{{ $user->last_name }}</td>
                        <td>{{ $user->first_name }}</td>
                        <td>{{ $user->middle_name }}</td>
                        <td>Mag ququery pa hahahha</td>                                                       
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection