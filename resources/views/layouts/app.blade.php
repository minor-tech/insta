<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($page_title) ? $page_title : 'Insta' }}</title>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/9/95/Instagram_logo_2022.svg"
        type="image/svg+xml">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar Section -->
            <div class="col-md-3 col-lg-2 bg-white border-end vh-100 d-flex flex-column align-items-start p-3">
                @auth
                    <div class="d-flex flex-column align-items-start p-2 vh-100 position-fixed mt-4" style="width: 100%;">
                        <!-- Brand Name "Insta" in Italics -->
                        <a href="#" class="mb-4 text-dark fs-4 fw-bold"
                            style="font-style: italic; text-decoration: none;">
                            Insta
                        </a>

                        <!-- Sidebar Links -->
                        <ul class="nav flex-column w-100">
                            <li class="nav-item mb-1.5">
                                <a class="nav-link d-flex align-items-center p-2 text-dark" href="#">
                                    <i class="bi bi-house-door fs-4 me-3"></i><span>Home</span>
                                </a>
                            </li>

                            <!-- Search Button in Navbar -->
                            <li class="nav-item">
                                <a href="#" class="nav-link d-flex align-items-center p-2 text-dark"
                                    id="searchToggle">
                                    <i class="bi bi-search fs-4 me-3"></i><span>Search</span>
                                </a>
                            </li>


                            <!-- Search Overlay -->
                            <div class="overlay position-fixed top-0 start-2 bg-white w-50 h-100 d-none" id="searchOverlay">
                                <div class="container-fluid h-100 d-flex flex-column">
                                    <div class="bg-white p-4 h-100 shadow-lg search-panel">
                                        <!-- Close Button -->
                                        <div class="d-flex justify-content-end">
                                            <button class="btn btn-light btn-sm" id="closeSearch">X</button>
                                        </div>
                                        <!-- Search Input -->
                                        <div class="input-group my-4">
                                            <span class="input-group-text bg-white border-end-0">
                                                <i class="bi bi-search text-muted"></i>
                                            </span>
                                            <input type="text" class="form-control border-start-0"
                                                placeholder="Search users..." aria-label="Search">
                                        </div>
                                        <!-- Suggested Users -->
                                        <div class="suggested-users">
                                            <h6 class="text-muted">Suggested</h6>
                                            <div class="d-flex align-items-center p-2 mb-2">
                                                <img src="https://via.placeholder.com/40" alt="User Avatar"
                                                    class="rounded-circle me-3">
                                                <div>
                                                    <strong>username1</strong><br>
                                                    <small class="text-muted">Full Name</small>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center p-2 mb-2">
                                                <img src="https://via.placeholder.com/40" alt="User Avatar"
                                                    class="rounded-circle me-3">
                                                <div>
                                                    <strong>username2</strong><br>
                                                    <small class="text-muted">Full Name</small>
                                                </div>
                                            </div>
                                            <!-- Add more suggested users as needed -->
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <!-- Other Sidebar Links -->
                            <li class="nav-item mb-1.5">
                                <a class="nav-link d-flex align-items-center p-2 text-dark" href="{{ route('explore') }}">
                                    <i class="bi bi-compass fs-4 me-3"></i><span>Explore</span>
                                </a>
                            </li>
                            <li class="nav-item mb-1.5">
                                <a class="nav-link d-flex align-items-center p-2 text-dark" href="#">
                                    <i class="bi bi-collection-play fs-4 me-3"></i><span>Reels</span>
                                </a>
                            </li>
                            <li class="nav-item mb-1.5">
                                <a class="nav-link d-flex align-items-center p-2 text-dark" href="#">
                                    <i class="bi bi-chat-dots fs-4 me-3"></i><span>Messages</span>
                                </a>
                            </li>
                            <!-- Sidebar Link (Love icon for Notifications) -->
                            <li class="nav-item mb-1.5">
                                <a class="nav-link d-flex align-items-center p-2 text-dark" href="#"
                                    data-bs-toggle="modal" data-bs-target="#notificationModal">
                                    <i class="bi bi-heart fs-4 me-3"></i><span>Notifications</span>
                                </a>
                            </li>

                            <!-- Notification Modal -->
                            <div class="modal fade" id="notificationModal" tabindex="-1"
                                aria-labelledby="notificationModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" style="max-width: 400px;">
                                    <div class="modal-content" style="background-color: #fff; border-radius: 10px;">
                                        <div class="modal-header" style="border-bottom: 1px solid #ddd;">
                                            <h5 class="modal-title" id="notificationModalLabel"
                                                style="font-weight: bold; font-size: 16px;">
                                                Notifications</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body" style="max-height: 400px; overflow-y: auto;">
                                            <!-- Notification Example -->
                                            <div class="d-flex align-items-center mb-3">
                                                <img src="https://via.placeholder.com/40" alt="User Avatar"
                                                    class="rounded-circle me-3" style="width: 40px; height: 40px;">
                                                <div>
                                                    <strong>username1</strong> liked your photo.
                                                    <br>
                                                    <small class="text-muted">2 hours ago</small>
                                                </div>
                                            </div>
                                            <!-- More notifications can go here -->
                                        </div>
                                        <div class="modal-footer" style="border-top: 1px solid #ddd;">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <li class="nav-item mb-1.5">
                                <a class="nav-link d-flex align-items-center p-2 text-dark" data-bs-toggle="modal"
                                    data-bs-target="#createModal">
                                    <i class="bi bi-plus-square fs-4 me-3"></i><span>Create</span>
                                </a>
                            </li>

                            <!-- create modal -->
                            <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="createModalLabel">Create New Post</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('post.create') }}" method="POST"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="postImage" class="form-label">Upload Image</label>
                                                    <input type="file" class="form-control" id="postImage"
                                                        name="image" required>
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
                                    <!-- Hamburger Icon -->
                                    <div class="d-flex flex-column justify-content-between"
                                        style="width: 20px; height: 14px;">
                                        <div class="bg-dark" style="height: 2px;"></div>
                                        <div class="bg-dark" style="height: 2px;"></div>
                                        <div class="bg-dark" style="height: 2px;"></div>
                                    </div>

                                    <span class="ms-2" style="font-size: 14px;">More</span>
                                </a>
                            </li>

                        </ul>


                    </div>
                @endauth
            </div>
            @yield('content')

        </div>
    </div>

    <!-- JavaScript to Handle Toggle -->
    <!-- Bootstrap and JavaScript -->
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            const searchToggle = document.getElementById("searchToggle");
            const searchOverlay = document.getElementById("searchOverlay");
            const closeSearch = document.getElementById("closeSearch");

            // Open the search overlay
            searchToggle.addEventListener("click", (e) => {
                e.preventDefault();
                searchOverlay.classList.remove("d-none");
                searchOverlay.classList.add("d-flex");
            });

            // Close the search overlay
            closeSearch.addEventListener("click", () => {
                searchOverlay.classList.add("d-none");
                searchOverlay.classList.remove("d-flex");
            });
        });
    </script>



    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
