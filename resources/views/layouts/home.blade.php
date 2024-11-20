<!-- resources/views/blade/main.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Instagram')</title>
    <link rel="icon" href="https://upload.wikimedia.org/wikipedia/commons/9/95/Instagram_logo_2022.svg"
        type="image/svg+xml">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar Section -->
            <nav class="col-md-3 col-lg-2 bg-white border-end vh-100 d-flex flex-column align-items-start p-3">
                @include('components.sidebar')
            </nav>

            <!-- Main Feed Section -->
            <main class="col-md-6 col-lg-7 p-4">
                @yield('content')
            </main>

            <!-- Right Sidebar Section (optional) -->
            <aside class="col-md-3 col-lg-3 bg-white border-start vh-100 p-4 d-none d-md-block">
                @yield('right-sidebar')
            </aside>
        </div>
    </div>

    @yield('modals')

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
