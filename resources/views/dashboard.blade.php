<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Tehreek Dawat-e-Faqr</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <style>
        body {
            font-family: Arial, sans-serif;
        }
    </style>
</head>
<body class="bg-gray-100 min-h-screen flex flex-col">

    <!-- Navbar -->
    <nav class="bg-[#8B0000] text-white shadow-md">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <a href="{{ url('/') }}" class="text-xl font-bold text-yellow-400 flex items-center">
            <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="img-fluid" style="height: 70px;">
            Tehreek Dawat-e-Faqr</a>
            
            <ul class="flex space-x-6 items-center">
                <li><a href="{{ route('dashboard') }}" class="hover:text-yellow-300">Dashboard</a></li>
                <li><a href="{{ route('mureedain.index') }}" class="hover:text-yellow-300">Mureedain List</a></li>
                <li><a href="{{ route('mureedain.create') }}" class="hover:text-yellow-300">Add Mureed</a></li>

                @auth
                    <li class="relative">
                        <button onclick="toggleMenu()" class="focus:outline-none hover:text-yellow-300">
                            {{ Auth::user()->name }} <i class="fa fa-caret-down ml-1"></i>
                        </button>
                        <div id="dropdownMenu" class="hidden absolute right-0 mt-2 w-48 bg-white text-black rounded-md shadow-md z-50">
                            <a href="{{ route('profile.edit') }}" class="block px-4 py-2 hover:bg-gray-100">View Profile</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full text-left px-4 py-2 hover:bg-gray-100">Logout</button>
                            </form>
                        </div>
                    </li>
                @endauth
            </ul>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow container mx-auto px-4 py-12">
        <h2 class="text-2xl font-bold mb-6 text-[#8B0000]">Dashboard</h2>

        <div class="max-w-4xl mx-auto bg-white shadow-md rounded-lg p-6 border-l-4 border-[#8B0000]">
            <p class="text-gray-800 text-lg">{{ __("You're logged in!") }} Welcome to the dashboard.</p>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-[#8B0000] text-white text-center py-4">
        <p>&copy; {{ date('Y') }} Tehreek Dawat-e-Faqr. All rights reserved.</p>
    </footer>

    <!-- Dropdown JS -->
    <script>
        function toggleMenu() {
            const menu = document.getElementById("dropdownMenu");
            menu.classList.toggle("hidden");
        }

        // Optional: hide dropdown when clicking outside
        window.addEventListener('click', function(e){
            const button = document.querySelector('button[onclick="toggleMenu()"]');
            const menu = document.getElementById("dropdownMenu");
            if (!button.contains(e.target) && !menu.contains(e.target)) {
                menu.classList.add('hidden');
            }
        });
    </script>

</body>
</html>
