@php
    $logoImgUrl = getSettingImage('backend_logo');
@endphp
@extends('layouts/blankLayout')

@section('title', 'Reset Password Basic - Pages')

@section('page-style')
    @vite(['resources/assets/vendor/scss/pages/page-auth.scss'])
@endsection

@section('content')
    <div class="container-xxl">
        <div class="authentication-wrapper authentication-basic container-p-y">
            <div class="authentication-inner">

                <!-- Forgot Password -->
                <div class="card px-sm-6 px-0">
                    <div class="card-body">
                        <!-- Logo -->
                        <div class="app-brand justify-content-center mb-6">
                            <a href="{{ url('/') }}" class="app-brand-link gap-2">
                                @if ($logoImgUrl)
                                    <img src="{{ $logoImgUrl }}" class="w-100" alt="{{ config('website_name') }}" style="max-height: 100px;">
                                @else
                                    <span
                                        class="app-brand-text demo menu-text fw-bold ms-2">{{ config('website_name') }}</span>
                                @endif
                            </a>

                        </div>
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif
                        <!-- /Logo -->
                        <h4 class="mb-1">Reset Password</h4>
                        <p class="mb-6">Reset your password below</p>
                        <form id="formAuthentication" method="POST" class="browser-default-validation"
                            action="{{ route('password.update') }}">
                            @csrf
                            <div class="mb-6">
                                <label for="email" class="form-label">Email</label>
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="Enter your email" value="{{ $email ?? '' }}" autofocus required>
                                <input type="hidden" name="token" value="{{ $token ?? '' }}">
                            </div>
                            <div class="mb-6 form-password-toggle">
                                <label for="basic-default-password3" class="form-label">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" autocomplete="new-password" class="form-control" id="password"
                                        name="password" placeholder="Enter your password"
                                        aria-describedby="basic-default-password3" autofocus required><span
                                        class="input-group-text cursor-pointer" id="basic-default-password3"><i
                                            class="bx bx-show"></i></span>
                                </div>

                            </div>
                            <div class="mb-6 form-password-toggle">
                                <label for="basic-default-password4" class="form-label">Confirm Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" class="form-control" id="password_confirmation"
                                        name="password_confirmation" aria-describedby="basic-default-password4"
                                        placeholder="Enter your password" autofocus required><span
                                        class="input-group-text cursor-pointer" id="basic-default-password4"><i
                                            class="bx bx-show"></i></span>
                                </div>
                            </div>
                            <button class="btn btn-primary d-grid w-100">Send Reset Link</button>
                        </form>
                        <div class="text-center">
                            <a href="{{ route('admin.login') }}" class="d-flex justify-content-center">
                                <i class="bx bx-chevron-left scaleX-n1-rtl me-1"></i>
                                Back to login
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Forgot Password -->
            </div>
        </div>
    </div>
@endsection
