<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- favicon -->
    <!-- estilos -->
    <style>
        .active {
            color: red;
            font-weight: bold;
        }
    </style>

    <!-- tailwind -->
    <!-- <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet"> -->
</head>
<body>
    <!-- header -->
    <!-- nav -->
    @include('layouts.partials.header')
    
    @yield('content')

    <!-- footer -->
    @include('layouts.partials.footer')
    
    <!-- script -->
</body>
</html>