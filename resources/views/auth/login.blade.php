@extends('layouts.guest')

@section('auth.login')
    <h3 class="text-center mb-4">{{ __('Log In') }}</h3>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Email -->
        <div class="mb-3">
            <label for="email" class="form-label">{{ __('Email') }}</label>
            <input type="email" id="email" name="email" class="form-control" placeholder="Email" required>
            @error('email')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <!-- Password -->
        <div class="mb-3">
            <label for="password" class="form-label">{{ __('Password') }}</label>
            <input type="password" id="password" name="password" class="form-control" placeholder="Password" required>
            @error('password')
                <div class="text-danger small">{{ $message }}</div>
            @enderror
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-primary w-100 py-2">{{ __('Log In') }}</button>

        <!-- Forgot Password Link -->
        <div class="text-center mt-3">
            <a href="{{ route('password.request') }}"
                class="text-decoration-none text-primary">{{ __('Forgot your password?') }}</a>
        </div>

        <!-- Register Link -->
        <div class="text-center mt-3">
            <p class="mb-0">{{ __("Don't have an account?") }} <a href="{{ route('register') }}"
                    class="text-decoration-none text-primary">{{ __('Sign up') }}</a></p>
        </div>
    </form>
@endsection
