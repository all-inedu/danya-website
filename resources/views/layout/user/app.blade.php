<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Danya Website</title>
    @vite('resources/css/app.css')
</head>

<body>
    {{-- Header --}}
    @include('layout.user.header')
    {{-- End Header --}}

    {{-- Main --}}
    <main>
        @yield('main')
    </main>
    {{-- End Main --}}

    {{-- Footer --}}
    @include('layout.user.footer')
    {{-- End Footer --}}
</body>

</html>
