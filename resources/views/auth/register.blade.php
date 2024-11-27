@extends('layouts.register')

@section('title', 'Register')

@section('content')
    <div class="d-flex justify-content-center align-items-center vh-100">
        <div class="bg-white border rounded p-4 shadow" style="width: 100%; max-width: 400px;">
            <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram Logo"
                class="d-block mx-auto mb-3" style="width: 100px;">

            <h3 class="text-center mb-4">{{ __('Register') }}</h3>
            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-3">
                    <label for="name" class="form-label">{{ __('Name') }}</label>
                    <input type="text" id="name" name="name" class="form-control" placeholder="Name"
                        value="{{ old('name') }}" required autofocus>
                    @error('name')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('Email') }}</label>
                    <input type="email" id="email" name="email" class="form-control" placeholder="Email"
                        value="{{ old('email') }}" required>
                    @error('email')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Password -->
                <div class="mb-3">
                    <label for="password" class="form-label">{{ __('Password') }}</label>
                    <input type="password" id="password" name="password" class="form-control" placeholder="Password"
                        required>
                    @error('password')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Confirm Password -->
                <div class="mb-3">
                    <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="form-control"
                        placeholder="Confirm Password" required>
                    @error('password_confirmation')
                        <div class="text-danger small">{{ $message }}</div>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary w-100 py-2">{{ __('Register') }}</button>

                <!-- Login Link -->
                <div class="text-center mt-3">
                    <a href="{{ route('login') }}"
                        class="text-decoration-none text-muted">{{ __('Already registered?') }}</a>
                </div>
            </form>
        </div>
    </div>
@endsection
