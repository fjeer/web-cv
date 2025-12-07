@extends('layouts.app')

@section('title','course-detail')

@section('hero')

<img src="{{ asset('images/banner.png') }}" class="hero-section" alt="">

@endsection
@section('content')

<div class="row mt-0">
    <div class="col-md-2">
        <img src="{{ asset('images/image2.png') }}" class="" alt="">
    </div>
    <div class="col-md-5">
        <div class="card-body">
            <a href="#" class=" tombolevent btn rounded-4xl my-3">
                Seminar
            </a>
            <h5 class="card-title mb-1">Siap Kerja di Era Digital Bangun Karier IT dari Sekarang</h5>
            <p class="mb-1 text-start">by SigmaTech</p>
        </div>
    </div>
    <div class="col-md-1">

    </div>
    <div class="col-md-2 mt-3">
        <p>Terbuka Hingga :</p>
        <h5>25 Desember 2025</h5>
        <p>Sisa Kuota :</p>
        <h5>15 Peserta</h5>
    </div>
</div>
<div class="row d-flex mt-5">
    <div class="col-md-8 h-100">
        <div class=" mb-5 pb-5">
            
            <div class="border-top border-2 border-secondary mb-5"></div>
            <div class="py-2">
                <h4 class="fw-bold mb-2">Deskripsi Event</h4>
                <p>
                    
                    Seminar ini dirancang untuk membantu pelajar, mahasiswa, dan pemula di bidang teknologi memahami bagaimana memulai serta membangun karier di industri IT yang terus berkembang. Peserta akan mempelajari berbagai jalur karier seperti Network Engineer, Web Developer, Cyber Security, dan Technical Support beserta skill apa saja yang dibutuhkan untuk menembus dunia kerja modern.

                    Dalam seminar ini, peserta juga akan memperoleh wawasan langsung dari praktisi industri mengenai tren teknologi terbaru, tips membangun portofolio, cara menyiapkan CV & LinkedIn profesional, hingga strategi agar lebih cepat diterima kerja.
                    Acara dikemas santai namun informatif, disertai sesi tanya jawab interaktif, mini sharing pengalaman kerja, dan networking dengan peserta lainnya. Cocok untuk siapa pun yang ingin memulai langkah nyata di dunia IT.
                </p>
                <div class="border-top border-2 border-secondary mb-5"></div>

            
                <h4 class="fw-bold mb-2">Rundown Acara</h4>
                <ul class="list-unstyled">
                    <li>jam | kegiatan</li>
                    <li>jam | kegiatan</li>
                    <li>jam | kegiatan</li>
                    <li>jam | kegiatan</li>
                    <li>jam | kegiatan</li>
                    <li>jam | kegiatan</li>
                    <li>jam | kegiatan</li>
                    <li>jam | kegiatan</li>
                </ul>
            </div>
            
        </div>
    </div>
    <div class="col-md-4 h-100">
        <div class="card custom-card">
            <div class="card-body">
                <h5 class="fw-bold mt-4 mb-4 text-primary">Informasi Event :</h3>
                <h5 class="mb-3">Pertisipasi</h5>
                <p>Silakan masuk dahulu ke SigmaTech untuk dapat mendaftar ke event ini.</p>
                <div class="text-center">
                <a href="#" class=" tombolkuning btn my-3" >
                    Masuk
                </a>
                </div>
                <h5 class="mb-3">Jadwal Pelaksanaan</h5>
                <p>Tanggal 25 Desember 2025</p>
                <p>Waktu 08:00 - Selesai</p>
                <h5 class="mb-3">Lokasi</h5>
                <p class="text-primary">Gedung Pelatihan SigmaTech, Ruang Seminar Lantai 2</p>
                <p>Jl. Teknologi Maju No. 12, Probolinggo</p>
            </div>
        </div>
    </div>
    </div>

</div>

@endsection