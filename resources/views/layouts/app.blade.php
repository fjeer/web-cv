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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">

    {{-- Link AOS-JS --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

    {{-- Swiper --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body class="bg-gray-500">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-white fixed-top shadow-sm" style="border-bottom: solid 1px #264570" data-aos="fade-down">
        <div class="container">

            <!-- Brand -->
            <a class="navbar-brand d-flex align-items-center" href="{{ route('home.index') }}">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" width="45" class="me-2">
                <div>
                    <h5 class="poppins-semibold mb-0" style="color: #10284A">SigmaTech</h5>
                    <p class="text-muted mt-0 poppins-light" style="font-size: 14px">Digital Solution</p>
                </div>
            </a>

            <!-- Toggle -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarMenu">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- Menu -->
            <div class="collapse navbar-collapse" id="navbarMenu">

                <!-- Left Menu -->
                <ul class="navbar-nav ms-auto me-5">
                    <li class="nav-item mx-2">
                        <a class="nav-link {{ request()->routeIs('home.index') ? 'active poppins-semibold text-primary' : 'text-secondary' }}"
                            href="{{ route('home.index') }}">Home</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link {{ request()->routeIs('kursus.index') ? 'active poppins-semibold text-primary' : 'text-secondary' }}"
                            href="{{ route('kursus.index') }}">Kursus</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link {{ request()->routeIs('training.index') ? 'active poppins-semibold text-primary' : 'text-secondary' }}" href="{{ route('training.index') }}">Jadwal Kursus</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link {{ request()->routeIs('event.index') ? 'active poppins-semibold text-primary' : 'text-secondary' }}"
                            href="{{ route('event.index') }}">Event</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link {{ request()->routeIs('industri.index') ? 'active poppins-semibold text-primary' : 'text-secondary' }}"
                            href="{{ route('industri.index') }}">Kelas Industri</a>
                    </li>
                    <li class="nav-item mx-2">
                        <a class="nav-link {{ request()->routeIs('berita.index') ? 'active poppins-semibold text-primary' : 'text-secondary' }}"
                            href="{{ route('berita.index') }}">Berita</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="mt-5">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="footer text-white">
        <div class="container pt-5">
            <div class="row mt-4">
                <!-- About -->
                <div class="col-md-5 mb-4">
                    <img src="{{ asset('images/footer.png') }}" alt="Footer Logo" class="img-fluid mb-3">
                    <p>SigmaTech adalah perusahaan yang bergerak di bidang teknologi informasi dan pendidikan digital. Kami menyediakan layanan IT profesional serta program kelas industri untuk mencetak talenta siap kerja di era digital.</p>
                    <p class="poppins-medium">Probolinggo - Jawa Timur</p>
                    <p class="mb-0 poppins-medium"><a href="https://wa.me/6282144356926" target="_blank" class="text-white text-decoration-none">+62 821-4435-6926</a></p>
                    <p class="poppins-medium"><a href="https://wa.me/6285233335481" target="_blank" class="text-white text-decoration-none">+62 852-3333-5481</a></p>
                    <p class="poppins-medium"><a href="mailto:sigmatechdigitalsolution@gmail.com" class="text-white text-decoration-none">sigmatechdigitalsolution@gmail.com</a>
                    </p>
                </div>
                

                <!-- Navigation -->
                <div class="col-md-4 mb-4 navigasi">
                    <h4 class="mb-4 poppins-semibold">Navigasi</h4>
                    <ul class="list-unstyled">
                        <li class="mt-5 mb-3"><a href="{{ route('home.index') }}" class="text-white text-decoration-none poppins-medium">Home</a></li>
                        <li class="my-3"><a href="{{ route('kursus.index') }}" class="text-white text-decoration-none poppins-medium">Kursus</a></li>
                        <li class="my-3"><a href="{{ route('training.index') }}" class="text-white text-decoration-none poppins-medium">Jadwal Kursus</a></li>
                        <li class="my-3"><a href="{{ route('event.index') }}" class="text-white text-decoration-none poppins-medium">Event</a></li>
                        <li class="my-3"><a href="{{ route('industri.index') }}" class="text-white text-decoration-none poppins-medium">Kelas Industri</a></li>
                        <li class="my-3"><a href="{{ route('berita.index') }}" class="text-white text-decoration-none poppins-medium">Berita</a></li>
                        <li class="my-3"><a href="mailto:sigmatechdigitalsolution@gmail.com" class="text-white text-decoration-none poppins-medium">Hubungi Kami</a></li>
                    </ul>
                </div>

                <!-- Social Media -->
                <div class="col-md-3 mb-4">
                    <h4 class="mb-3 poppins-semibold">Sosial Media</h4>
                    <p class="poppins-medium mt-5">Kunjungi Sosial Media Kami</p>
                    <div class="d-flex gap-3 fs-4">
                        <a href="https://wa.me/6282144356926" target="_blank" class="text-white">
                            <i class="bi bi-whatsapp"></i>
                        </a>
                        <a href="https://www.instagram.com/sigmatech.digital" target="_blank" class="text-white">
                            <i class="bi bi-instagram"></i>
                        </a>
                        <a href="https://tiktok.com" target="_blank" class="text-white">
                            <i class="bi bi-tiktok"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>

        <!-- Footer Bottom -->
        <div class="footer-bottom py-3">
            <div class="container d-flex justify-content-between">
                <span class="poppins-light">&copy; 2025 SigmaTech</span>
                <span class="poppins-light">Berjaya, Berinovasi, dan Bertumbuh bersama.</span>
            </div>
        </div>

    </footer>

    

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- Link AOS-JS --}}
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
          AOS.init();
      </script>

    {{-- Swiper JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    @stack('scripts')
</body>

</html>
