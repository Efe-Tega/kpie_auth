@extends('auth.main')

@section('title')
    {{ __('Reset Password') }}
@endsection

@section('content')
    <div class="form-container">
        <h2>Forgot Password</h2>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('password.update') }}" method="POST">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <label for="">{{ __('Email') }}</label>
            <input type="email" id="" name="email" value="{{ old('email') }}" placeholder="Enter your email" />
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

            <button type="submit" class="btn">Reset Password</button>
        </form>
    </div>
@endsection
