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
   
    @yield('content')
    
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>