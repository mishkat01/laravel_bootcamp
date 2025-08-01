<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

</head>


<body>
    <div class="flex h-screen">
        @include('partials.side-nav')
        @yield('content')
    </div>
    
    <!-- main -->
    <script src="{{ asset('backend/js/main.js') }}"></script>

</body>

</html>
