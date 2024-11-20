@extends('layouts.home')

@section('title', $user->username . ' • Insta')

@section('content')
    <div class="profile-container">
        <div class="profile-header d-flex align-items-center">
            <img src="{{ $user->profile_picture_url ?? asset('default-profile.png') }}" alt="{{ $user->username }}"
                class="profile-pic rounded-circle">
            <div class="profile-info ms-4">
                <h1 class="profile-username">{{ $user->username ?? 'Unknown' }}</h1>
                <div class="profile-stats d-flex gap-3">
                    <span><strong>{{ $user->posts->count() ?? 0 }}</strong> posts</span>
                    <span><strong>{{ $user->followers->count() ?? 0 }}</strong> followers</span>
                    <span><strong>{{ $user->following->count() ?? 0 }}</strong> following</span>
                </div>
                @if (auth()->id() === $user->id)
                    <a href="{{ route('profile.edit') }}" class="btn btn-outline-primary mt-2">Edit Profile</a>
                @endif
            </div>
        </div>
        <div class="profile-posts mt-4 row">
            @foreach ($posts as $post)
                <div class="col-md-4 mb-3">
                    <img src="{{ $post->image_url ?? asset('placeholder-image.jpg') }}" alt="{{ $post->caption ?? '' }}"
                        class="img-fluid">
                </div>
            @endforeach
        </div>
    </div>
@endsection
