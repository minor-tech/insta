<!-- resources/views/guest.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Instagram</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
</head>

<body class="bg-light">

    <div class="container-fluid d-flex justify-content-center align-items-center min-vh-100">
        <div class="row w-100 justify-content-center">
            <!-- Instagram Image (Logo or Stacked Phones) -->
            <div class="col-md-6 col-lg-5 d-none d-md-flex justify-content-center align-items-center">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c9/Instagram_logo_2022.svg/800px-Instagram_logo_2022.svg.png"
                    alt="Instagram Logo" class="img-fluid">
            </div>

            <!-- Login Form Section -->
            <div class="col-md-6 col-lg-4 p-4 bg-white shadow-sm rounded-3">
                <h3 class="text-center mb-4">Log In</h3>

                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <!-- Email input -->
                    <div class="mb-3">
                        <input type="email" name="email" class="form-control" placeholder="Email" required>
                    </div>
                    <!-- Password input -->
                    <div class="mb-3">
                        <input type="password" name="password" class="form-control" placeholder="Password" required>
                    </div>
                    <!-- Submit button -->
                    <button type="submit" class="btn btn-primary w-100 py-2">Log In</button>
                </form>

                <!-- Forgot Password Link -->
                <div class="text-center mt-3">
                    <a href="{{ route('password.request') }}" class="text-decoration-none text-primary">Forgot your
                        password?</a>
                </div>

                <!-- Sign-up link -->
                <div class="text-center mt-3">
                    <p class="mb-0">Don't have an account? <a href="{{ route('register') }}"
                            class="text-decoration-none text-primary">Sign up</a></p>
                </div>
            </div>
        </div>
    </div>

    <!-- JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>
</body>

</html>
