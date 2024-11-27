@extends('layouts.login')

@section('title', 'Login')

@section('content')
    <div class="text-center mb-4">
        <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram Logo"
            style="width: 80px;">
    </div>
    <h2 class="text-center mb-4 fw-bold">Log In</h2>

    <!-- Login Form -->
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Enter your email"
                required>
            @error('email')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Enter your password"
                required>
            @error('password')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary w-100 py-2">Log In</button>

        <!-- Forgot Password Link -->
        <div class="text-center mt-3">
            <a href="{{ route('password.request') }}" class="text-decoration-none text-primary">Forgot your password?</a>
        </div>

        <!-- Register Link -->
        <div class="text-center mt-3">
            <p class="mb-0">Don't have an account?
                <a href="{{ route('register') }}" class="text-decoration-none text-primary">Sign up</a>
            </p>
        </div>
    </form>
@endsection
