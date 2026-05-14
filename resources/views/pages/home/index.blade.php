@extends('layouts.app')

@section('title', 'home')

@section('content')

{{-- ========================= SECTION 1 ========================= --}}
<section class="hero-bg w-100" style="background-image: url('{{ asset('images/banner-home.webp') }}');">
    <div class="container pt-5 text-white" data-aos="fade-down">

    <div class="row justify-content-between align-items-center">

        <div class="col-md-6">

            <div class="banner_content" data-aos="fade-right">

                <h2 class="poppins-semibold display-5">
                    <span class="text-warning">Selamat Datang</span> Kembangkan potensi dan inovasi bersama di SigmaTech
                </h2>

                <p class="poppins-medium text-white-50 fs-5">
                    Build Your Skill, Build Your Career.
                </p>

            </div>

        </div>

        <div class="col-md-6">

            <div class="banner_images text-center" data-aos="fade-left">

                <img src="{{ asset('images/illustrasi_hero_home.webp') }}" alt="Hero" class="img-fluid">

            </div>

        </div>

    </div>
    </div>
</section>

{{-- ========================= SECTION 2 ========================= --}}
<section class="keunggulan-section" style="background-color:white">

    <div class="container text-center py-5">

        <div class="title-keunggulan" data-aos="fade-up">

            <h2 class="section-title poppins-reguler mb-3">Keunggulan SigmaTech</h2>
            <p class="text-muted mx-auto mb-5" style="max-width: 700px;">
                Kami menghadirkan solusi pembelajaran digital yang relevan dengan kebutuhan industri terkini
            </p>

        </div>


        <div class="row g-4">
            @php
            $keunggulan = [
            ['ph-books','Kurikulum Berbasis Industri','Kurikulum disusun sesuai kebutuhan dunia kerja IT.'],
            ['ph-briefcase','Proyek Nyata & Sertifikasi','Setiap peserta mengerjakan proyek real industri.'],
            ['ph-chalkboard-teacher','Belajar dari Praktisi','Dibimbing langsung oleh praktisi profesional.'],
            ['ph-users-three','Training Event','Pelatihan luring interaktif dan aplikatif.']
            ];
            @endphp

            @foreach($keunggulan as $item)
            <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
    <div class="card-premium h-100 shadow-sm text-center p-4">
        <div class="mb-4">
            <div class="d-inline-flex align-items-center justify-content-center bg-primary-light rounded-circle text-primary" style="width: 80px; height: 80px;">
                <i class="ph-fill {{ $item[0] }} display-5"></i>
            </div>
        </div>
        <h5 class="poppins-semibold mb-3 fs-6 text-dark">{{ $item[1] }}</h5>
        <p class="text-secondary poppins-medium small mb-0" style="line-height: 1.6;">{{ $item[2] }}</p>
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
                <img src="{{ asset('images/image.webp') }}" class="img-fluid rounded-3" alt="About SigmaTech" style="max-width: 280px;">
            </div>

            <div class="col-lg-8 col-md-12 ps-lg-5">
                <span class="text-primary poppins-semibold fs-4 mb-2 d-block">About Us</span>
                <h3 class="poppins-semibold mb-4">SigmaTech Digital Solution</h3>
                <p class="text-secondary mb-4">
                    Bergerak di bidang teknologi informasi dan layanan digital dengan komitmen membangun ekosistem pembelajaran yang inovatif.
                </p>

                <div class="row mt-5">
                    <div class="col-md-4 mb-4">
                        <h5 class="poppins-semibold text-primary mb-3">Visi</h5>
                        <p class="text-muted">
                            Menjadi mitra digital terpercaya dalam transformasi pendidikan teknologi di Indonesia.
                        </p>
                    </div>
                    <div class="col-md-8">
                        <h5 class="poppins-semibold text-primary mb-3">Misi</h5>
                        <ul class="list-unstyled">
                            @foreach(['Memberikan pelatihan dan konsultasi berbasis teknologi terkini.', 'Menghadirkan solusi IT yang efisien, aman, dan scalable.', 'Mengembangkan produk digital yang meningkatkan produktivitas dan konektivitas.'] as $mission)
                            <li class="mb-2 d-flex align-items-start">
                                <i class="ph-fill ph-check-circle text-primary me-2 fs-5 mt-1"></i>
                                <p class="text-muted mb-0">{{ $mission }}</p>
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
<section class="kursus-section" style="background-image: url('{{ asset('images/bg-kursus-home-1.webp') }}');" data-aos="fade-zoom-in">

    <div class="container py-5 text-center">

        <div class="title_kursus" data-aos="fade-up">

            <h2 class="section-title poppins-reguler mb-2">Pilih Jalur Belajarmu</h2>
            <p class="text-secondary mb-5">
                Mulai perjalanan kariermu di bidang yang kamu minati.
                Setiap kelas di SigmaTech dirancang agar kamu bisa belajar sambil praktik langsung.
            </p>

        </div>

        <div class="row mt-4">

            @foreach ($kursus as $krs)
            <div class="col-md-3 col-sm-6 mb-4" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
    <div class="card-premium h-100">
        <div class="card-img-wrapper">
            <img src="{{ asset('storage/'.$krs->gambar_kursus ) }}" alt="{{ $krs->nama_kursus }}" class="hover-scale">
        </div>
        <div class="card-body text-start d-flex flex-column p-4">
            <div class="d-flex justify-content-between mb-2">
                            <span class="badge bg-primary-light text-primary poppins-medium rounded-pill px-3">{{ $krs->kelas->nama_kelas }}</span>
                            <div class="d-flex align-items-center text-warning poppins-medium">
                                <i class="ph-fill ph-star me-1"></i> {{ $krs->rating_kursus }}
                            </div>
                        </div>

                        <div class="mb-3 flex-grow-1">
                            <h5 class="poppins-semibold text-dark fs-6">{{ $krs->nama_kursus }}</h5>
                        </div>

                        <p class="poppins-bold text-primary mb-0 fs-5">Rp {{ number_format($krs->harga_kursus, 0, ',', '.') }}</p>

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
                <h6 class="fs-5 poppins-medium">Benefit yang didapat</h6>
                <h1 class="display-6" style="font-size:40px;">Belajar di SigmaTech, Dapat Lebih dari Sekadar Ilmu</h1>

                <p class="text-secondary">
                    Kamu membangun pengalaman nyata siap kerja bersama mentor profesional.
                </p>

                <div class="mb-4">
                    @foreach(['Akses Materi Industri Terkini', 'Pendampingan oleh Profesional', 'Kesempatan Magang & Networking', 'Portofolio Projek Nyata'] as $benefit)
                    <div class="d-flex align-items-start mb-3" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                        <div class="icon-circle me-3 bg-primary-light bg-opacity-10 border-0 text-primary">
                            <i class="ph-bold ph-check"></i>
                        </div>
                        <span class="fs-5 text-dark poppins-medium">{{ $benefit }}</span>
                    </div>
                    @endforeach
                </div>

                <a href="{{ route('training.index') }}" class="btn btn-gradient px-4 py-3 poppins-bold mt-2" data-aos="fade-up">
                    Lihat Jadwal Kursus <i class="ph-bold ph-calendar-blank ms-2"></i>
                </a>

            </div>

            <div class="col-md-6 text-end">
                <img src="{{ asset('images/benefit_img.webp') }}" class="responsive-media-frame is-circle" style="width:400px;height:400px;object-fit:cover;">
            </div>

        </div>

    </div>

</section>
{{-- ========================= SECTION 6 ========================= --}}
<section class="industri-section">

    <div class="container text-center py-5">

        <div class="title-industri" data-aos="fade-up">

            <h2 class="section-title mb-3">Jelajahi Kelas Industri</h2>

            <h2 class="mb-2 poppins-medium" style="font-size: 45px">Siap Gabung ke Dunia Industri Nyata?</h2>
            <p class="mb-0 text-secondary">
                Daftar sekarang dan rasakan pengalaman belajar berbasis proyek industri bersama SigmaTech.
                <p class="mb-5 text-secondary">Jadilah bagian dari generasi digital yang siap bersaing di dunia kerja.</p>
            </p>

        </div>

        <div class="row g-4 text-center mt-4">
            <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
    <div class="card-premium text-center p-4 h-100">
        <div class="card-body">
            <div class="mb-3 text-primary-dark"><i class="ph-fill ph-users-three" style="font-size: 48px;"></i></div>
            <h1 class="card-title poppins-semibold text-accent mb-2" style="font-size: 56px;">150+</h1>
            <h5 class="card-text text-muted poppins-medium">Siswa Kelas Industri</h5>
        </div>
    </div>
</div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
                <div class="card custom-card text-center p-4 h-100 border-0">
                    <div class="card-body">
                        <div class="mb-3 text-primary-dark"><i class="ph-fill ph-graduation-cap" style="font-size: 48px;"></i></div>
                        <h1 class="card-title poppins-semibold text-accent mb-2" style="font-size: 56px;">457+</h1>
                        <h5 class="card-text text-muted poppins-medium">Alumni Kelas Industri</h5>
                    </div>
                </div>
            </div>

            <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
                <div class="card custom-card text-center p-4 h-100 border-0">
                    <div class="card-body">
                        <div class="mb-3 text-primary-dark"><i class="ph-fill ph-buildings" style="font-size: 48px;"></i></div>
                        <h1 class="card-title poppins-semibold text-accent mb-2" style="font-size: 56px;">25+</h1>
                        <h5 class="card-text text-muted poppins-medium">Sekolah Bergabung</h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="responsive-cta-group justify-content-center mt-5">
            <!-- Button Kiri -->
            <a href="{{ route('industri.index') }}" class="btn btn-gradient px-4 py-3" data-aos="fade-up" data-aos-delay="400">
                <i class="ph-bold ph-rocket-launch me-2"></i>
                Gabung Sekarang
            </a>

            <!-- Button Kanan -->
            <a href="https://wa.me/62895639055084" target="_blank" class="btn btn-secgradient px-4 py-3" data-aos="fade-up" data-aos-delay="500">
                <i class="ph-bold ph-chat-circle-dots me-2"></i>
                Konsultasi Gratis
            </a>
        </div>

    </div>

</section>


{{-- ========================= SECTION 7 ========================= --}}
{{-- Section Mitra Kami --}}
{{-- <section class="mitra-section" style="background-color: white">

    <div class="container text-center py-5">
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

</section> --}}


{{-- ========================= SECTION 8 ========================= --}}
<section class="layanan-section">
    <div class="container py-5 text-center">

        <div class="title_layanan" data-aos="fade-up">

            <h2 class="section-title mb-3">Layanan SigmaTech Digital Solution</h2>
            <h1 class="text-center" style="font-size: 36px; ">Solusi Digital dari Universal SigmaTeknologi</h1>
            <p class="mb-4 text-center text-secondary">
                Kami menyediakan layanan pengembangan teknologi untuk mendukung transformasi digital bisnis dan lembaga
                Anda. Dikerjakan langsung oleh tim profesional bersama talenta dari kelas industri kami.
            </p>

        </div>
        @php
        $icons = ['ph-desktop', 'ph-chat-teardrop-text', 'ph-gear-six', 'ph-palette', 'ph-globe', 'ph-calendar-star'];
        $colors = ['primary', 'accent', 'primary-dark', 'primary', 'accent', 'primary-dark'];
        @endphp
        <div class="row g-4 justify-content-center">
            @foreach ($layanan as $lyn)
            @php
                $index = $loop->index;
                $icon = $icons[$index % count($icons)];
                $color = $colors[$index % count($colors)];
            @endphp
            <div class="col-xl-4 col-lg-6 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                <div class="card custom-card bg-{{ $color }} bg-opacity-10 border-0 h-100 p-2" style="border-left: 4px solid var(--color-{{ $color }}) !important;">
                    <div class="card-body d-flex flex-column mb-3">
                        <div class="d-flex align-items-center mb-4">
                            <div class="bg-white p-3 rounded-circle shadow-sm me-3 text-{{ $color }}">
                                <i class="ph-fill {{ $icon }} fs-2"></i>
                            </div>
                            <h5 class="poppins-semibold mb-0 text-dark">{{ $lyn->nama_layanan }}</h5>
                        </div>
                        <p class="text-muted small flex-grow-1">{{ Str::limit($lyn->deskripsi_layanan, 120) }}</p>
                    </div>
                    {{-- <div class="card-footer bg-transparent border-0 pt-0">
                        <a href="#" class="text-{{ $color }} text-decoration-none poppins-medium d-inline-flex align-items-center">
                            Pelajari lebih lanjut <i class="ph-bold ph-arrow-right ms-2"></i>
                        </a>
                    </div> --}}
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
            <h2 class="section-title mb-3">Warta SigmaTech</h2>
            <p class="mb-4 text-secondary">
                Simak update kegiatan, pelatihan, dan event terbaru dari kami. Lihat bagaimana SigmaTech terus berkembang bersama komunitas digital Indonesia.
            </p>

        </div>

        <div class="row mt-5">
            @foreach ($berita as $brt)
            <div class="col-lg-4 col-md-6 mb-4" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
    <div class="card-premium h-100">
        <div class="card-img-wrapper">
            <img src="{{ asset('storage/'.$brt->gambar_berita) }}" alt="{{ $brt->title }}" class="hover-scale">
        </div>
        <div class="card-body text-start d-flex flex-column p-4">
            <div class="d-flex align-items-center text-muted small mb-3 poppins-medium">
                            <i class="ph-bold ph-calendar-blank me-2 text-primary"></i>
                            {{ $brt->tanggal_berita->format('d M Y') }}
                        </div>
                        <h5 class="poppins-semibold mb-3 text-dark fs-5">
                            {{ Str::limit($brt->title, 60) }}
                        </h5>
                        <p class="text-muted mb-4 flex-grow-1" style="font-size: 14px;">
                            {{ Str::limit(strip_tags($brt->detail_berita), 100) }}
                        </p>
                        <a href="{{ route('berita.show', $brt->slug) }}" class="text-primary text-decoration-none poppins-semibold d-inline-flex align-items-center">
                            Baca Selengkapnya <i class="ph-bold ph-arrow-right ms-2"></i>
                        </a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="text-center mt-5" data-aos="fade-up">
            <a href="{{ route('berita.index') }}" class="btn btn-gradient px-4 py-3 poppins-bold">
                Lihat Semua Berita <i class="ph-bold ph-newspaper ms-2"></i>
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
