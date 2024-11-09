@extends('blade.home')

<x-app-layout>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <!-- Left Section (Instagram image) -->
            <div class="col-md-6 d-none d-md-block">
                <img src="https://via.placeholder.com/350x650?text=Instagram+App" alt="Instagram App" class="img-fluid">
            </div>

            <!-- Right Section (Welcome Message) -->
            <div class="col-md-6 d-flex justify-content-center align-items-center">
                <div class="card" style="width: 100%; max-width: 400px;">
                    <div class="card-body text-center">
                        <h1>Welcome to Instagram</h1>

                        @auth
                            <p>You are logged in as {{ auth()->user()->name }}!</p>
                        @else
                            <p>Please <a href="{{ route('login') }}">login</a> or <a
                                    href="{{ route('register') }}">register</a> to continue.</p>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
