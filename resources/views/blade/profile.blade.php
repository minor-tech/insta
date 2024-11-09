@extends('layouts.app')

@section('title', "{$user->username} - Profile")

@auth
    @section('content')
        <div class="container mt-5">
            <!-- Profile Header -->
            <div class="d-flex align-items-center mb-4">
                <!-- Profile Picture -->
                <img src="{{ $user->profile_picture }}" alt="User Avatar" class="rounded-circle me-3"
                    style="width: 150px; height: 150px;">
                <!-- User Info -->
                <div>
                    <h2>{{ $user->username }}</h2>
                    <p class="text-muted">{{ $user->full_name }}</p>
                    <p>{{ $user->bio }}</p>
                </div>
            </div>

            <!-- User Posts -->
            <div class="row g-3">
                @foreach ($posts as $post)
                    <div class="col-4">
                        <img src="{{ $post->image_url }}" alt="Post Image" class="img-fluid rounded">
                    </div>
                @endforeach
            </div>
        </div>
    @endsection

@endauth
