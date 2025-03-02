<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Usuários</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
<header class="p-3 text-bg-dark">
    <div class="container">
        <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
            <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                <li><a href="{{ route('user.index') }}" class="nav-link px-2 text-white">Home</a></li>
                <li><a href="{{ route('about.index') }}" class="nav-link px-2 text-white">About</a></li>
            </ul>

        </div>
    </div>
</header>
    <div class="container">
        @yield('content')
    </div>
</body>
</html>
