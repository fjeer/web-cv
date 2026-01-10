@extends('layouts.app')

@section('title', 'home')

@section('content')

<div class="container-fluid px-4">

{{-- ========================= SECTION 1 ========================= --}}
<section class="d-flex align-items-center py-5">
    <div class="row w-100 align-items-center">

        <div class="col-md-6">
            <h1 class="fw-bold" style="font-size:40px;">
                Selamat Datang Kembangkan potensi dan inovasi bersama di SigmaTech.id
            </h1>
            <p class="text-secondary fs-5">
                Berkarya, Berinovasi, dan Bertumbuh bersama.
            </p>
        </div>

        <div class="col-md-2"></div>

        <div class="col-md-4 text-end">
            <img src="{{ asset('images/image.png') }}" class="img-fluid" alt="Hero">
        </div>

    </div>
</section>

{{-- ========================= SECTION 2 ========================= --}}
<section class="py-5 my-5 keunggulan-section text-center">
    <h2 class="section-title">Keunggulan SigmaTech</h2>

    <div class="row g-4">
        @php
        $keunggulan = [
            ['image 11.png','Kurikulum Berbasis Industri','Kurikulum disusun sesuai kebutuhan dunia kerja IT.'],
            ['image 10.png','Proyek Nyata & Sertifikasi','Setiap peserta mengerjakan proyek real industri.'],
            ['image 8.png','Belajar dari Praktisi','Dibimbing langsung oleh praktisi profesional.'],
            ['image 9.png','Training Event','Pelatihan luring interaktif dan aplikatif.']
        ];
        @endphp

        @foreach($keunggulan as $item)
        <div class="col-md-3">
            <div class="card h-100 text-center py-3 custom-card">
                <img src="{{ asset('images/'.$item[0]) }}" width="70" class="mx-auto mb-3" alt="">
                <h5 class="fw-bold">{{ $item[1] }}</h5>
                <p>{{ $item[2] }}</p>
            </div>
        </div>
        @endforeach
    </div>
</section>

{{-- ========================= SECTION 3 ========================= --}}
<section class="py-5">
    <hr class="border-2">

    <div class="row align-items-center mt-5">
        <div class="col-md-4 text-center">
            <img src="{{ asset('images/image.png') }}" class="img-fluid" style="max-width:300px;">
        </div>

        <div class="col-md-8">
            <h4 class="fw-bold text-primary">About Us</h4>
            <p>SigmaTech bergerak di bidang teknologi informasi dan layanan digital.</p>

            <h4 class="fw-bold text-primary mt-4">Vision</h4>
            <p>Menjadi mitra digital terpercaya di Indonesia.</p>

            <h4 class="fw-bold text-primary mt-4">Mission</h4>
            <ul>
                <li>Pelatihan berbasis teknologi terkini</li>
                <li>Solusi IT efisien dan aman</li>
                <li>Produk digital produktif</li>
            </ul>
        </div>
    </div>
</section>

{{-- ========================= SECTION 4 ========================= --}}
<section class="py-5 text-center">
    <h2 class="section-title">Pilih Jalur Belajarmu</h2>
    <p class="text-secondary">
        Setiap kelas dirancang agar belajar sambil praktik.
    </p>

    <div class="row mt-4">
        @for($i=0;$i<4;$i++)
        <div class="col-md-3 col-sm-6 mb-4">
            <div class="card h-100 custom-card">
                <img src="{{ asset('images/image 11.png') }}" class="img-fluid">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <span>Kelas Pemrograman</span>
                        <span class="text-warning">
                            <i class="bi bi-star-fill"></i> 4.5
                        </span>
                    </div>
                    <p class="text-muted small">
                        Belajar Coding untuk Balita menggunakan Python
                    </p>
                    <p class="fw-bold text-primary">Rp 250.000</p>
                </div>
            </div>
        </div>
        @endfor
    </div>
</section>

{{-- ========================= SECTION 5 ========================= --}}
<section class="py-5">
    <div class="row align-items-center">

        <div class="col-md-6">
            <h6 class="fs-5 fw-normal">Benefit yang didapat</h6>
            <h1 style="font-size:40px;">Belajar di SigmaTech, Dapat Lebih dari Sekadar Ilmu</h1>

            <p class="text-secondary">
                Kamu membangun pengalaman nyata siap kerja bersama mentor profesional.
            </p>

            <ul class="list-unstyled">
                <li>✔ Akses Materi Industri</li>
                <li>✔ Pendampingan Profesional</li>
                <li>✔ Kesempatan Magang</li>
            </ul>

            <a href="#" class="btn button-biru mt-3">Belajar Sekarang →</a>
        </div>

        <div class="col-md-6 text-end">
            <img src="{{ asset('images/image1.png') }}" class="rounded-circle"
                 style="width:400px;height:400px;object-fit:cover;">
        </div>

    </div>
</section>
</div>
{{-- ========================= SECTION 6 ========================= --}}
<section class="d-flex flex-column justify-content-center text-center mt-5">

    <div class="text-center mb-2">
        <h2 class="section-title">Jelajahi Kelas Industri</h2>

    </div>
    <h2 class="mb-2" style="font-size: 45px">Siap Gabung ke Dunia Industri Nyata?</h2>
    <p class="mb-0 text-secondary">
        Daftar sekarang dan rasakan pengalaman belajar berbasis proyek industri bersama SigmaTech.
    <p class="mt-0 text-secondary">Jadilah bagian dari generasi digital yang siap bersaing di dunia kerja.</p>
    </p>
    <div class="row g-4 text-center ">
        <div class="col-md-4">
            <div class="card h-100 text-center p-3 custom-card">

                <div class="card-body">
                    <h1 class="card-title fw-bold text-primary " style="font-size: 80px;">150 +</h1>
                    <h5 class="card-text">
                        Siswa Kelas Industri
                    </h5>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card h-100 text-center p-3 custom-card">

                <div class="card-body">
                    <h1 class="card-title fw-bold text-primary " style="font-size: 80px;">457 +</h1>
                    <h5 class="card-text">
                        Alumni Kelas Industri
                    </h5>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 text-center p-3 custom-card">

                <div class="card-body">
                    <h1 class="card-title fw-bold text-primary " style="font-size: 80px;">25 +</h1>
                    <h5 class="card-text">
                        Sekolah bergabung
                    </h5>
                </div>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-center gap-3">
        <!-- Button Kiri -->
        <a href="#" class="btn btn-primary custom-left-btn mt-5">
            Gabung Sekarang
        </a>

        <!-- Button Kanan -->
        <a href="#" class="btn custom-right-btn mt-5">
            konsultasi gratis
        </a>
    </div>


</section>


{{-- ========================= SECTION 7 ========================= --}}
{{-- Section Mitra Kami --}}
<section class="min-vh-100 d-flex align-items-center mb-0">
    <div class="container text-center">

        {{-- Title Badge --}}
        <div class="text-center mb-2">
            <h2 class="section-title">Mitra Kami</h2>

        </div>
        <p class="mb-5 text-secondary">
            SigmaTech berkolaborasi dengan sekolah, instansi, dan perusahaan untuk menciptakan ekosistem belajar
            yang nyata dan relevan dengan industri.
        </p>

        {{-- Carousel --}}
        <div id="partnerCarousel" class="carousel slide" data-bs-ride="carousel">

            <div class="carousel-inner">

                <div class="carousel-item active">
                    <div class="d-flex justify-content-center gap-4">
                        <img src="{{ asset('images/image1.png') }}" class="rounded placeholder-img"
                            alt="" width="200px">
                        <img src="{{ asset('images/image1.png') }}" class="rounded placeholder-img"
                            alt="" width="200px">
                        <img src="{{ asset('images/image1.png') }}" class="rounded placeholder-img"
                            alt="" width="200px">
                        <img src="{{ asset('images/image1.png') }}" class="rounded placeholder-img"
                            alt="" width="200px">
                        <img src="{{ asset('images/image1.png') }}" class="rounded placeholder-img"
                            alt="" width="200px">
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="d-flex justify-content-center gap-4">
                        <img src="{{ asset('images/image1.png') }}" class="rounded placeholder-img"
                            alt="" width="200px">
                        <img src="{{ asset('images/image1.png') }}" class="rounded placeholder-img"
                            alt="" width="200px">
                        <img src="{{ asset('images/image1.png') }}" class="rounded placeholder-img"
                            alt="" width="200px">
                        <img src="{{ asset('images/image1.png') }}" class="rounded placeholder-img"
                            alt="" width="200px">
                        <img src="{{ asset('images/image1.png') }}" class="rounded placeholder-img"
                            alt="" width="200px">
                    </div>
                </div>
            </div>

            {{-- CUSTOM LEFT BUTTON --}}
            {{-- <button class="carousel-control-prev custom-arrow" type="button" data-bs-target="#partnerCarousel"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button> --}}

            {{-- CUSTOM RIGHT BUTTON --}}
            {{-- <button class="carousel-control-next custom-arrow" type="button" data-bs-target="#partnerCarousel"
                data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button> --}}

        </div>

    </div>

</section>

<div class="border-top border-2 border-secondary mb-5 mt-0"></div>



{{-- ========================= SECTION 8 ========================= --}}
<section class="py-5">
    <div class="text-center mb-2">
        <h2 class="section-title">Layanan SigmaTech Digital Solution</h2>
    </div>
    <h1 class="text-center" style="font-size: 36px; ">Solusi Digital dari Universal SigmaTeknologi</h1>
    <p class="mb-0 text-center text-secondary">
        Kami menyediakan layanan pengembangan teknologi untuk mendukung transformasi digital bisnis dan lembaga
        Anda.
    <p class="mt-0 text-secondary text-center mb-3">Dikerjakan langsung oleh tim profesional bersama talenta
        dari kelas industri kami.</p>
    </p>
    <div class="row g-4 mt-4">

        {{-- Card 1 --}}
        <div class="col-md-4">
            <div class="card p-3 shadow-sm h-100">
                <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-lightning-charge-fill text-primary fs-2 me-3"></i>
                    <h5 class="mb-0">Training Center</h5>
                </div>
                <p class="text-muted mt-2 text-center">
                    Pelatihan
                    profesional di bidang jaringan,
                    desain, dan pemrograman
                    disusun oleh praktisi
                    berpengalaman.
                </p>
            </div>
        </div>

        {{-- Card 2 --}}
        <div class="col-md-4">
            <div class="card p-3 shadow-sm h-100">
                <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-shield-lock-fill text-success fs-2 me-3"></i>
                    <h5 class="mb-0">IT Consultant</h5>
                </div>
                <p class="text-muted mt-2 text-center">
                    Analisis dan
                    strategi implementasi
                    teknologi untuk optimalkan
                    performa bisnis Anda.
                </p>
            </div>
        </div>

        {{-- Card 3 --}}
        <div class="col-md-4">
            <div class="card p-3 shadow-sm h-100">
                <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-gear-fill text-warning fs-2 me-3"></i>
                    <h5 class="mb-0">Jasa Instalasi Jaringan</h5>
                </div>
                <p class="text-muted mt-2 text-center">
                    Solusi infrastruktur jaringan
                    handal untuk kantor, sekolah,
                    hingga instansi pemerintahan.
                </p>
            </div>
        </div>

        {{-- Card 4 --}}
        <div class="col-md-4">
            <div class="card p-3 shadow-sm h-100">
                <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-people-fill text-danger fs-2 me-3"></i>
                    <h5 class="mb-0">Jasa Desain</h5>
                </div>
                <p class="text-muted mt-2 text-center">
                    Branding, desain grafis, UI/UX
                    membuat citra visual
                    perusahaan Anda lebih kuat.
                </p>
            </div>
        </div>

        {{-- Card 5 --}}
        <div class="col-md-4">
            <div class="card p-3 shadow-sm h-100">
                <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-globe2 text-info fs-2 me-3"></i>
                    <h5 class="mb-0">Software Development</h5>
                </div>
                <p class="text-muted mt-2 text-center">
                    Pengembangan aplikasi
                    berbasis web dan mobile yang
                    disesuaikan dengan
                    kebutuhan bisnis Anda.
                </p>
            </div>
        </div>

        {{-- Card 6 --}}
        <div class="col-md-4">
            <div class="card p-3 shadow-sm h-100">
                <div class="d-flex align-items-center mb-2">
                    <i class="bi bi-award-fill text-primary fs-2 me-3"></i>
                    <h5 class="mb-0">Event Organizer</h5>
                </div>
                <p class="text-muted mt-2 text-center">
                    Manajemen event berbasis
                    digital: seminar, workshop,
                    launching produk, dan lainnya.
                </p>
            </div>
        </div>

    </div>
</section>

{{-- ========================= SECTION 9 ========================= --}}
<section class="min-vh-100 d-flex flex-column justify-content-center text-center">
    <div class="text-center mb-2">
        <p class="text-secondary">Cerita & Kabar Terbaru dari SigmaTech</p>
        <h2 class="section-title">Berita Terbaru</h2>

    </div>
    <p class="mb-0 text-secondary">
        Simak update kegiatan, pelatihan, dan event terbaru dari kami.
        <p class="mt-0 text-secondary">Lihat bagaimana SigmaTech terus berkembang bersama komunitas digital Indonesia.</p>
    </p>

    <div class="row mt-4">
        <!-- Card 1 -->
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card h-100 p-2 custom-card">
                <img src="{{ asset('images/image1.png') }}" class="" alt="Produk 1">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="text-muted mb-1">
                            <i class="bi bi-calendar-event"></i> 12 Jan 2025
                        </p>
                    </div>
                    <p class="mb-1 text-start fw-bold">SigmaTech resmi luncurkan inovasi Teknologi Terbaru ...
                    </p>

                    <!-- Harga di kanan -->
                    <p class="mb-0 text-start text-muted" style="font-size: 14px">Probolinggo, 2 Nov 2025 - CV SigmaTech bersama Pemda Kabupaten Probolinggo meresmikan inovasi teknologi terbaru...</p>
                </div>
            </div>
        </div>

        <!-- Card 2 -->
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card h-100 p-2 custom-card">
                <img src="{{ asset('images/image1.png') }}" class="" alt="Produk 1">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="text-muted mb-1">
                            <i class="bi bi-calendar-event"></i> 12 Jan 2025
                        </p>
                    </div>
                    <p class="mb-1 text-start fw-bold">SigmaTech resmi luncurkan inovasi Teknologi Terbaru ...
                    </p>

                    <!-- Harga di kanan -->
                    <p class="mb-0 text-start text-muted" style="font-size: 14px">Probolinggo, 2 Nov 2025 - CV SigmaTech bersama Pemda Kabupaten Probolinggo meresmikan inovasi teknologi terbaru...</p>
                </div>
            </div>
        </div>

        <!-- Card 3 -->
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card h-100 p-2 custom-card">
                <img src="{{ asset('images/image1.png') }}" class="" alt="Produk 1">
                <div class="card-body">
                    <div class="d-flex justify-content-between align-items-center">
                        <p class="text-muted mb-1">
                            <i class="bi bi-calendar-event"></i> 12 Jan 2025
                        </p>
                    </div>
                    <p class="mb-1 text-start fw-bold">SigmaTech resmi luncurkan inovasi Teknologi Terbaru ...
                    </p>

                    <!-- Harga di kanan -->
                    <p class="mb-0 text-start text-muted" style="font-size: 14px">Probolinggo, 2 Nov 2025 - CV SigmaTech bersama Pemda Kabupaten Probolinggo meresmikan inovasi teknologi terbaru...</p>
                </div>
            </div>
        </div>

</section>

    </div>

@endsection
