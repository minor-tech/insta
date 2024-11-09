<x-guest-layout>
    <div class="container-fluid">
        <div class="row">
            <!-- Left Section (Instagram image) -->
            <div class="col-md-6 d-none d-md-block">
                <img src="https://via.placeholder.com/350x650?text=Instagram+App" alt="Instagram App" class="img-fluid">
            </div>

            <!-- Right Section (Register Form) -->
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <div class="card" style="width: 100%; max-width: 400px;">
                    <div class="card-body">
                        <h5 class="card-title text-center">Instagram</h5>
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <!-- Name -->
                            <div>
                                <x-input-label for="name" :value="__('Name')" />
                                <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                    :value="old('name')" required autofocus />
                                <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            </div>

                            <!-- Email Address -->
                            <div class="mt-4">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                    :value="old('email')" required autocomplete="username" />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="mt-4">
                                <x-input-label for="password" :value="__('Password')" />
                                <x-text-input id="password" class="block mt-1 w-full" type="password" name="password"
                                    required autocomplete="new-password" />
                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Confirm Password -->
                            <div class="mt-4">
                                <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                                <x-text-input id="password_confirmation" class="block mt-1 w-full" type="password"
                                    name="password_confirmation" required />
                                <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <a href="{{ route('login') }}"
                                    class="underline text-sm text-gray-600">{{ __('Already registered?') }}</a>
                                <x-primary-button class="ms-4">{{ __('Register') }}</x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>
