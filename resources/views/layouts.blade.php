<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Tehreek Dawat-e-Faqr')</title>

    <!-- Bootstrap CSS (Local) -->
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Font Awesome Icons (Still using CDN for now) -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; /* Light gray background */
        }

        /* Navbar Styles */
        .navbar {
            background-color: #8B0000; /* Dark red from your color scheme */
        }

        .navbar-brand {
            color: #FFD700 !important; /* Gold/yellow text */
            font-weight: bold;
        }

        .navbar-nav .nav-link {
            color: #FFFFFF !important; /* White text */
        }

        /* Footer Styles */
        footer {
            background-color: #8B0000; /* Dark red */
            color: #FFFFFF; /* White text */
            padding: 15px 0;
            text-align: center;
            margin-top: 20px;
        }

        /* Table Styles */
        .table thead {
            background-color: #8B0000; /* Dark red */
            color: #FFFFFF; /* White text */
        }

        .table tbody tr:hover {
            background-color: #FFD700; /* Gold/yellow hover effect */
        }
    </style>

    @yield('head') <!-- Optional section for page-specific styles -->
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container-fluid">
            <a href="{{ url('/') }}">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="img-fluid" style="height: 70px;">
            </a>
            <a class="navbar-brand" href="{{ url('/') }}">Tehreek Dawat-e-Faqr</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mureedain.index') }}">Mureedain List</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('mureedain.create') }}">Add Mureed</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        @yield('content') <!-- Page-specific content goes here -->
    </div>

    <!-- Footer -->
    <footer>
        <p>&copy; {{ date('Y') }} Tehreek Dawat-e-Faqr. All rights reserved.</p>
    </footer>

    <!-- jQuery (Local) -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>

    <!-- Bootstrap JS (Local) -->
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Custom Scripts -->
    <script>
        // Add any custom JavaScript here if needed
    </script>

    @yield('scripts') <!-- Optional section for page-specific scripts -->
</body>
</html>
