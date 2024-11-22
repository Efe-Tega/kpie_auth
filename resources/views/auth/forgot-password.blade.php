@extends('auth.main')

@section('title')
    {{ __('Forgot Password') }}
@endsection

@section('content')
    <div class="form-container">
        <h2>Forgot Password</h2>
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form action="{{ route('password.email') }}" method="POST">
            @csrf

            <label for="">{{ __('Email') }}</label>
            <input type="email" id="" name="email" value="{{ old('email') }}" placeholder="Enter your email" />
            @error('email')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit" class="btn">Send Reset Link</button>
        </form>
    </div>
@endsection
