@extends('layouts.app')

@section('title','courses')

@section('content')

<section class="hero-bg w-100" style="background-image: url('{{ asset('images/banner4.webp') }}'); padding: 120px 0 80px 0;" data-aos="fade-zoom-in">
    <div class="container py-5 position-relative z-index-2">
        <div class="col-lg-6 col-md-8 text-white" data-aos="fade-right">
            <h2 class="poppins-semibold mb-3 display-5">Kelas Industri <span class="text-warning">SigmaTech</span></h2>
            <p class="mb-4 fs-5 text-white-50">
                Belajar langsung bersama mentor berpengalaman dan kuasai keterampilan yang dibutuhkan dunia kerja modern.
            </p>
            <div class="responsive-cta-group mt-5">
                <a href="https://wa.me/62895639055084" target="_blank" class="btn btn-gradient px-4 py-3 poppins-semibold shadow-lg">
                    <i class="ph-bold ph-rocket-launch me-2"></i> Daftar Sekarang
                </a>
                <a href="https://wa.me/62895639055084" target="_blank" class="btn btn-outline-premium bg-transparent text-white border-white px-4 py-3 poppins-semibold ms-md-3 mt-3 mt-md-0 shadow-lg hover-scale">
                    <i class="ph-bold ph-chat-circle-dots me-2"></i> Hubungi Kami
                </a>
            </div>
        </div>
    </div>
</section>

<div class="container-fluid py-5" style="background-color: var(--color-primary-dark);" data-aos="fade-up">
    <div class="container" data-aos="fade-up">
        <div class="row g-4 justify-content-center">
            <div class="col-lg-3 col-md-6 d-flex align-items-center gap-3 bg-white bg-opacity-10 p-4 rounded-3 hover-up">
                <i class="ph-fill ph-buildings text-accent display-4"></i>
                <div>
                    <h3 class="text-white poppins-bold mb-0">25+</h3>
                    <span class="text-white-50 poppins-medium">Sekolah Bergabung</span>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-center gap-3 bg-white bg-opacity-10 p-4 rounded-3 hover-up">
                <i class="ph-fill ph-graduation-cap text-accent display-4"></i>
                <div>
                    <h3 class="text-white poppins-bold mb-0">457+</h3>
                    <span class="text-white-50 poppins-medium">Alumni Industri</span>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-center gap-3 bg-white bg-opacity-10 p-4 rounded-3 hover-up">
                <i class="ph-fill ph-chalkboard-teacher text-accent display-4"></i>
                <div>
                    <h3 class="text-white poppins-bold mb-0">13+</h3>
                    <span class="text-white-50 poppins-medium">Pilihan Bidang</span>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-center gap-3 bg-white bg-opacity-10 p-4 rounded-3 hover-up">
                <i class="ph-fill ph-users-three text-accent display-4"></i>
                <div>
                    <h3 class="text-white poppins-bold mb-0">1.500+</h3>
                    <span class="text-white-50 poppins-medium">Siswa Bergabung</span>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Section Keunggulan -->
<section class="keunggulan-section" style="background: white">
    <div class="container py-5">
        <div class="row align-items-start mt-5">
            <!-- Logo -->
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/img-industri.webp') }}" alt="industri img" class="img-fluid rounded-circle" style="width:350px;height:350px;object-fit:cover;">
            </div>

            <!-- Keunggulan -->
            <div class="col-md-8">
                <h4 class="poppins-semibold mb-4">Keunggulan Kelas Industri <span style="color: #3399CC;">SigmaTech.</span></h4>
                <p>
                    Kelas Industri SigmaTech adalah program pembelajaran intensif berbasis praktik yang
                    mengombinasikan project based learning, pendampingan langsung, dan kurikulum yang selaras dengan kebutuhan perusahaan.
                    <br><br>
                    Peserta tidak hanya belajar teori tetapi membangun proyek nyata yang dapat dijadikan portofolio profesional.
                </p>

                <div class="row mt-4 g-3">
                    @php
                    $keunggulan = [
                    ['ph-books', 'Kurikulum Berbasis Industri', 'Disesuaikan dengan kebutuhan perusahaan IT.'],
                    ['ph-chalkboard-teacher', 'Belajar Secara Langsung', 'Pendampingan langsung profesional.'],
                    ['ph-briefcase', 'Project & Portofolio Nyata', 'Setiap Peserta membangun proyek siap pakai.'],
                    ['ph-certificate', 'Sertifikat Resmi', 'Menambah nilai saat melamar kerja.'],
                    ]
                    @endphp
                    @foreach ($keunggulan as $k )
                    <div class="col-md-6 col-sm-6" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                        <div class="card custom-card p-4 h-100 border-0 bg-white">
                            <div class="d-flex align-items-start gap-3">
                                <div class="bg-primary-light p-3 rounded-circle text-primary">
                                    <i class="ph-fill {{ $k[0] }} fs-3"></i>
                                </div>
                                <div>
                                    <h6 class="text-dark mb-2 poppins-semibold">{{ $k[1] }}</h6>
                                    <p class="text-muted poppins-regular small mb-0">{{ $k[2] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Manfaat -->
<div class="container py-5">

    <div class="poppins-semibold text-center mb-5" data-aos="fade-up">
        <h2 class="display-6 poppins-bold">Manfaat yang Didapatkan Sekolah <br>
            Ketika Mengikuti Kelas Industri <span class="text-primary">SigmaTech.</span>
        </h2>
    </div>

    <div class="card custom-card p-md-5 p-4 border-0" data-aos="fade-up" data-aos-delay="200">
        <div class="row align-items-center">
            <div class="col-lg-7">
                <div class="row g-4">
                    @php
                    $manfaat = [
                    ['icon'=>'ph-handshake','title'=>'Kemitraan Resmi Industri','desc'=>'Membantu sekolah mengembangkan Business Center berbasis layanan teknologi dan produk digital. Sekolah mendapatkan dukungan langsung dari SigmaTech.'],
                    ['icon'=>'ph-user-focus','title'=>'Instruktur Berpengalaman','desc'=>'Tim praktisi industri siap memberikan bimbingan sesuai studi kasus di lapangan nyata.'],
                    ['icon'=>'ph-medal','title'=>'Kontribusi Akreditasi','desc'=>'Program industri berstandar profesional ini dapat menjadi nilai tambahan dalam penilaian akreditasi sekolah.'],
                    ['icon'=>'ph-trend-up','title'=>'Lulusan Lebih Kompetitif','desc'=>'Meningkatkan peluang siswa terserap di dunia kerja karena keterampilan yang sesuai kebutuhan industri.'],
                    ];
                    @endphp

                    @foreach($manfaat as $m)
                    <div class="col-md-6 mb-3">
                        <div class="d-flex align-items-start gap-3">
                            <div class="bg-warning bg-opacity-10 p-3 rounded-circle text-accent flex-shrink-0">
                                <i class="ph-fill {{ $m['icon'] }} fs-2"></i>
                            </div>
                            <div>
                                <h6 class="poppins-semibold text-dark mb-2">{{ $m['title'] }}</h6>
                                <p class="text-muted small mb-0 lh-lg">{{ $m['desc'] }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="col-lg-5 text-center mt-5 mt-lg-0">
                <div class="position-relative d-inline-block hover-scale">
                    <img src="{{ asset('images/img-kelasind.webp') }}" alt="Galeri" class="img-fluid responsive-media-frame shadow-lg" style="width:100%; max-width:400px; height:450px; object-fit:cover; border-radius: var(--radius-xl);">
                    <div class="position-absolute top-0 start-0 w-100 h-100 rounded-circle" style="background: radial-gradient(circle, transparent 40%, rgba(50,153,205,0.1) 100%); pointer-events:none; border-radius: var(--radius-xl);"></div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>

<section class="call-to-action pb-5">
    <div class="container py-5">
        <div class="row align-items-center" data-aos="fade-up">
            <div class="col-lg-6">
                <h2 class="poppins-semibold mb-4 display-6 text-dark">Wujudkan Lulusan yang Siap Bersaing di Dunia Industri</h2>
                <p class="mb-4 text-muted fs-5 lh-lg">
                    Tidak perlu lagi bingung menyusun pembelajaran yang sesuai kebutuhan dunia kerja.
                    Program Kelas Industri <span class="text-primary poppins-semibold">SigmaTech</span> hadir sebagai mitra strategis untuk membantu sekolah menghadirkan pembelajaran relevan, terarah, dan berbasis praktik nyata sehingga siswa lebih siap untuk Bekerja, Melanjutkan studi, maupun Berwirausaha.
                </p>
                <div class="responsive-cta-group mt-4">
                    <a href="https://wa.me/62895639055084" target="_blank" class="btn btn-secgradient px-4 py-3 poppins-semibold shadow-md">
                        <i class="ph-bold ph-rocket-launch me-2"></i> Daftar Sekarang
                    </a>
                    <a href="https://wa.me/62895639055084" target="_blank" class="btn btn-outline-premium px-4 py-3 poppins-semibold shadow-sm ms-md-3 mt-3 mt-md-0">
                        <i class="ph-bold ph-chat-circle-dots me-2"></i> Hubungi Kami
                    </a>
                </div>
            </div>
            <div class="col-lg-6 text-center mt-5 mt-lg-0">
                <img src="{{ asset('images/img-kerja.webp') }}" class="responsive-media-frame is-circle shadow-lg hover-scale" style="width:450px; height:450px; object-fit:cover; border: 15px solid var(--color-bg);" alt="">
            </div>
        </div>
    </div>

    <!-- Section Join Now -->
    <div class="container mt-5" data-aos="fade-up" data-aos-delay="200">
        <div class="cardcur text-center p-5 mx-auto" style="max-width: 900px;">
            <h2 class="poppins-bold mb-3 display-6">Ayo Bergabung di Kelas Industri SigmaTech!</h2>
            <p class="fs-5 text-white-50">Bangun keterampilan, portofolio, dan masa depan kariermu mulai dari sekarang.</p>
        </div>
    </div>
</section>

@endsection
