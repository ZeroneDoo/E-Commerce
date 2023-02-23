<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- tailwind --}}
    @vite('resources/css/app.css')
    <title></title>
</head>
<body>

    @include('partials.navbar')

    @yield('content')

    <script src="{{ asset('assets/js/dropdown.js') }}"></script>
</body>
</html>