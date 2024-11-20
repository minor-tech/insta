@extends('layouts.home')

@section('title', 'Insta')

@auth
    @section('sidebar')
        <div class="d-flex flex-column align-items-start p-3 vh-100" style="width: 100%;">
            <!-- Brand Name "Insta" in Italics -->
            <a href="#" class="mb-4 text-dark fs-4 fw-bold" style="font-style: italic; text-decoration: none;">
                Insta
            </a>

            <!-- Sidebar Links -->
            <ul class="nav flex-column w-100">
                <li class="nav-item mb-2">
                    <a class="nav-link d-flex align-items-center p-2 text-dark" href="#">
                        <i class="bi bi-house-door fs-4 me-3"></i><span>Home</span>
                    </a>
                </li>

                <!-- Search Link with Dropdown Search Card -->
                <li class="nav-item mb-2">
                    <a href="#" class="nav-link d-flex align-items-center p-2 text-dark" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        <i class="bi bi-search fs-4 me-3"></i><span>Search</span>
                    </a>

                    <!-- Dropdown Search Card -->
                    <div class="dropdown-menu p-3 shadow-lg border-0"
                        style="width: 300px; max-height: 400px; overflow-y: auto;">
                        <!-- Search Input Field -->
                        <div class="input-group mb-3">
                            <span class="input-group-text bg-white border-end-0" id="searchIcon">
                                <i class="bi bi-search text-muted"></i>
                            </span>
                            <input type="text" class="form-control border-start-0" placeholder="Search" aria-label="Search">
                        </div>

                        <!-- Suggested Users List -->
                        <div class="suggested-users">
                            <h6 class="text-muted">Suggested</h6>

                            <!-- Suggested User Card Example -->
                            <div class="d-flex align-items-center p-2 mb-2">
                                <img src="https://via.placeholder.com/40" alt="User Avatar" class="rounded-circle me-3"
                                    style="width: 40px; height: 40px;">
                                <div>
                                    <strong>username1</strong><br>
                                    <small class="text-muted">Full Name</small>
                                </div>
                            </div>

                            <!-- Repeat for Additional Suggested Users -->
                            <div class="d-flex align-items-center p-2 mb-2">
                                <img src="https://via.placeholder.com/40" alt="User Avatar" class="rounded-circle me-3"
                                    style="width: 40px; height: 40px;">
                                <div>
                                    <strong>username2</strong><br>
                                    <small class="text-muted">Full Name</small>
                                </div>
                            </div>

                            <!-- Add more suggested users as needed -->
                        </div>
                    </div>
                </li>

                <!-- Other Sidebar Links -->
                <li class="nav-item mb-2">
                    <a class="nav-link d-flex align-items-center p-2 text-dark" href="#">
                        <i class="bi bi-compass fs-4 me-3"></i><span>Explore</span>
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link d-flex align-items-center p-2 text-dark" href="#">
                        <i class="bi bi-collection-play fs-4 me-3"></i><span>Reels</span>
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link d-flex align-items-center p-2 text-dark" href="#">
                        <i class="bi bi-chat-dots fs-4 me-3"></i><span>Messages</span>
                    </a>
                </li>
                <!-- Sidebar Link (Love icon for Notifications) -->
                <li class="nav-item mb-2">
                    <a class="nav-link d-flex align-items-center p-2 text-dark" href="#" data-bs-toggle="modal"
                        data-bs-target="#notificationModal">
                        <i class="bi bi-heart fs-4 me-3"></i><span>Notifications</span>
                    </a>
                </li>

                <!-- Notification Modal -->
                <div class="modal fade" id="notificationModal" tabindex="-1" aria-labelledby="notificationModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" style="max-width: 400px;">
                        <div class="modal-content" style="background-color: #fff; border-radius: 10px;">
                            <div class="modal-header" style="border-bottom: 1px solid #ddd;">
                                <h5 class="modal-title" id="notificationModalLabel" style="font-weight: bold; font-size: 16px;">
                                    Notifications</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
                                <!-- Notification Example -->
                                <div class="d-flex align-items-center mb-3">
                                    <img src="https://via.placeholder.com/40" alt="User Avatar" class="rounded-circle me-3"
                                        style="width: 40px; height: 40px;">
                                    <div>
                                        <strong>username1</strong> liked your photo.
                                        <br>
                                        <small class="text-muted">2 hours ago</small>
                                    </div>
                                </div>
                                <!-- More notifications can go here -->
                            </div>
                            <div class="modal-footer" style="border-top: 1px solid #ddd;">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
                <li class="nav-item mb-2">
                    <a class="nav-link d-flex align-items-center p-2 text-dark" data-bs-toggle="modal"
                        data-bs-target="#createModal">
                        <i class="bi bi-plus-square fs-4 me-3"></i><span>Create</span>
                    </a>
                </li>

                <!-- create modal -->
                <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="createModalLabel">Create New Post</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('post.create') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="mb-3">
                                        <label for="postImage" class="form-label">Upload Image</label>
                                        <input type="file" class="form-control" id="postImage" name="image" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="postCaption" class="form-label">Caption</label>
                                        <textarea class="form-control" id="postCaption" name="caption" rows="3"></textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary w-100">Post</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                <li class="nav-item mb-2">
                    <a class="nav-link d-flex align-items-center p-2 text-dark"
                        href="{{ route('profile.show', ['username' => auth()->user()->username ?? 'guest']) }}">
                        <i class="bi bi-person-circle fs-4 me-3"></i><span>Profile</span>
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link d-flex align-items-center p-2 text-dark" href="#">
                        <i class="bi bi-three-dots fs-4 me-3"></i><span>More</span>
                    </a>
                </li>
            </ul>

            <!-- Create New Post Button -->
            <a href="#" class="btn btn-primary w-100 mt-auto d-flex align-items-center justify-content-center"
                data-bs-toggle="modal" data-bs-target="#createPostModal">
                <i class="bi bi-plus-square me-2"></i><span>Create Post</span>
            </a>
        </div>
    @endsection

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

    @section('scripts')
        <script>
            // Add optional JavaScript if needed for dynamic message loading or other functionality
        </script>
    @endsection

@endauth
