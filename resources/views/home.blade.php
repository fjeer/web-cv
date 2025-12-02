@extends('layouts.app')

@section('content')

<div class="container-fluid px-4">

    {{-- ========================= SECTION 1 ========================= --}}
    <section class=" d-flex align-items-center">
    <div class="row w-100 align-items-center">

        {{-- GRID 1 — TEXT --}}
        <div class="col-md-5">
            <h1 class="pb-4"style="font-size: 50px;">Selamat Datang Kembangkan potensi dan inovasi bersama di SigmaTech.id</h1>
            <p>
               Berkarya, Berinovasi, dan Bertumbuh bersama.
            </p>
        </div>

        {{-- GRID 2 — KOSONG (RUANG UNTUK JARAK) --}}
        <div class="col-md-3"></div>

        {{-- GRID 3 — IMAGE --}}
        <div class="col-md-4 text-end">
            <img src="{{ asset('images/image.png') }}" alt="Logo" width="100%" class="me-2">
        </div>

    </div>
</section>


    {{-- ========================= SECTION 2 ========================= --}}
    <section class="py-5 keunggulan-section">
        <div class="container my-5">
        <!-- Section Title with Inline Box and Grey Background -->
        <div class="text-center mb-4">
            <h2 class="section-title">Judul Section</h2>
        </div>
        <!-- Main Section with 4 Cards -->
        <div class="row g-4 text-center ">
            <!-- Card 1 -->
            <div class="col-md-3">
        <div class="card h-100 text-center p-3 custom-card">

            <!-- Center image -->
            <div class="d-flex justify-content-center mb-3">
                <img src="{{ asset('images/image 11.png') }}" 
                    alt="Logo" 
                    style="width: 80px;">
            </div>

            <div class="card-body">
                <h5 class="card-title fw-bold">Nama Card 1</h5>
                <p class="card-text">
                    Detail untuk Card 1. Ini adalah deskripsi singkat tentang isi card ini. 
                    Anda dapat menambahkan lebih banyak informasi di sini.
                </p>
            </div>

        </div>
    </div>

            <!-- Card 2 -->
            <div class="col-md-3">
    <div class="card h-100 text-center p-3 custom-card">

        <!-- Center image -->
        <div class="d-flex justify-content-center mb-3">
            <img src="{{ asset('images/image 10.png') }}" 
                 alt="Logo" 
                 style="width: 80px;">
        </div>

        <div class="card-body">
            <h5 class="card-title fw-bold">Nama Card 2</h5>
            <p class="card-text">
                Detail untuk Card 1. Ini adalah deskripsi singkat tentang isi card ini. 
                Anda dapat menambahkan lebih banyak informasi di sini.
            </p>
        </div>

    </div>
</div>

            <!-- Card 3 -->
            <div class="col-md-3">
    <div class="card h-100 text-center p-3 custom-card">

        <!-- Center image -->
        <div class="d-flex justify-content-center mb-3">
            <img src="{{ asset('images/image 9.png') }}" 
                 alt="Logo" 
                 style="width: 80px;">
        </div>

        <div class="card-body">
            <h5 class="card-title fw-bold">Nama Card 1</h5>
            <p class="card-text">
                Detail untuk Card 1. Ini adalah deskripsi singkat tentang isi card ini. 
                Anda dapat menambahkan lebih banyak informasi di sini.
            </p>
        </div>

    </div>
</div>

            <!-- Card 4 -->
            <div class="col-md-3">
    <div class="card h-100 text-center p-3 custom-card">

        <!-- Center image -->
        <div class="d-flex justify-content-center mb-3">
            <img src="{{ asset('images/image 8.png') }}" 
                 alt="Logo" 
                 style="width: 80px;">
        </div>

        <div class="card-body">
            <h5 class="card-title fw-bold">Nama Card 1</h5>
            <p class="card-text">
                Detail untuk Card 1. Ini adalah deskripsi singkat tentang isi card ini. 
                Anda dapat menambahkan lebih banyak informasi di sini.
            </p>
        </div>

    </div>
</div>

        </div>
    </div>
</section>



    {{-- ========================= SECTION 3 ========================= --}}
    <section class=" d-flex align-items-center">
<!-- Garis tebal -->
<div class="container my-5">
    <div class="border-top border-5 border-secondary mb-5"></div>

    <div class="row align-items-start">

        <!-- Kolom 1: Logo -->
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/image.png') }}" 
                 alt="Sigmatech Logo" 
                 class="img-fluid" 
                 style="max-width: 300px;">
        </div>

        <!-- Kolom 2: Kosong (sesuai permintaan) -->
        <div class="col-md-1">
            <!-- Kosong -->
        </div>

        <!-- Kolom 3: About Us + Vision + Mission -->
        <div class="col-md-7">

            <h4 class="fw-bold mb-2 text-primary">About Us</h4>
            <p>
                SigmaTech adalah perusahaan yang bergerak di bidang teknologi informasi 
                dan layanan digital. Kami hadir untuk memberikan solusi inovatif yang 
                membantu individu maupun perusahaan beradaptasi dengan perkembangan dunia digital.
            </p>

            <h4 class="fw-bold mt-4 mb-2 text-primary">Vision</h4>
            <p>
                Menjadi mitra digital terpercaya dalam mendukung pertumbuhan bisnis di Indonesia.
            </p>

            <h4 class="fw-bold mt-4 mb-2 text-primary">Mission</h4>
            <ul>
                <li>Memberikan pelatihan dan konsultasi berbasis teknologi terkini.</li>
                <li>Menghadirkan solusi IT yang efisien, aman, dan scalable.</li>
                <li>Mengembangkan produk digital yang meningkatkan produktivitas dan konektivitas.</li>
            </ul>

        </div>
    </div>
</div>

    </section>

    {{-- ========================= SECTION 4 ========================= --}}
    <section class="min-vh-100 d-flex flex-column justify-content-center text-center">
        <div class="text-center mb-4">
            <h2 class="section-title">Pilih Jalur Belajarmu</h2>

        </div>
        <p>
            Mulai perjalanan kariermu di bidang yang kamu minati. Setiap kelas di SigmaTech dirancang agar kamu bisa belajar sambil praktik langsung.
        </p>

        <div class="row mt-4">
    <!-- Card 1 -->
    <div class="col-md-3 col-sm-6 mb-4">
        <div class="card h-100 p-2 custom-card">
            <img src="{{ asset('images/image 11.png') }}" class="card-img-top" alt="Produk 1">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-1">Kelas Pemrograman</h5>
                    <span class="text-warning">
                        <i class="bi bi-star-fill"></i> 4.5
                    </span>
                </div>
                <p class="mb-1 text-start text-muted">Belajar Coding untuk Balita menggunakan Python</p>

                <!-- Harga di kanan -->
                <p class="mb-0 fw-bold text-primary text-start">Rp 250.000</p>
            </div>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-3 col-sm-6 mb-4">
        <div class="card h-100 p-2 custom-card">
            <img src="{{ asset('images/image 10.png') }}" class="card-img-top" alt="Produk 1">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-1">Kelas Pemrograman</h5>
                    <span class="text-warning">
                        <i class="bi bi-star-fill"></i> 4.5
                    </span>
                </div>
                <p class="mb-1 text-start text-muted">Belajar Coding untuk Balita menggunakan Python</p>

                <!-- Harga di kanan -->
                <p class="mb-0 fw-bold text-primary text-start">Rp 250.000</p>
            </div>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-3 col-sm-6 mb-4">
        <div class="card h-100 p-2 custom-card">
            <img src="{{ asset('images/image 9.png') }}" class="card-img-top" alt="Produk 1">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-1">Kelas Pemrograman</h5>
                    <span class="text-warning">
                        <i class="bi bi-star-fill"></i> 4.5
                    </span>
                </div>
                <p class="mb-1 text-start text-muted">Belajar Coding untuk Balita menggunakan Python</p>

                <!-- Harga di kanan -->
                <p class="mb-0 fw-bold text-primary text-start">Rp 250.000</p>
            </div>
        </div>
    </div>

    <!-- Card 4 -->
    <div class="col-md-3 col-sm-6 mb-4">
        <div class="card h-100 p-2 custom-card">
            <img src="{{ asset('images/image 8.png') }}" class="card-img-top" alt="Produk 1">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-1">Kelas Pemrograman</h5>
                    <span class="text-warning">
                        <i class="bi bi-star-fill"></i> 4.5
                    </span>
                </div>
                <p class="mb-1 text-start text-muted">Belajar Coding untuk Balita menggunakan Python</p>

                <!-- Harga di kanan -->
                <p class="mb-0 fw-bold text-primary text-start">Rp 250.000</p>
            </div>
        </div>
    </div>
</div>

    </section>

    {{-- ========================= SECTION 5 ========================= --}}
    <section class="min-vh-100 d-flex align-items-center mb-5">
        <div class="row w-100 align-items-center">
            <div class="col-md-5">
                <h5>Benefit yang didapat</h5>
                <h1>Belajar di SigmaTech, Dapat Lebih dari Sekadar Ilmu</h1>
                <p>
                    Di SigmaTech, kamu bukan hanya belajar teknologi, tetapi juga membangun pengalaman nyata yang siap dibawa ke dunia kerja.
Kami membekali setiap peserta dengan keahlian praktis, proyek nyata, dan sertifikat kompetensi yang diakui industri.Bersama mentor profesional dan dukungan lingkungan belajar kolaboratif, kamu siap tumbuh menjadi talenta digital masa depan.
                </p>

                <ul class="list-unstyled benefit-list">
                    <li class="d-flex align-items-center mb-2">
                        <span class="icon-circle">
                            <i class="bi bi-arrow-right"></i>
                        </span>
                        Akses Materi Berbasis Industri
                    </li>

                    <li class="d-flex align-items-center mb-2">
                        <span class="icon-circle">
                            <i class="bi bi-arrow-right"></i>
                        </span>
                        Pendampingan dan Pengembangan Kompetensi
                    </li>

                    <li class="d-flex align-items-center mb-2">
                        <span class="icon-circle">
                            <i class="bi bi-arrow-right"></i>
                        </span>
                        Kesempatan Magang
                    </li>
                </ul>

                <button class="btn btn-primary" style="color: white; box-shadow: 2px 2px 5px rgba(0,0,0,0.3);">Belajar Sekarang →</button>
            </div>
            <div class="col-md-3 text-end">
            </div>
            <div class="col-md-4 text-end">
            <img src="{{ asset('images/image1.png') }}" class="d-flex align-items-center justify-content-center bg-primary rounded-circle" 
                style="width:500px; height:500px;" alt="">
            </div>
        </div>
    </section>

    {{-- ========================= SECTION 6 ========================= --}}
    <section class="d-flex flex-column justify-content-center text-center mt-5">
        
        <div class="text-center mb-4">
            <h2 class="section-title">Pilih Jalur Belajarmu</h2>

        </div>
        <p>
            Mulai perjalanan kariermu di bidang yang kamu minati. Setiap kelas di SigmaTech dirancang agar kamu bisa belajar sambil praktik langsung.
        </p>
        <div class="row g-4 text-center ">
        <div class="col-md-4">
    <div class="card h-100 text-center p-3 custom-card">

        <div class="card-body">
                <h1 class="card-title fw-bold text-primary "style="font-size: 100px;">1500 +</h1>
                <h5 class="card-text">
                    Kelas King
                </h5>
            </div>
        </div>
    </div>  

      <div class="col-md-4">
    <div class="card h-100 text-center p-3 custom-card">

        <div class="card-body">
                <h1 class="card-title fw-bold text-primary "style="font-size: 100px;">1500 +</h1>
                <h5 class="card-text">
                    Kelas Industri
                </h5>
            </div>
        </div>
    </div>    <div class="col-md-4">
    <div class="card h-100 text-center p-3 custom-card">

        <div class="card-body">
                <h1 class="card-title fw-bold text-primary "style="font-size: 100px;">1500 +</h1>
                <h5 class="card-text">
                    Kelas Petani
                </h5>
            </div>
        </div>
    </div>
</div>

    <div class="d-flex justify-content-center gap-3">
    <!-- Button Kiri -->
    <a href="#" class="btn btn-outline-primary custom-left-btn mt-5">
        Gabung Sekarang
    </a>

    <!-- Button Kanan -->
    <a href="#" class="btn btn-primary custom-right-btn mt-5">
        konsultasi gratis
    </a>
    </div>


    </section>


    {{-- ========================= SECTION 7 ========================= --}}
{{-- Section Mitra Kami --}}
<section class="min-vh-100 d-flex align-items-center mb-5">
    <div class="container text-center">

        {{-- Title Badge --}}
        <div class="text-center mb-4">
            <h2 class="section-title">Pilih Jalur Belajarmu</h2>

        </div>
        <p class="mb-5">
            Mulai perjalanan kariermu di bidang yang kamu minati. Setiap kelas di SigmaTech dirancang agar kamu bisa belajar sambil praktik langsung.
        </p>

        {{-- Carousel --}}
        <div id="partnerCarousel" class="carousel slide" data-bs-ride="carousel">
            
            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="d-flex justify-content-center gap-4">
                        <img src="{{ asset('images/image1.png') }}" class="rounded placeholder-img" alt="">
                        <img src="{{ asset('images/image1.png') }}" class="rounded placeholder-img" alt="">
                        <img src="{{ asset('images/image1.png') }}" class="rounded placeholder-img" alt="">
                        <img src="{{ asset('images/image1.png') }}" class="rounded placeholder-img" alt="">
                        <img src="{{ asset('images/image1.png') }}" class="rounded placeholder-img" alt="">
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="d-flex justify-content-center gap-4">
                        <img src="{{ asset('images/image1.png') }}" class="rounded placeholder-img" alt="">
                        <img src="{{ asset('images/image1.png') }}" class="rounded placeholder-img" alt="">
                        <img src="{{ asset('images/image1.png') }}" class="rounded placeholder-img" alt="">
                        <img src="{{ asset('images/image1.png') }}" class="rounded placeholder-img" alt="">
                        <img src="{{ asset('images/image1.png') }}" class="rounded placeholder-img" alt="">
                    </div>
                </div>
            </div>

            {{-- CUSTOM LEFT BUTTON --}}
            <button class="carousel-control-prev custom-arrow" type="button" data-bs-target="#partnerCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            {{-- CUSTOM RIGHT BUTTON --}}
            <button class="carousel-control-next custom-arrow" type="button" data-bs-target="#partnerCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>

        </div>

    </div>
    
</section>
<div class="border-top border-5 border-secondary mb-5"></div>



    {{-- ========================= SECTION 8 ========================= --}}
<section class="py-5">
    <div class="container">
        <div class="text-center mb-4">
            <h2 class="section-title">Layanan SigmaTech Digital Solution</h2>

        </div>
        <h1 class="pb-4 text-center"style="font-size: 50px; ">Solusi Digital dari Universal SigmaTeknologi</h1>
        <p class="mb-5 text-center">
            Kami menyediakan layanan pengembangan teknologi untuk mendukung transformasi digital bisnis dan lembaga Anda. Dikerjakan langsung oleh tim profesional bersama talenta dari kelas industri kami.
        </p>
        <div class="row g-4">

            {{-- Card 1 --}}
            <div class="col-md-4">
                <div class="card p-3 shadow-sm h-100">
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-lightning-charge-fill text-primary fs-2 me-3"></i>
                        <h5 class="mb-0">Kecepatan</h5>
                    </div>
                    <p class="text-muted mt-2 text-center">
                        Proses pengerjaan lebih cepat dengan standar industri.
                    </p>
                </div>
            </div>

            {{-- Card 2 --}}
            <div class="col-md-4">
                <div class="card p-3 shadow-sm h-100">
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-shield-lock-fill text-success fs-2 me-3"></i>
                        <h5 class="mb-0">Keamanan</h5>
                    </div>
                    <p class="text-muted mt-2 text-center">
                        Data Anda terjaga dengan sistem enkripsi modern.
                    </p>
                </div>
            </div>

            {{-- Card 3 --}}
            <div class="col-md-4">
                <div class="card p-3 shadow-sm h-100">
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-gear-fill text-warning fs-2 me-3"></i>
                        <h5 class="mb-0">Integrasi Mudah</h5>
                    </div>
                    <p class="text-muted mt-2 text-center">
                        Dapat digabungkan dengan berbagai layanan dan platform.
                    </p>
                </div>
            </div>

            {{-- Card 4 --}}
            <div class="col-md-4">
                <div class="card p-3 shadow-sm h-100">
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-people-fill text-danger fs-2 me-3"></i>
                        <h5 class="mb-0">Kolaboratif</h5>
                    </div>
                    <p class="text-muted mt-2 text-center">
                        Bekerja bersama tim profesional dan berpengalaman.
                    </p>
                </div>
            </div>

            {{-- Card 5 --}}
            <div class="col-md-4">
                <div class="card p-3 shadow-sm h-100">
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-globe2 text-info fs-2 me-3"></i>
                        <h5 class="mb-0">Akses Global</h5>
                    </div>
                    <p class="text-muted mt-2 text-center">
                        Layanan dapat digunakan di mana saja secara online.
                    </p>
                </div>
            </div>

            {{-- Card 6 --}}
            <div class="col-md-4">
                <div class="card p-3 shadow-sm h-100">
                    <div class="d-flex align-items-center mb-2">
                        <i class="bi bi-award-fill text-primary fs-2 me-3"></i>
                        <h5 class="mb-0">Kualitas Premium</h5>
                    </div>
                    <p class="text-muted mt-2 text-center">
                        Standar kualitas tinggi dengan hasil terbaik.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

    {{-- ========================= SECTION 9 ========================= --}}
    <section class="min-vh-100 d-flex flex-column justify-content-center text-center">
        <div class="text-center mb-4">
            <h2 class="section-title">Pilih Jalur Belajarmu</h2>

        </div>
        <p>
            Mulai perjalanan kariermu di bidang yang kamu minati. Setiap kelas di SigmaTech dirancang agar kamu bisa belajar sambil praktik langsung.
        </p>

        <div class="row mt-4">
    <!-- Card 1 -->
    <div class="col-md-4 col-sm-6 mb-4">
        <div class="card h-100 p-2 custom-card">
            <img src="{{ asset('images/image1.png') }}" class="card-img-top" alt="Produk 1">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="text-muted mb-1">
                        <i class="bi bi-calendar-event"></i> 12 Jan 2025
                    </p>
                </div>
                <p class="mb-1 text-start fw-bold text-muted">Belajar Coding untuk Balita menggunakan Python</p>

                <!-- Harga di kanan -->
                <p class="mb-0 text-start">Rp 250.000</p>
            </div>
        </div>
    </div>

    <!-- Card 2 -->
    <div class="col-md-4 col-sm-6 mb-4">
        <div class="card h-100 p-2 custom-card">
            <img src="{{ asset('images/image1.png') }}" class="card-img-top" alt="Produk 1">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="text-muted mb-1">
                        <i class="bi bi-calendar-event"></i> 12 Jan 2025
                    </p>
                </div>
                <p class="mb-1 text-start fw-bold text-muted">Belajar Coding untuk Balita menggunakan Python</p>

                <!-- Harga di kanan -->
                <p class="mb-0 text-start">Rp 250.000</p>
            </div>
        </div>
    </div>

    <!-- Card 3 -->
    <div class="col-md-4 col-sm-6 mb-4">
        <div class="card h-100 p-2 custom-card">
            <img src="{{ asset('images/image1.png') }}" class="card-img-top" alt="Produk 1">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <p class="text-muted mb-1">
                        <i class="bi bi-calendar-event"></i> 12 Jan 2025
                    </p>
                </div>
                <p class="mb-1 text-start fw-bold text-muted">Belajar Coding untuk Balita menggunakan Python</p>

                <!-- Harga di kanan -->
                <p class="mb-0 text-start">Rp 250.000</p>
            </div>
        </div>
    </div>

    </section>

</div>

@endsection
