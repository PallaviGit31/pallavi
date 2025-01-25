
@extends('layout')
 
<title>Register {{ config('app.name') }}</title>
 
@section('content')
 
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card mx-4">
                <div class="card-body p-4">
                    <form method="post" action="{{ url('/create') }}" id="registrationForm">
                        @csrf
                        <h1>Register</h1>
                        <p class="text-muted">Create your account</p>
                        <div class="input-group mb-3">
                         
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                   name="name" value="{{ old('name') }}"
                                   placeholder="Full Name">
                            @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                   
                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                   name="email" value="{{ old('email') }}" placeholder="Email">
                            @error('email')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-group mb-3">
                     
                            <input type="password" class="form-control @error('password') is-invalid @enderror"
                                   name="password" placeholder="Password">
                            @error('password')
                            <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="input-group mb-4">
                       
                            <input type="password" name="password_confirmation" class="form-control"
                                   placeholder="Confirm password">
                        </div>
                        <div class="input-group mb-4">
                            
                            <input type="date" name="dob" class="form-control"  placeholder="Confirm password">
                        </div>
                        <div class="input-group mb-4">
                            <input type="radio" name="gender" value="Male"  >Male
                            <input type="radio" name="gender" value="Female"  >Female
                        </div>
                        <div class="input-group mb-4">
                            <select name="country" id="country" class="form-control"  >
                                <option>select country</option>
                                @foreach ($countries as $country)
                                    <option value="{{ $country->id }}">{{ $country->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="input-group mb-4">
                            <select name="state" id="state"class="form-control"  >
                                <option>select state</option>
                            </select>
                        </div>
                        <div class="input-group mb-4">
                            <select name="city" id="city" class="form-control"  >
                                <option>select city</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                        <a href="{{ route('login') }}" class="text-center">I already have a membership</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

