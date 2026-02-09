@extends('layouts.app')

@section('title','courses')

@section('content')

<section class="hero-section" style="background-image: url('{{ asset('images/banner4.png') }}'); background-size: cover; background-position: center; height: 425px; display: flex; align-items: center;" data-aos="fade-zoom-in">
    <div class="container py-5">
        <div class="col-lg-6 col-md-8" data-aos="fade-right">
            <h2 class="fw-bold mb-3">Kelas Industri SigmaTech</h2>
            <p class="mb-4">
                Belajar langsung bersama mentor berpengalaman dan kuasai keterampilan yang dibutuhkan dunia kerja modern.
            </p>
            <div class="d-flex gap-3">
                <a href="https://wa.me/+6282144356926" target="_blank" class="btn btn-primary custom-left-btn mt-5">Daftar Sekarang</a>

                <a href="https://wa.me/+6282144356926" target="_blank" class="btn btn-outline-primary custom-right-btn mt-5">Hubungi Kami</a>

            </div>
        </div>
    </div>
</section>

<div class="container-fluid py-4" style="background: #264570" data-aos="fade-up">

    <div class="container p-3" data-aos="fade-up">
        <div class="row">
            <div class="col-md-3 d-flex align-items-center gap-3">
                <img src="{{ asset('images/school.png') }}" alt="school logo" style="width: 50px">
                <div>
                    <h3 class="text-white fw-bold mb-0">25 +</h3>
                    <span class="text-white fw-light">Sekolah bergabung</span>
                </div>
            </div>

            <div class="col-md-3 d-flex align-items-center gap-3">
                <img src="{{ asset('images/graduet.png') }}" alt="graduation logo" style="width: 50px">
                <div>
                    <h3 class="text-white fw-bold mb-0">457 +</h3>
                    <span class="text-white fw-light">Alumni Kelas Industri</span>
                </div>
            </div>

            <div class="col-md-3 d-flex align-items-center gap-3">
                <img src="{{ asset('images/presentation.png') }}" alt="presentation logo" style="width: 50px">
                <div>
                    <h3 class="text-white fw-bold mb-0">13 +</h3>
                    <span class="text-white fw-light">Pilihan Bidang Kelas</span>
                </div>
            </div>

            <div class="col-md-3 d-flex align-items-center gap-3">
                <img src="{{ asset('images/siswa.png') }}" alt="siswa logo" style="width: 50px">
                <div>
                    <h3 class="text-white fw-bold mb-0">1.500 +</h3>
                    <span class="text-white fw-light">Siswa Kelas Industri</span>
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
                <img src="{{ asset('images/img-industri.jpg') }}" alt="industri img" class="img-fluid rounded-circle" style="width:350px;height:350px;object-fit:cover;">
            </div>

            <!-- Keunggulan -->
            <div class="col-md-8">
                <h4 class="fw-bold mb-4">Keunggulan Kelas Industri <span style="color: #3399CC;">SigmaTech.</span></h4>
                <p>
                    Kelas Industri SigmaTech adalah program pembelajaran intensif berbasis praktik yang
                    mengombinasikan project based learning, pendampingan langsung, dan kurikulum yang selaras dengan kebutuhan perusahaan.
                    <br><br>
                    Peserta tidak hanya belajar teori tetapi membangun proyek nyata yang dapat dijadikan portofolio profesional.
                </p>

                <div class="row mt-4 g-3">
                    @php
                    $keunggulan = [
                    ['library.png','Kurikulum Berbasis Industri','Disesuaikan dengan kebutuhan perusahaan IT.'],
                    ['kbm.png','Belajar Secara Langsung','Pendampingan langsung oleh instruktur profesional.'],
                    ['kantor.png','Project & Portofolio Nyata','Setiap Peserta membangun proyek siap pakai.'],
                    ['sertif.png','Sertifikan Resmi','Menambah nilai saat melamar kerja.'],
                    ]
                    @endphp
                    @foreach ($keunggulan as $k )

                    <div class="col-md-6 col-sm-6">
                        <div class="card p-3 bg-primary bg-opacity-25" style="border-radius: 8px;">
                            <div class="d-flex gap-2">
                                <img src="{{ asset('images/'.$k[0]) }}" alt="Logo" style="width:28px; height:28px; margin-right:5px;">
                                <div>
                                    <h6 class="text-primary mb-0 fw-bold" style="font-size:14px;">{{ $k[1] }}</h6>
                                    <p class="text-muted" style="font-size:12px; margin-bottom:0;">{{ $k[2] }}</p>
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

    <div class="fw-bold text-center">
        <h1>Manfaat yang Didapatkan Sekolah <br>
            Ketika Mengikuti Kelas Industri <span style="color: #3399CC;">SigmaTech.</span>
        </h1>
    </div>

    <div class="card p-5" style="border-radius:30px">

        <div class="row align-items-center">
            <div class="col-md-7">
                <div class="row g-3">
                    @php
                    $manfaat = [
                    ['img'=>'image 20.png','title'=>'Kemitraan Resmi Industri','desc'=>'Membantu sekolah mengembangkan Business Center berbasis layanan teknologi dan produk digital. Sekolah mendapatkan dukungan langsung dari SigmaTech sebagai partner industri di bidang IT.'],
                    ['img'=>'image 21.png','title'=>'Instruktur Berpengalaman','desc'=>'Membantu sekolah mengembangkan Business Center berbasis layanan teknologi dan produk digital.'],
                    ['img'=>'image 22.png','title'=>'Kontribusi Akreditasi','desc'=>'Program industri berstandar profesional ini dapat menjadi nilai tambahan dalam penilaian akreditasi sekolah.'],
                    ['img'=>'image 23.png','title'=>'Lulusan Lebih Kompetitif','desc'=>'Meningkatkan peluang siswa terserap di dunia kerja karena keterampilan yang sesuai kebutuhan industri.'],
                    ];
                    @endphp

                    @foreach($manfaat as $m)
                    <div class="col-12 mb-2">
                        <div class="card d-flex align-items-start bg-transparent border-0 shadow-none">
                            <div class="d-flex gap-3">
                                <img src="{{ asset('images/'.$m['img']) }}" alt="Logo" class="img-industri" style="width:75px">
                                <div>
                                    <h6 class="text-primary mb-1">{{ $m['title'] }}</h6>
                                    <p class="mb-0" style="font-size:13px;">{{ $m['desc'] }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="col-md-4">

                <img src="{{ asset('images/img-kelasind.jpg') }}" alt="Galeri" class="img-fluid mb-3" style="width:450px; height:350px; object-fit:cover; border-radius:30px;">

                <div class="border-top border-2 border-secondary mt-4"></div>
            </div>
        </div>
    </div>

</div>

</div>

<!-- Section Call to Action -->
<section class="call-to-action" style="background: white">
    <div class="container py-5">
        <div class="row align-items-center">
            <div class="col-md-6">
                <h2 class="fw-bold mb-3">Wujudkan Lulusan yang Siap Bersaing di Dunia Industri</h2>
                <p class="mb-4">
                    Tidak perlu lagi bingung menyusun pembelajaran yang sesuai kebutuhan dunia kerja.
                    Program Kelas Industri SigmaTech hadir sebagai mitra strategis untuk membantu sekolah menghadirkan pembelajaran relevan, terarah, dan berbasis praktik nyata sehingga siswa lebih siap untuk Bekerja, Melanjutkan studi, maupun Berwirausaha.
                </p>
                <div class="d-flex gap-3">
                    <a href="#" class="btn mt-5 kuning-round">Daftar Sekarang</a>
                    <a href="#" class="btn btn-primary custom-left-btn mt-5">Hubungi Kami</a>
                </div>
            </div>
            <div class="col-md-4 text-end">
                <img src="{{ asset('images/img-kerja.jpg') }}" class="d-flex align-items-center justify-content-center" style="width:450px; height:450px; border-radius: 25px;" alt="">
            </div>
        </div>
    </div>

    <!-- Section Join Now -->
    <div class="text-center py-5">
        <h1>Ayo Bergabung di Kelas Industri SigmaTech!</h1>
        <p>Bangun keterampilan, portofolio, dan masa depan kariermu mulai dari sekarang.</p>
    </div>

</section>

@endsection
