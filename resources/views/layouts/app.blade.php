<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite('resources/css/app.css')

</head>

{{-- <body>




</body> --}}

<body class="bg-gray-100 font-sans">
    <div class="flex h-screen">
        <!-- Sidebar -->
         @section('sidebar')
     

        <!-- Main Content -->
        <div class="flex-1 p-8">
            <div>
                @yield('content');
            </div>
        </div>
    </div>
</body>

</html>
