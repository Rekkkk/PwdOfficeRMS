@extends('userpages.sidebar')

@section('content')
    <div class="container">
        <h1>Welcome to Dashboard</h1>
        <h1>{{ $data->email }}</h1>
        <h1>{{ $data->password }}</h1>
        <a href="{{ route('logout') }}">LogOut</a>
    </div>
@endsection