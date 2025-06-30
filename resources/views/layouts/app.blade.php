<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Restoran Cepat Saji</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">Restoran</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a href="{{ route('reservasi.index') }}" class="nav-link">Reservasi</a></li>
                    <li class="nav-item"><a href="{{ route('menu.index') }}" class="nav-link">Menu</a></li>
                    <li class="nav-item"><a href="{{ route('booking.list') }}" class="nav-link">Lihat Reservasi</a></li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    @yield('cart')

</body>
</html>
