@extends('layouts.home')

@section('content')
    <!-- Main Feed Section -->
    <div class="feed-section">
        <!-- Example Post -->
        <div class="card mb-4">
            <!-- Post Header -->
            <div class="card-header d-flex align-items-center justify-content-between bg-white border-0">
                <div class="d-flex align-items-center">
                    <img src="https://via.placeholder.com/40" alt="User Avatar" class="rounded-circle me-2">
                    <strong>username123</strong>
                </div>
                <i class="bi bi-three-dots"></i>
            </div>

            <!-- Post Image -->
            <img src="https://via.placeholder.com/600x400" alt="Post Image" class="card-img-top">

            <!-- Post Actions and Caption -->
            <div class="card-body">
                <div class="d-flex justify-content-between mb-2">
                    <div>
                        <i class="bi bi-heart fs-4 me-3"></i>
                        <i class="bi bi-chat fs-4 me-3"></i>
                        <i class="bi bi-send fs-4"></i>
                    </div>
                    <i class="bi bi-bookmark fs-4"></i>
                </div>
                <p><strong>5,432 likes</strong></p>
                <p><strong>username123</strong> This is an example caption. #hashtag</p>
                <a href="#" class="text-muted">View all 120 comments</a>
                <form class="mt-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Add a comment...">
                        <button class="btn btn-link text-primary" type="submit">Post</button>
                    </div>
                </form>
            </div>
        </div>
        <!-- Additional posts... -->
    </div>
@endsection
