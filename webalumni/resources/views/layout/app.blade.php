<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Web Alumni')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <nav>
        {{-- Navbar bisa kamu isi nanti --}}
    </nav>

    <main class="container mt-4">
        @yield('content')
    </main>
</body>
</html>
