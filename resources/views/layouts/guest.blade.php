<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Guest Page' }}</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="icon" href="https://www.instagram.com/static/images/ico/favicon-192.png/68d99ba29cc8.png"
        type="image/png">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #fafafa;
        }
    </style>
</head>

<body>
    <div class="container-fluid d-flex justify-content-center align-items-center min-vh-100">
        <div class="row w-100 justify-content-center">
            <!-- Left Section (Image) -->
            <div class="col-md-6 d-none d-md-flex justify-content-center align-items-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png"
                    alt="Instagram Preview" class="img-fluid rounded">
            </div>

            <!-- Right Section (Login Content) -->
            <div class="col-md-5 bg-white border rounded shadow-sm p-4">
                <h2 class="text-center mb-4">Welcome Back!</h2>
                <!-- Placeholder for Blade content -->
                @yield('auth.login')
                <div class="text-center mt-3">
                    <p class="mb-0">Don't have an account?
                        <a href="{{ route('register') }}">Sign up</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center mt-4 text-muted">
        <p class="mb-0">© 2024 Instagram Clone. Made with ❤️ by [Your Name]</p>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
