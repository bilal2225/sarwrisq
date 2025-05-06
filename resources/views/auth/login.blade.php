<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Tehreek Dawat-e-Faqr</title>

    <!-- Tailwind CSS CDN (for quick styling) -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome for Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

    <!-- Custom Styles -->
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; /* Light gray background */
        }
    </style>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="w-full max-w-md bg-white p-8 rounded-lg shadow-lg border border-[#8B0000]">

        <h2 class="text-2xl font-bold text-center mb-6 text-[#8B0000]">Login to Your Account</h2>

        <!-- Session Status -->
        @if (session('status'))
            <div class="mb-4 text-green-600 text-sm">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="mb-4">
                <label for="email" class="block text-[#8B0000] font-semibold mb-1">Email</label>
                <input id="email"
                       type="email"
                       name="email"
                       value="{{ old('email') }}"
                       required
                       autofocus
                       autocomplete="username"
                       class="w-full px-4 py-2 border border-[#8B0000] rounded focus:outline-none focus:ring-2 focus:ring-[#FFD700]">
                @error('email')
                    <span class="text-red-700 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>

            <!-- Password -->
            <div class="mb-4">
                <label for="password" class="block text-[#8B0000] font-semibold mb-1">Password</label>
                <input id="password"
                       type="password"
                       name="password"
                       required
                       autocomplete="current-password"
                       class="w-full px-4 py-2 border border-[#8B0000] rounded focus:outline-none focus:ring-2 focus:ring-[#FFD700]">
                @error('password')
                    <span class="text-red-700 text-sm mt-1">{{ $message }}</span>
                @enderror
            </div>

            <!-- Remember Me -->
            <div class="flex items-center mb-4">
                <input id="remember_me" type="checkbox" name="remember"
                       class="rounded border-gray-300 text-[#8B0000] shadow-sm focus:ring-[#FFD700]">
                <label for="remember_me" class="ml-2 text-sm text-[#8B0000]">Remember me</label>
            </div>

            <!-- Actions -->
            <div class="flex items-center justify-between">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-[#8B0000] hover:text-[#FFD700] focus:outline-none"
                       href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <button type="submit"
                        class="bg-[#8B0000] hover:bg-[#a90000] text-white font-semibold py-2 px-4 rounded transition duration-200 focus:outline-none focus:ring-2 focus:ring-[#FFD700]">
                    {{ __('Log in') }}
                </button>
            </div>
        </form>
    </div>

</body>
</html>