<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Financial Planner</title>
    <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet"/>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&amp;display=swap" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('CSS/style.css') }}">
</head>
<body class="min-h-screen bg-gradient-to-tr from-[#4a6a5a] via-[#5a7a6a] to-[#6a8a7a] flex">
    @include('partials.sidebar')
   
      
  <div class="fixed inset-0 bg-black bg-opacity-30 hidden z-40 md:hidden" id="overlay">
  </div>
  <div class="flex-1 w-full min-h-screen bg-[#f9fdf8] rounded-none p-6 md:p-10 flex flex-col gap-6 max-w-full overflow-auto relative z-10 transition-filter duration-300 ease-in-out" id="contentWrapper">
   <button aria-label="Toggle sidebar" class="mb-4 bg-[#1a2a1a] text-white p-2 rounded-md w-10 h-10 flex items-center justify-center focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#a0b0a0]" id="sidebarToggleMain" title="Toggle Sidebar">
    <i class="fas fa-bars">
    </i>
   </button>
   
    @yield('content')
  </div>
    
    <script
  src="https://code.jquery.com/jquery-3.7.1.min.js"
  integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
  crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>