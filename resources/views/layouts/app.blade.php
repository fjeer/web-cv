<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - SigmaTech.id</title>

    <!-- Bootstrap & Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Anaheim:wght@400..800&family=Poppins:wght@100..900&display=swap"
        rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>

<body class="bg-gray-500">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white sticky-top shadow-sm">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" width="45" class="me-2">
                <div>
                    <h1 class="fs-5 fw-bold mb-0">SigmaTech</h1>
                    <small class="text-muted">Digital Solution</small>
                </div>
            </a>

            <!-- Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarMenu">

                <!-- Left Menu -->
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('home.index') ? 'active fw-bold text-primary' : '' }}"
                            href="{{ route('home.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('kursus.index') ? 'active fw-bold text-primary' : '' }}"
                            href="{{ route('kursus.index') }}">Kursus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('training.index') ? 'active fw-bold text-primary' : '' }}" href="{{ route('training.index') }}">Jadwal Kursus</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('event.index') ? 'active fw-bold text-primary' : '' }}"
                            href="{{ route('event.index') }}">Event</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('industri.index') ? 'active fw-bold text-primary' : '' }}"
                            href="{{ route('industri.index') }}">Kelas Industri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link {{ request()->routeIs('berita.index') ? 'active fw-bold text-primary' : '' }}"
                            href="{{ route('berita.index') }}">Berita</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero -->
    <section class="hero">
        @yield('hero')
    </section>

    <!-- Content -->
    <main class="container my-5">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer text-white">
        <div class="container">
            <div class="row">

                <!-- About -->
                <div class="col-md-5 mb-4">
                    <img src="{{ asset('images/footer.png') }}" alt="Footer Logo" class="img-fluid mb-3">
                    <p>SigmaTech adalah perusahaan di bidang teknologi informasi dan pendidikan digital.</p>
                    <p><i class="bi bi-geo-alt-fill me-2"></i>Probolinggo - Jawa Timur</p>
                    <p><i class="bi bi-telephone-fill me-2"></i>+62 821-4435-6926</p>
                    <p><i class="bi bi-telephone-fill me-2"></i>+62 852-3333-5481</p>
                    <p>Email: sigmatechdigitalsolution@gmail.com</p>
                </div>

                <!-- Navigation -->
                <div class="col-md-4 ps-md-5 mb-4">
                    <h4 class="mb-4">Navbar</h4>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="{{ route('home.index') }}" class="text-white">Home</a></li>
                        <li class="mb-2"><a href="{{ route('kursus.index') }}" class="text-white">Kursus</a></li>
                        <li class="mb-2"><a href="{{ route('event.index') }}" class="text-white">Event</a></li>
                        <li class="mb-2"><a href="#" class="text-white">Kelas Industri</a></li>
                        <li class="mb-2"><a href="{{ route('berita.index') }}" class="text-white">Berita</a></li>
                        <li class="mb-2"><a href="#" class="text-white">Hubungi Kami</a></li>
                    </ul>
                </div>

                <!-- Social Media -->
                <div class="col-md-3 mb-4">
                    <h4 class="mb-3">Sosial Media</h4>
                    <p>Kunjungi Sosial Media Kami</p>
                    <div class="d-flex gap-3 fs-4">
                        <a href="https://wa.me/+6282144356926" target="_blank" class="text-white">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                        <a href="https://instagram.com" target="_blank" class="text-white">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://tiktok.com" target="_blank" class="text-white">
                            <i class="bi bi-tiktok"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <!-- Footer Bottom -->
    <div class="footer-bottom text-center py-3">
        <div class="container d-flex justify-content-between">
            <span>&copy; 2025 SigmaTech</span>
            <span>Berjaya, Berinovasi, dan Bertumbuh bersama.</span>
        </div>
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
