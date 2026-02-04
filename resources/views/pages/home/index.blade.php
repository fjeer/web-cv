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
        <h2 class="section-title mb-3">Keunggulan SigmaTech</h2>
        <p class="text-muted mx-auto mb-5" style="max-width: 700px;">
            Kami menghadirkan solusi pembelajaran digital yang relevan dengan kebutuhan industri terkini
        </p>

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
            <div class="col-lg-3 col-md-6">
                <div class="card h-100 text-center p-4 border-0 custom-card">
                    <div class="img-wrapper mb-4">
                        <img src="{{ asset('images/'.$item[0]) }}" width="70" alt="">
                    </div>
                    <h5 class="fw-bold mb-3">{{ $item[1] }}</h5>
                    <p class="text-muted">{{ $item[2] }}</p>
                </div>
            </div>
            @endforeach
        </div>

    </section>

    {{-- ========================= SECTION 3 ========================= --}}
    <section class="py-5">
        <hr class="border-2">

        <div class="row align-items-center mt-5">
            <div class="col-lg-4 col-md-12 mb-5 mb-lg-0 text-center">
                <img src="{{ asset('images/image.png') }}" class="img-fluid rounded-3" alt="About SigmaTech" style="max-width: 280px;">
            </div>

            <div class="col-lg-8 col-md-12 ps-lg-5">
                <span class="text-primary fw-bold fs-4 mb-2 d-block">About Us</span>
                <h3 class="fw-bold mb-4">SigmaTech Digital Solution</h3>
                <p class="text-secondary mb-4">
                    Bergerak di bidang teknologi informasi dan layanan digital dengan komitmen membangun ekosistem pembelajaran yang inovatif.
                </p>

                <div class="row mt-5">
                    <div class="col-md-4 mb-4">
                        <h5 class="fw-bold text-primary mb-3">Visi</h5>
                        <p class="text-muted">
                            Menjadi mitra digital terpercaya dalam transformasi pendidikan teknologi di Indonesia.
                        </p>
                    </div>
                    <div class="col-md-8">
                        <h5 class="fw-bold text-primary mb-3">Misi</h5>
                        <ul class="list-unstyled">
                            @foreach(['Pelatihan berbasis teknologi terkini', 'Solusi IT efisien dan aman', 'Produk digital produktif dan inovatif'] as $mission)
                            <li class="mb-2">
                                <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                {{ $mission }}
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- ========================= SECTION 4 ========================= --}}
    <section class="py-5 text-center">
        <h2 class="section-title mb-3">Pilih Jalur Belajarmu</h2>
        <p class="text-secondary">
            Setiap kelas dirancang agar belajar sambil praktik.
        </p>

        <div class="row mt-4">

            @foreach ($kursus as $krs)
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="card h-100 custom-card">
                    <img src="{{ asset('images/image 11.png') }}" class="img-fluid">
                    <div class="card-body text-start">
                        <div class="d-flex justify-content-between">
                            <span>{{ $krs->nama_kursus }}</span>
                            <span class="text-warning">
                                <i class="bi bi-star-fill"></i> {{ $krs->rating_kursus }}
                            </span>
                        </div>
                        <p class="text-muted small">
                            {{ $krs->deskripsi_kursus }}
                        </p>
                        <p class="fw-bold text-primary">Rp. {{ number_format($krs->harga_kursus, 0, ',', '.') }}</p>

                        <a href="{{ route('kursus.show', $krs->slug) }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>

            @endforeach

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

                <div class="mb-4">
                    @foreach(['Akses Materi Industri Terkini', 'Pendampingan oleh Profesional', 'Kesempatan Magang & Networking', 'Portofolio Projek Nyata'] as $benefit)
                    <div class="d-flex align-items-start mb-3">
                        <div class="icon-circle me-3">
                            <i class="bi bi-check"></i>
                        </div>
                        <span class="fs-5">{{ $benefit }}</span>
                    </div>
                    @endforeach
                </div>

                <a href="{{ route('training.index') }}" class="btn button-biru px-5 py-3">
                    Lihat Jadwal Kursus <i class="bi bi-calendar-week ms-2"></i>
                </a>

            </div>

            <div class="col-md-6 text-end">
                <img src="{{ asset('images/image1.png') }}" class="rounded-circle" style="width:400px;height:400px;object-fit:cover;">
            </div>

        </div>
    </section>
</div>
{{-- ========================= SECTION 6 ========================= --}}
<section class="d-flex flex-column justify-content-center text-center mt-5">

    <div class="text-center mb-0">
        <h2 class="section-title mb-4">Jelajahi Kelas Industri</h2>
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
        <a href="{{ route('industri.index') }}" class="btn btn-primary custom-left-btn mt-5">
            <i class="bi bi-rocket-takeoff me-2"></i>
            Gabung Sekarang
        </a>

        <!-- Button Kanan -->
        <a href="https://wa.me/+6282144356926" target="_blank" class="btn custom-right-btn mt-5">
            <i class="bi bi-chat-dots me-2"></i>
            konsultasi gratis
        </a>
    </div>


</section>


{{-- ========================= SECTION 7 ========================= --}}
{{-- Section Mitra Kami --}}
<section class="min-vh-100 d-flex align-items-center mb-0">
    <div class="container text-center">

        {{-- Title Badge --}}
        <div class="text-center mb-0">
            <h2 class="section-title mb-3">Mitra Kami</h2>

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
                        <img src="{{ asset('images/image1.png') }}" class="rounded placeholder-img" alt="" width="200px">
                        <img src="{{ asset('images/image1.png') }}" class="rounded placeholder-img" alt="" width="200px">
                        <img src="{{ asset('images/image1.png') }}" class="rounded placeholder-img" alt="" width="200px">
                        <img src="{{ asset('images/image1.png') }}" class="rounded placeholder-img" alt="" width="200px">
                        <img src="{{ asset('images/image1.png') }}" class="rounded placeholder-img" alt="" width="200px">
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="d-flex justify-content-center gap-4">
                        <img src="{{ asset('images/image1.png') }}" class="rounded placeholder-img" alt="" width="200px">
                        <img src="{{ asset('images/image1.png') }}" class="rounded placeholder-img" alt="" width="200px">
                        <img src="{{ asset('images/image1.png') }}" class="rounded placeholder-img" alt="" width="200px">
                        <img src="{{ asset('images/image1.png') }}" class="rounded placeholder-img" alt="" width="200px">
                        <img src="{{ asset('images/image1.png') }}" class="rounded placeholder-img" alt="" width="200px">
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
    <div class="text-center mb-0">
        <h2 class="section-title mb-3">Layanan SigmaTech Digital Solution</h2>
    </div>
    <h1 class="text-center" style="font-size: 36px; ">Solusi Digital dari Universal SigmaTeknologi</h1>
    <p class="mb-0 text-center text-secondary">
        Kami menyediakan layanan pengembangan teknologi untuk mendukung transformasi digital bisnis dan lembaga
        Anda.
        <p class="mt-0 text-secondary text-center mb-4">Dikerjakan langsung oleh tim profesional bersama talenta
            dari kelas industri kami.</p>
    </p>
    <div class="row g-4 justify-content-center">
        @foreach ($layanan as $lyn)
        <div class="col-xl-4 col-lg-6 col-md-6">
            <div class="card h-100 p-4 border-0 shadow-sm hover-shadow-lg transition-all">
                <div class="d-flex align-items-start mb-4">
                    <div class="bg-primary bg-opacity-10 p-3 rounded-3 me-3">
                        <i class="bi bi-lightning-charge-fill text-primary fs-3"></i>
                    </div>
                    <div>
                        <h5 class="fw-bold mb-2">{{ $lyn->nama_layanan }}</h5>
                        <p class="text-muted small">{{ Str::limit($lyn->deskripsi_layanan, 120) }}</p>
                    </div>
                </div>
                <a href="#" class="text-primary text-decoration-none fw-semibold mt-auto">
                    Pelajari lebih lanjut <i class="bi bi-arrow-right ms-1"></i>
                </a>
            </div>
        </div>
        @endforeach
    </div>

</section>

{{-- ========================= SECTION 9 ========================= --}}
<section class="min-vh-100 d-flex flex-column justify-content-center text-center">
    <div class="text-center mb-0">
        <p class="text-secondary mb-2">Cerita & Kabar Terbaru dari SigmaTech</p>
        <h2 class="section-title mb-3">Berita Terbaru</h2>

    </div>
    <p class="mb-0 text-secondary">
        Simak update kegiatan, pelatihan, dan event terbaru dari kami.
        <p class="mt-0 text-secondary">Lihat bagaimana SigmaTech terus berkembang bersama komunitas digital Indonesia.</p>
    </p>

    <div class="row mt-4">
        @foreach ($berita as $brt)
        <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100 border-0 custom-card">
                <img src="{{ asset('images/image1.png') }}" class="card-img-top" alt="{{ $brt->title }}" style="height: 220px; object-fit: cover;">
                <div class="card-body p-4 text-start">
                    <div class="d-flex align-items-center text-muted small mb-3">
                        <i class="bi bi-calendar-event me-2"></i>
                        {{ $brt->tanggal_berita->format('d M Y') }}
                    </div>
                    <h5 class="fw-bold mb-3">
                        {{ Str::limit($brt->title, 60) }}
                    </h5>
                    <p class="text-muted mb-4" style="font-size: 15px; line-height: 1.6;">
                        {{ Str::limit(strip_tags($brt->detail_berita), 100) }}
                    </p>
                    <a href="{{ route('berita.show', $brt->slug) }}" class="text-primary text-decoration-none fw-semibold">
                        Baca Selengkapnya <i class="bi bi-arrow-right ms-1"></i>
                    </a>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="text-center mt-5">
        <a href="{{ route('berita.index') }}" class="btn btn-outline-primary px-5 py-3">
            Lihat Semua Berita <i class="bi bi-newspaper ms-2"></i>
        </a>
    </div>

</section>

</div>

<style>
    .hover-shadow-lg {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .hover-shadow-lg:hover {
        transform: translateY(-5px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1) !important;
    }

    .transition-all {
        transition: all 0.3s ease;
    }

    .display-6 {
        font-size: 2.5rem;
        font-weight: 700;
    }

    @media (max-width: 768px) {
        .display-6 {
            font-size: 2rem;
        }

        .display-5 {
            font-size: 1.75rem;
        }
    }

</style>


@endsection
