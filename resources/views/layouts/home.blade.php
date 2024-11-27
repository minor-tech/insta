@extends('layouts.app', ['page_title' => 'My Feed'])
@section('content')
    <div class="col-lg-1"></div>

    <main class="col-md-5 col-lg-5">

        <!-- followed people -->
        <div class="container mt-4">
            <!-- Followed People Section -->
            <div class="followed-people mb-4">
                <h6 class="text-muted">Followed People</h6>
                <!-- Loop through followed people -->
                <div class="d-flex flex-row gap-3">
                    <div class="d-flex align-items-center">
                        <img src="https://via.placeholder.com/40" alt="User Avatar" class="rounded-circle me-2" width="40">
                        <strong>user1</strong>
                    </div>
                    <div class="d-flex align-items-center">
                        <img src="https://via.placeholder.com/40" alt="User Avatar" class="rounded-circle me-2"
                            width="40">
                        <strong>user2</strong>
                    </div>
                    <!-- More users added through looping -->
                </div>
            </div>

            <!-- Suggestions for You Section -->
            <div class="suggestions-for-you mb-4">
                <h6 class="text-muted">Suggestions for You</h6>
                <div class="d-flex flex-row gap-3">
                    <!-- Suggested User 1 -->
                    <div class="card text-center p-3" style="width: 100%; max-width: 12rem;">
                        <img src="https://via.placeholder.com/60" alt="User Avatar" class="rounded-circle mx-auto mb-2"
                            width="60" height="60">
                        <a href="#" class="text-dark fw-bold text-decoration-none">user1</a>
                        <p class="text-muted mb-2" style="font-size: 12px;">Followed by 5 users</p>
                        <div class="card-footer p-1">
                            <a href="#" class="btn btn-primary btn-sm w-100">Follow</a>
                        </div>
                    </div>
                    <!-- Suggested User 2 -->
                    <div class="card text-center p-3" style="width: 100%; max-width: 12rem;">
                        <img src="https://via.placeholder.com/60" alt="User Avatar" class="rounded-circle mx-auto mb-2"
                            width="60" height="60">
                        <a href="#" class="text-dark fw-bold text-decoration-none">user2</a>
                        <p class="text-muted mb-2" style="font-size: 12px;">Followed by 10 users</p>
                        <div class="card-footer p-1">
                            <a href="#" class="btn btn-primary btn-sm w-100">Follow</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Feed Section -->
            <div class="feed-section">
                @foreach ($posts as $post)
                    <!-- Post Card -->
                    <div class="card mb-4">
                        <!-- Post Header -->
                        <div class="card-header d-flex align-items-center justify-content-between bg-white border-0">
                            <div class="d-flex align-items-center">
                                <img src="{{ $post['user_avatar'] }}" alt="User Avatar" class="rounded-circle me-2"
                                    width="40">
                                <strong>{{ $post['username'] }}</strong>
                            </div>
                            <i class="bi bi-three-dots"></i>
                        </div>

                        <!-- Post Image -->
                        <img src="{{ $post['post_image'] }}" alt="Post Image" class="card-img-top">

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
                            <p><strong>{{ number_format($post['likes']) }} likes</strong></p>
                            <p><strong>{{ $post['username'] }}</strong> {{ $post['caption'] }}</p>
                            <a href="#" class="text-muted">View all {{ $post['comments'] }} comments</a>
                            <form class="mt-3">
                                <div class="input-group">
                                    <input type="text" class="form-control" placeholder="Add a comment...">
                                    <button class="btn btn-link text-primary" type="submit">Post</button>
                                </div>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

    <!--spacing-->
    <div class="col-lg-1"></div>
    <!-- right Side Bar and footer Section -->
    <div class="col-lg-3 d-none d-lg-block bg-white border-start ps-3">
        <!-- Profile Section -->
        <div class="d-flex align-items-center my-3">
            <img src="https://via.placeholder.com/50" alt="Your Profile" class="rounded-circle me-3"
                style="width: 50px; height: 50px;" />
            <div>
                <a href="#" class="text-dark fw-bold text-decoration-none">your_username</a>
                <p class="text-muted mb-0" style="font-size: 14px;">Your Full Name</p>
            </div>
        </div>

        <!-- Suggestions for You -->
        <div class="mt-4">
            <h6 class="text-muted">Suggestions for you</h6>
            @foreach ($suggestedUsers as $user)
                <div class="d-flex align-items-center justify-content-between my-2">
                    <div class="d-flex align-items-center">
                        <img src="{{ $user['profile_picture'] }}" alt="{{ $user['username'] }}" class="rounded-circle me-2"
                            style="width: 40px; height: 40px;" />
                        <div>
                            <a href="#" class="text-dark fw-bold text-decoration-none">{{ $user['username'] }}</a>
                            <p class="text-muted mb-0" style="font-size: 12px;">
                                Followed by {{ $user['followed_by'] }}
                            </p>
                        </div>
                    </div>
                    <a href="#" class="text-primary fw-bold text-decoration-none" style="font-size: 12px;">Follow</a>
                </div>
            @endforeach
        </div>


        <!-- Footer Links -->
        <div class="mt-4">
            <p class="text-muted" style="font-size: 12px;">
                About · Help · Press · API · Jobs · Privacy · Terms · Locations · Language
            </p>
            <p class="text-muted" style="font-size: 12px;">© 2024 Instagram Clone</p>
        </div>
    </div>
@endsection
