<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title') - SigmaTech.id</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

</head>
<body class="d-flex flex-column min-vh-100">

    <!-- Navbar -->
<nav class="navbar navbar-custom navbar-expand-lg navbar-light">
    <div class="container"> {{-- Membuat navbar lebih terpusat --}}

        {{-- Menu Kiri --}}
        <a class="navbar-brand d-flex align-items-center me-3" href="#">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" width="40" height="40" class="me-2">
            <span class="fw-bold">SigmaTech</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">

            {{-- Menu Kiri --}}
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link active" href="{{ route('home.index') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Kursus</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Event</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Kelas Industri</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Berita</a></li>
            </ul>

            {{-- Menu Kanan --}}
            <ul class="navbar-nav ms-auto d-flex align-items-center">

                {{-- Pilih Kategori --}}
                <li class="nav-item dropdown me-3">
                    <a class="nav-link dropdown-toggle d-flex align-items-center" href="#" role="button" data-bs-toggle="dropdown">
                        Pilih Kategori 
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Teknologi</a></li>
                        <li><a class="dropdown-item" href="#">Desain</a></li>
                        <li><a class="dropdown-item" href="#">Pemasaran</a></li>
                        <li><a class="dropdown-item" href="#">Bisnis</a></li>
                        <li><a class="dropdown-item" href="#">Lainnya</a></li>
                    </ul>
                </li>

                {{-- Search Bar --}}
                <li class="me-3">
                    <form class="d-flex">
                        <div class="input-group">
                            <input class="form-control" type="search" placeholder="Search..." aria-label="Search">
                            <button class="btn btn-outline-light" type="submit">
                                <i class="bi bi-search" style="color: white;"></i>
                            </button>
                        </div>
                    </form>
                </li>

                {{-- Tombol Login --}}
                <li>
                    <a href="#" 
                       class="btn rounded-4xl"
                       style="background-color: orange; color: white; box-shadow: 2px 2px 5px rgba(0,0,0,0.3);">
                        Login
                    </a>
                </li>

            </ul>

        </div>
    </div>
</nav>



    <!-- Main content -->
    <div class="container mt-5">
        @yield('content')
    </div>

<footer class=" footer pt-5 pb-4">
    <div class="container">
        <div class="row">

            {{-- Grid 1: Logo dan Detail --}}
            <div class="col-md-4 mb-4">
                <a class="d-flex align-items-center mb-3" href="#">
                    <img src="{{ asset('images/footer.png') }}" alt="Logo" width="100%" class="me-2">
                </a>
                <p>SigmaTech adalah perusahaan yang bergerak di bidang teknologi informasi dan pendidikan digital. Kami menyediakan layanan IT profesional serta program kelas industri untuk mencetak talenta siap kerja di era digital.</p>
                <p class="mb-1"><i class="bi bi-geo-alt-fill me-2"></i>Probolinggo - Jawa Timur</p>
                <p><i class="bi bi-telephone-fill me-2"></i>+62 821-4435-6926</p>
                <p><i class="bi bi-telephone-fill me-2"></i>+62 852-3333-5481</p>
                sigmatechdigitalsolution@gmail.com
            </div>

            {{-- Grid 2: Menu Navbar --}}
<div class="col-md-4 ms-mb-4 ps-5">
    <h4 class="mb-4">Navbar</h5>
    <ul class="list-unstyled">
        <li class="mb-3"><a href="#" class="text-white text-decoration-none">Home</a></li>
        <li class="mb-3"><a href="#" class="text-white text-decoration-none">Kursus</a></li>
        <li class="mb-3"><a href="#" class="text-white text-decoration-none">Event</a></li>
        <li class="mb-3"><a href="#" class="text-white text-decoration-none">Kelas Industri</a></li>
        <li class="mb-3"><a href="#" class="text-white text-decoration-none">Berita</a></li>
        <li class="mb-3"><a href="#" class="text-white text-decoration-none">Pilih Kategori</a></li>
    </ul>
</div>


            {{-- Grid 3: Sosial Media --}}
            <div class="col-md-4 mb-4">

                <h4 class="mb-5">Sosial Media</h5>

                <h6 class="mb-4">Kunjungi Sosial Media Kami</h3>
                <div class="d-flex gap-3 mt-2">
                    {{-- WhatsApp --}}
                    <a href="https://wa.me/6281234567890" target="_blank" class="text-white fs-4">
                        <i class="bi bi-whatsapp"></i>
                    </a>
                    {{-- Instagram --}}
                    <a href="https://instagram.com" target="_blank" class="text-white fs-4">
                        <i class="bi bi-instagram"></i>
                    </a>
                    {{-- TikTok (gunakan icon dari CDN atau SVG) --}}
                    <a href="https://tiktok.com" target="_blank" class="text-white fs-4">
                        <i class="bi bi-tiktok"></i> {{-- Jika tidak ada, bisa pakai SVG TikTok --}}
                    </a>
                </div>
            </div>

        </div>
    </div>
</footer>
<div class="footer-bottom">
    <div class="d-flex justify-content-between align-items-center px-4 py-2 mt-4 mb-4"
         style="max-width: 1200px; margin: 0 auto;">
        
        <div>
            &copy; {{ date('Y') }} Nama Brand. All Rights Reserved.
        </div>

        <div>
            Creator: Nama Creator Anda
        </div>

    </div>
</div>


    <!-- Include Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
