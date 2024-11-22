@extends('auth.main')

@section('title')
    {{ __('User Login') }}
@endsection

@section('content')
    <div class="form-container">
        <h2>User Login</h2>
        <form action="{{ route('user.login') }}" method="POST">
            @csrf

            <label for="login-email">{{ __('Email') }}</label>
            <input type="email" id="login-email" name="email" placeholder="Enter your email" required />
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <label for="login-password">{{ __('Password') }}</label>
            <input type="password" id="login-password" name="password" placeholder="Enter your password" required />
            @error('password')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            @if ($errors->has('login'))
                <span>{{ $errors->first('login') }}</span>
            @endif

            <p>Forgot Password? <a href="{{ route('password.request') }}">Click here</a></p>
            <br>

            <button type="submit" class="btn">Login</button>
            <p>Don't have an account? <a href="{{ route('signup') }}">Sign Up</a></p>
        </form>
    </div>
@endsection
