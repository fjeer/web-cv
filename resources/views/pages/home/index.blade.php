@extends('layouts.app')

@section('title', 'home')

@section('content')

{{-- ========================= SECTION 1 ========================= --}}
<section class="hero-section w-100" style="background-image: url({{ asset('images/banner-home.png') }});">

    <div class="container pt-5">

    <div class="row justify-content-between align-items-center">

        <div class="col-md-6">

            <div class="banner_content" data-aos="fade-right">

                <h3 class="fw-bold fs-1">
                    Selamat Datang Kembangkan potensi dan inovasi bersama di SigmaTech.id
                </h3>

                <p class="text-secondary fs-5">
                    Berkarya, Berinovasi, dan Bertumbuh bersama.
                </p>

            </div>

        </div>

        <div class="col-md-6">

            <div class="banner_images" data-aos="fade-left">

                <img src="{{ asset('images/illustrasi_hero_home.png') }}" alt="Hero">

            </div>
            
        </div>

    </div>
    </div>
</section>

{{-- ========================= SECTION 2 ========================= --}}
<section class="keunggulan-section" style="background-color:white">

    <div class="container text-center py-5">

        <div class="title-keunggulan" data-aos="fade-up">

            <h2 class="section-title mb-3">Keunggulan SigmaTech</h2>
            <p class="text-muted mx-auto mb-5" style="max-width: 700px;">
                Kami menghadirkan solusi pembelajaran digital yang relevan dengan kebutuhan industri terkini
            </p>

        </div>
        

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
                <div class="card text-center p-4 border-0 custom-card" data-aos="flip-left" data-aos-duration="3000">
                    <div class="img-wrapper mb-4">
                        <img src="{{ asset('images/'.$item[0]) }}" width="70" alt="">
                    </div>
                    <h5 class="fw-bold mb-3 fs-6">{{ $item[1] }}</h5>
                    <p class="text-secondary">{{ $item[2] }}</p>
                </div>
            </div>
            @endforeach
        </div>

    </div>

</section>

{{-- ========================= SECTION 3 ========================= --}}
<section class="about-section" style="background-color: white">

    <div class="container py-5">

        <div class="border-top border-2 border-secondary mb-5"></div>

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
                            @foreach(['Memberikan pelatihan dan konsultasi berbasis teknologi terkini.', 'Menghadirkan solusi IT yang efisien, aman, dan scalable.', 'Mengembangkan produk digital yang meningkatkan produktivitas dan konektivitas.'] as $mission)
                            <li class="mb-2">
                                <i class="bi bi-check-circle-fill text-primary me-2"></i>
                                <p class="text-muted">{{ $mission }}</p>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    
</section>

{{-- ========================= SECTION 4 ========================= --}}
<section class="kursus-section" style="background-image: url('{{ asset('images/bg-kursus-home-1.png') }}');" data-aos="fade-zoom-in">

    <div class="container py-5 text-center">
        
        <div class="title_kursus" data-aos="fade-up">

            <h2 class="section-title mb-2">Pilih Jalur Belajarmu</h2>
            <p class="text-secondary mb-0">
                Mulai perjalanan kariermu di bidang yang kamu minati. 
                <p class="mt-0 mb-5 text-secondary"> Setiap kelas di SigmaTech dirancang agar kamu bisa belajar sambil praktik langsung. </p>
            </p>

        </div>

        <div class="row mt-4">

            @foreach ($kursus as $krs)
            <div class="col-md-3 col-sm-6">
                <div class="card border-primary card-krs" style="border-radius: 20px" data-aos="flip-left" data-aos-duration="3000" data-aos-easing="ease-out-cubic">
                    <img src="{{ asset('storage/'.$krs->gambar_kursus ) }}" class="card-img-top" alt="{{ $krs->gambar_kursus }}" style="height: 180px; object-fit: cover; border-top-left-radius: 20px; border-top-right-radius: 20px;">
                    <div class="card-body text-start">
                        <div class="d-flex justify-content-between">
                            <span class="fw-bold">{{ $krs->nama_kursus }}</span>
                            <span class="text-warning">
                                <i class="bi bi-star-fill"></i> {{ $krs->rating_kursus }}
                            </span>
                        </div>
                        <p class="text-muted small">
                            {{ Str::limit($krs->deskripsi_kursus, 50) }}
                        </p>
                        <p class="fw-bold text-primary">Rp. {{ number_format($krs->harga_kursus, 0, ',', '.') }}</p>

                        <a href="{{ route('kursus.show', $krs->slug) }}" class="stretched-link"></a>
                    </div>
                </div>
            </div>

            @endforeach

        </div>

    </div>

</section>

{{-- ========================= SECTION 5 ========================= --}}
<section class="benefit-section" style="background-color: white;">

    <div class="container py-5">

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

                <a href="{{ route('training.index') }}" class="btn btn-gradient px-5 py-3 text-white fw-semibold">
                    Lihat Jadwal Kursus <i class="bi bi-calendar-week ms-2"></i>
                </a>

            </div>

            <div class="col-md-6 text-end">
                <img src="{{ asset('images/benefit_img.jpg') }}" class="rounded-circle" style="width:400px;height:400px;object-fit:cover;">
            </div>

        </div>

    </div>

</section>
{{-- ========================= SECTION 6 ========================= --}}
<section class="industri-section" style="background-color: white">

    <div class="container text-center py-5">

        <div class="title-industri" data-aos="fade-up">

            <h2 class="section-title mb-2">Jelajahi Kelas Industri</h2>

            <h2 class="mb-2" style="font-size: 45px">Siap Gabung ke Dunia Industri Nyata?</h2>
            <p class="mb-0 text-secondary">
                Daftar sekarang dan rasakan pengalaman belajar berbasis proyek industri bersama SigmaTech.
                <p class="mb-5 text-secondary">Jadilah bagian dari generasi digital yang siap bersaing di dunia kerja.</p>
            </p>

        </div>
        
        <div class="row g-4 text-center ">
            <div class="col-md-4">
                <div class="card text-center p-3 bg-info bg-opacity-25" data-aos="zoom-in-up" data-aos-duration="800">

                    <div class="card-body">
                        <h1 class="card-title fw-bold text-primary " style="font-size: 80px;">150 +</h1>
                        <h5 class="card-text">
                            Siswa Kelas Industri
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4">
                <div class="card text-center p-3 bg-primary bg-opacity-10" data-aos="zoom-in-up" data-aos-duration="800">

                    <div class="card-body">
                        <h1 class="card-title fw-bold text-primary " style="font-size: 80px;">457 +</h1>
                        <h5 class="card-text">
                            Alumni Kelas Industri
                        </h5>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center p-3 bg-primary bg-opacity-25" data-aos="zoom-in-up" data-aos-duration="800">

                    <div class="card-body">
                        <h1 class="card-title fw-bold text-primary" style="font-size: 80px;">25 +</h1>
                        <h5 class="card-text">
                            Sekolah bergabung
                        </h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-center gap-3">
            <!-- Button Kiri -->
            <a href="{{ route('industri.index') }}" class="btn btn-primary custom-left-btn mt-5" data-aos="zoom-in" data-aos-delay="300">
                <i class="bi bi-rocket-takeoff me-2"></i>
                Gabung Sekarang
            </a>

            <!-- Button Kanan -->
            <a href="https://wa.me/+6282144356926" target="_blank" class="btn custom-right-btn mt-5" data-aos="zoom-in" data-aos-delay="300">
                <i class="bi bi-chat-dots me-2"></i>
                konsultasi gratis
            </a>
        </div>

    </div>

</section>


{{-- ========================= SECTION 7 ========================= --}}
{{-- Section Mitra Kami --}}
<section class="mitra-section" style="background-color: white">

    <div class="container text-center py-5">
        {{-- Title Badge --}}
        <div class="text-center mb-0">
            <h2 class="section-title mb-3">Mitra Kami</h2>

        </div>
        <p class="mb-5 text-secondary">
            SigmaTech berkolaborasi dengan sekolah, instansi, dan perusahaan untuk menciptakan ekosistem belajar
            yang nyata dan relevan dengan industri.
        </p>

        <div class="swiper partnerSwiper">
            <div class="swiper-wrapper">
                @foreach($mitra as $mtr)
                <div class="swiper-slide text-center">
                    <img src="{{ asset('storage/'.$mtr->logo_mitra) }}" width="200">
                </div>
                @endforeach
            </div>
        </div>

        <div class="border-top border-2 border-secondary mb-5 mt-4"></div>

    </div>

</section>


{{-- ========================= SECTION 8 ========================= --}}
<section class="layanan-section">
    <div class="container py-5 text-center">

        <div class="title_layanan" data-aos="fade-up">

            <h2 class="section-title mb-3">Layanan SigmaTech Digital Solution</h2>
            <h1 class="text-center" style="font-size: 36px; ">Solusi Digital dari Universal SigmaTeknologi</h1>
            <p class="mb-0 text-center text-secondary">
                Kami menyediakan layanan pengembangan teknologi untuk mendukung transformasi digital bisnis dan lembaga
                Anda.
                <p class="mt-0 text-secondary text-center mb-4">Dikerjakan langsung oleh tim profesional bersama talenta
                    dari kelas industri kami.</p>
            </p>

        </div>
        @php
        $icons = ['bi-easel2-fill', 'bi-chat-dots-fill', 'bi-gear-fill', 'bi-palette-fill', 'bi-globe2', 'bi-calendar3-event-fill'];
        $colors = ['primary', 'success', 'danger', 'warning', 'info', 'secondary'];
        @endphp
        <div class="row g-4 justify-content-center">
            @foreach ($layanan as $lyn)
            @php
                $index = $loop->index;
                $icon = $icons[$index % count($icons)];
                $color = $colors[$index % count($colors)];
            @endphp
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card bg-{{ $color }} bg-opacity-10 border-0 shadow-sm hover-shadow-lg transition-all" data-aos="zoom-in" data-aos-duration="1000">
                    <div class="card-body d-flex align-items-start mb-4">
                        <div class="bg-light bg-opacity-50 p-3 rounded-3 me-3">
                            <i class="bi {{ $icon }} text-{{ $color }} fs-3"></i>
                        </div>
                        <div>
                            <h5 class="fw-bold mb-2">{{ $lyn->nama_layanan }}</h5>
                            <p class="text-muted small">{{ Str::limit($lyn->deskripsi_layanan, 120) }}</p>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="text-primary text-decoration-none fw-semibold mt-auto">
                            Pelajari lebih lanjut <i class="bi bi-arrow-right ms-1"></i>
                        </a>
                    </div>
                    
                </div>
            </div>
            @endforeach
        </div>
    
    </div>
    

</section>

{{-- ========================= SECTION 9 ========================= --}}
<section class="berita-section" style="background-color: white">
    <div class="container text-center py-5">

        <div class="title-berita" data-aos="fade-up">

            <p class="text-secondary mb-2">Cerita & Kabar Terbaru dari SigmaTech</p>
            <h2 class="section-title mb-3">Berita Terbaru</h2>
            <p class="mb-0 text-secondary">
                Simak update kegiatan, pelatihan, dan event terbaru dari kami.
                <p class="mt-0 text-secondary">Lihat bagaimana SigmaTech terus berkembang bersama komunitas digital Indonesia.</p>
            </p>

        </div>

        <div class="row mt-4">
            @foreach ($berita as $brt)
            <div class="col-lg-4 col-md-6 mb-4">

                <div class="card h-100 bg-success bg-opacity-10" data-aos="fade-up" data-aos-duration="800">

                    <img src="{{ asset('storage/'.$brt->gambar_berita) }}" class="card-img-top" alt="{{ $brt->title }}" style="height: 220px; object-fit: cover;">
                    <div class="card-body text-start">

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

        <div class="text-center mt-5" data-aos="fade-up">
            <a href="{{ route('berita.index') }}" class="btn btn-gradient text-white px-5 py-3">
                Lihat Semua Berita <i class="bi bi-newspaper ms-2"></i>
            </a>
        </div>

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

<script>
    var swiper = new Swiper(".partnerSwiper", {
        slidesPerView: 5
        , spaceBetween: 30
        , loop: true
        , autoplay: {
            delay: 0
            , disableOnInteraction: false
        }
        , speed: 3000
        , breakpoints: {
            320: {
                slidesPerView: 2
            }
            , 768: {
                slidesPerView: 3
            }
            , 1024: {
                slidesPerView: 5
            }
        , }
    });

</script>

@endsection
