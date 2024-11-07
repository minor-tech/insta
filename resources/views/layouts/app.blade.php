<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instagram Clone</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <!-- Optional Header (can be customized further) -->
    <header class="bg-primary text-white text-center py-4">
        <h1>Instagram Clone</h1>
    </header>

    <!-- Main Content (yield for child views content) -->
    <div class="container">
        @yield('content') <!-- Placeholder for content from child views -->
    </div>

    <!-- Optional Footer -->
    <footer class="bg-light text-center py-3">
        <p>&copy; 2024 Instagram Clone</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
