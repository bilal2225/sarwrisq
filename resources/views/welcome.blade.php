<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Welcome - Tehreek Dawat-e-Faqr</title>

  <!-- Tailwind CSS CDN -->
  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Font Awesome for Icons -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" rel="stylesheet">

  <!-- Google Font -->
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@400;700&display=swap" rel="stylesheet">

  <!-- Custom Styles -->
  <style>
    body {
      font-family: 'Merriweather', serif;
    }
    .bg-overlay {
      background: linear-gradient(
        to bottom right,
        rgba(0, 0, 0, 0.3),
        rgba(0, 0, 0, 0.2)
      );
      backdrop-filter: blur(3px);
    }
  </style>
</head>
<body class="relative bg-cover bg-center min-h-screen flex items-center justify-center text-white"
      style="background-image: url('https://www.sultan-ul-ashiqeen.com/wp-content/uploads/2024/06/Sultan-ul-Ashiqeen-with-a-serene-expression.webp');">

  <!-- Logo Top Left -->
  <div class="absolute top-6 left-6 z-50">
    <a href="{{ url('/') }}">
      <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="h-14 drop-shadow-xl" style="height: 60px;">
    </a>
  </div>

  <!-- Main Content with Glass Effect -->
  <div class="bg-overlay rounded-2xl p-10 shadow-2xl w-full max-w-4xl mx-4 text-center space-y-6">

    <!-- Headings -->
    <h1 class="text-4xl sm:text-5xl font-extrabold text-[#FFD700] leading-tight">
      Welcome to <span class="block text-white">Tehreek Dawat-e-Faqr</span>
    </h1>

    <h2 class="text-2xl sm:text-3xl font-semibold text-[#fff]">
      Sultan ul Ashiqeen Disciples Management System
    </h2>

    <p class="text-lg sm:text-xl #FFD700] italic">
      Sarprast-e-Ala: <br class="sm:hidden" /> Sultan ul Ashiqeen Hazrat Sakhi Sultan Mohammad Najib ur Rehman
    </p>

    <!-- Decorative Divider -->
    <div class="w-28 h-1 bg-[#FFD700] mx-auto rounded-full"></div>

    <!-- Buttons -->
    <div class="flex flex-col sm:flex-row justify-center gap-6 pt-4">
      <a href="{{ route('login') }}"
         class="bg-[#8B0000] hover:bg-[#a90000] text-white font-bold py-3 px-6 rounded-full transition duration-300 shadow-lg">
         <i class="fas fa-sign-in-alt mr-2"></i> {{ __('Login') }}
      </a>

      <a href="{{ route('register') }}"
         class="bg-[#FFD700] hover:bg-yellow-400 text-[#8B0000] font-bold py-3 px-6 rounded-full transition duration-300 shadow-lg">
         <i class="fas fa-user-plus mr-2"></i> {{ __('Register') }}
      </a>
    </div>

  </div>

</body>
</html>
