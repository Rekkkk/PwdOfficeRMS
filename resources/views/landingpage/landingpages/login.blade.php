@extends('landingpage.navigation.navigation')

@section('content')
    <div class="container">
        <form action="{{ route('login.check') }}" method="POST" class="p-5"> 
            @csrf     
            <h1 class="mb-3 mt-5">Login</h1>
         <!-- Email input -->
            <div class="form-outline mb-4">
                @if($errors->any())
                    <div class="alert alert-danger" role="alert">
                        {{$errors->first()}}
                    </div>
                @endif
                <input type="email" id="form3Example3" class="form-control form-control-lg" name="email" placeholder="Enter a valid email address" value="{{ old('email') }}" required/>
                <label class="form-label" for="form3Example3">Email address</label>
            </div>
                <!-- Password input -->
            <div class="form-outline mb-3">
                <input type="password" id="form3Example4" class="form-control form-control-lg" name="password" placeholder="Enter password" required/>
                <label class="form-label" for="form3Example4">Password</label>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="d-flex justify-content-between align-items-center">
                <!-- Checkbox -->
                <div class="form-check mb-0">
                    <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                    <label class="form-check-label" for="form2Example3">Remember me</label>
                </div>
                <a href="#!" class="text-body">Forgot password?</a>
            </div>
            <div class="text-center text-lg-start mt-4 pt-2">
                <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
            </div>
        </form>
    </div>
@endsection