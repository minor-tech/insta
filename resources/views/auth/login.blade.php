<x-guest-layout>
    <div class="container-fluid">
        <div class="row">
            <!-- Left Section (Instagram image) -->
            <div class="col-md-6 d-none d-md-block">
                <img src="https://via.placeholder.com/350x650?text=Instagram+App" alt="Instagram App" class="img-fluid">
            </div>

            <!-- Right Section (Login Form) -->
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <div class="card" style="width: 100%; max-width: 400px;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Instagram</h5>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Address -->
                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                    :value="old('email')" required autofocus autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />
                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                    required autocomplete="current-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Remember Me -->
                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox" class="rounded" name="remember">
                                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                @if (Route::has('password.request'))
                                    <a href="{{ route('password.request') }}"
                                        class="underline text-sm text-gray-600">{{ __('Forgot your password?') }}</a>
                                @endif

                                <x-primary-button class="ms-3">{{ __('Log in') }}</x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
