@extends('auth.main')

@section('title')
    {{ __('User Registration') }}
@endsection

@section('content')
    <div class="form-container">
        <h2>Register</h2>
        <form action="{{ route('store.user') }}" method="POST">
            @csrf

            <label for="register-name">{{ __('Firstname') }}</label>
            <input type="text" id="register-name" name="firstname" value="{{ old('firstname') }}"
                placeholder="Enter your first name" />
            @error('firstname')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="register-lastname">{{ __('Lastname') }}</label>
            <input type="text" id="register-lastname" name="lastname" value="{{ old('lastname') }}"
                placeholder="Enter your last name" />
            @error('lastname')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="register-email">{{ __('Email') }}</label>
            <input type="email" id="register-email" name="email" value="{{ old('email') }}"
                placeholder="Enter your email" />
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="register-password">{{ __('Password') }}</label>
            <input type="password" id="register-password" name="password" placeholder="Enter your password" />
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="confirm-password">{{ __('Confirm Password') }}</label>
            <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm password" />

            <button type="submit" class="btn">Register</button>
            <p>Already have an account? <a href="{{ route('login') }}">Login</a></p>
        </form>
    </div>
@endsection
