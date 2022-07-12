@extends('userpages.sidebar')

@section('content')
<h1>Dashboard</h1>
    @can('account.management')
        <a href="{{ route('account.management') }}">ACCOUNTS </a>
    @endcan
@endsection