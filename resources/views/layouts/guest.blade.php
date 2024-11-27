<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($page_title) ? $page_title : 'insta' }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="https://www.instagram.com/static/images/ico/favicon-192.png/68d99ba29cc8.png"
        type="image/png">
</head>

<body class="bg-light">
    <div class="container-fluid d-flex justify-content-center align-items-center min-vh-100">
        <div class="row w-100 justify-content-center">
            <!-- Left Section (Logo) -->
            <div class="col-md-6 d-none d-md-flex justify-content-center align-items-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram Logo"
                    class="img-fluid rounded">
            </div>

            <!-- Right Section (Login Form) -->
            <div class="col-md-5 bg-white p-4 rounded shadow-sm" style="max-height: 400px;">
                <div class="text-center mb-3">
                    <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png"
                        alt="Instagram Logo" class="img-fluid" style="width: 120px;">
                </div>

                <h2 class="text-center mb-4 fw-bold">Instagram</h2>

                <!-- Login button -->
                <div class="d-flex justify-content-center align-items-center">
                    <a href="{{ route('login') }}" class="btn btn-primary px-4">Login</a>
                </div>

                <!-- Sign Up Link -->
                <div class="text-center mt-3">
                    <p class="mb-0">Don't have an account? <a href="{{ route('register') }}"
                            class="text-decoration-none">Sign up</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center mt-4 text-muted">
        <p class="mb-0">© 2024 Insta from maintech</p>
        <p>
            <a href="#">About</a> | <a href="#">Blog</a> | <a href="#">Jobs</a> | <a
                href="#">Help</a> | <a href="#">API</a>
        </p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
