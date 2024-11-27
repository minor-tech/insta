<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="icon" href="https://www.instagram.com/static/images/ico/favicon-192.png/68d99ba29cc8.png"
        type="image/png">
    <style>
        body {
            background-color: #fafafa;
            font-family: 'Helvetica Neue', Arial, sans-serif;
        }

        .card {
            border: 1px solid #dbdbdb;
        }
    </style>
</head>

<body>
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="row w-100 justify-content-center">
            <!-- Registration Section -->
            <div class="col-md-6 bg-white p-4 rounded shadow-sm">
                @yield('content')
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center mt-4 text-muted">
        <p class="mb-0">© 2024 Instagram from Meta</p>
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
