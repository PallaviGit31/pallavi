

@extends('layout')
 
<title>Login | {{ config('app.name') }}</title>
 
@section('content')


    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card-group">
                <div class="card p-4">
                    <div class="card-body">
                        <form method="post" action="{{ url('/login') }}">
                            @csrf
                            <h1>Login</h1>
                            <p class="text-muted">Sign In to your account</p>
                            <div class="input-group mb-3">
                               
                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                       name="email" value="{{ old('email') }}"
                                       placeholder="Email">
                                @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="input-group mb-4">
                                
                                <input type="password"
                                       class="form-control @error('password') is-invalid @enderror"
                                       placeholder="Password" name="password">
                                @error('password')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="row">
                                <div class="col-4">
                                    <button class="btn btn-primary px-4" type="submit">Login</button>
                                </div>
                                <!-- <div class="col-8 text-right">
                                    <a class="btn btn-link px-0" href="">
                                        Forgot password?
                                    </a>
                                </div> -->
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
                    <div class="card-body text-center">
                        <div>
                            <h2>Sign up</h2>
                            <p>Sign in to start your session</p>
                            <a class="btn btn-lg btn-outline-light mt-3" href="{{ route('register') }}">Register Now!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




