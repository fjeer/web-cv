@extends('layouts.app')

@section('title','courses')

@section('hero')
<div class="hero-section" style="background-image: url('{{ asset('images/banner4.png') }}');">
    <div class="container py-5">
        <div class="col-lg-6 col-md-8">
            <h2 class="fw-bold mb-3">Kelas Industri SigmaTech</h2>
            <p class="mb-4">
                Belajar langsung bersama mentor berpengalaman dan kuasai keterampilan yang dibutuhkan dunia kerja modern.
            </p>
            <div class="d-flex gap-3">
                <a href="#" class="btn btn-primary custom-left-btn mt-5">Daftar Sekarang</a>
                <a href="#" class="btn btn-outline-primary custom-right-btn mt-5">Hubungi Kami</a>
            </div>
        </div>
    </div>
</div>
@endsection

@section('content')

<!-- Section Keunggulan -->
<section class="d-flex align-items-center">
    <div class="container my-5">
        <div class="row align-items-start">
            <!-- Logo -->
            <div class="col-md-4 text-center">
                <img src="{{ asset('images/image.png') }}" alt="Sigmatech Logo" class="img-fluid" style="max-width: 300px;">
            </div>

            <!-- Keunggulan -->
            <div class="col-md-8">
                <h4 class="fw-bold mb-2">Keunggulan Kelas Industri <span style="color: #3399CC;">SigmaTech.</span></h4>
                <p>
                    Kelas Industri SigmaTech adalah program pembelajaran intensif berbasis praktik yang
                    mengombinasikan project based learning, pendampingan langsung, dan kurikulum yang selaras dengan kebutuhan perusahaan.
                    <br><br>
                    Peserta tidak hanya belajar teori tetapi membangun proyek nyata yang dapat dijadikan portofolio profesional.
                </p>

                <div class="row mt-5 g-3">
                    @for ($i = 0; $i < 4; $i++)
                    <div class="col-md-4 col-sm-6">
                        <div class="card text-center py-1 px-2 custom-card" style="border-radius: 8px;">
                            <div class="d-flex">
                                <img src="{{ asset('images/image 11.png') }}" alt="Logo" style="width:28px; height:28px; margin-right:5px;">
                                <h6 class="text-primary mb-0" style="font-size:14px;">Kurikulum Industri</h6>
                            </div>
                            <p style="font-size:12px; margin-bottom:0;">Sesuai kebutuhan perusahaan IT.</p>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Section Manfaat -->
<div class="fw-bold text-center mt-5 pt-5">
    <h1>Manfaat yang Didapatkan Sekolah <br>
        Ketika Mengikuti Kelas Industri <span style="color: #3399CC;">SigmaTech.</span>
    </h1>
</div>

<section class="min-vh-100 d-flex align-items-center mb-5">
    <div class="row w-100 align-items-center">
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
                    <div class="card p-3 d-flex align-items-start bg-transparent border-0 shadow-none">
                        <div class="d-flex">
                            <img src="{{ asset('images/'.$m['img']) }}" alt="Logo" class="img-industri">
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

        <div class="col-md-4 text-end">
            <img src="{{ asset('images/image1.png') }}" class="d-flex align-items-center justify-content-center" style="width:450px; height:450px; border-radius:50px;" alt="">
        </div>
    </div>
</section>

<!-- Section Call to Action -->
<section>
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
                <img src="{{ asset('images/image1.png') }}" class="d-flex align-items-center justify-content-center" style="width:450px; height:450px;" alt="">
            </div>
        </div>
    </div>
</section>

<!-- Section Join Now -->
<div class="text-center my-5 py-5">
    <h1>Ayo Bergabung di Kelas Industri SigmaTech!</h1>
    <p>Bangun keterampilan, portofolio, dan masa depan kariermu mulai dari sekarang.</p>
</div>

@endsection
