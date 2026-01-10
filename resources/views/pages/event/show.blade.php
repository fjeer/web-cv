@extends('layouts.app')

@section('title', 'course-detail')

{{-- ================= HERO ================= --}}
@section('hero')
<section class="hero-section">
    <img src="{{ asset('images/banner.png') }}"
         class="w-100"
         style="object-fit: cover; max-height: 420px;"
         alt="Banner Event">
</section>
@endsection

{{-- ================= CONTENT ================= --}}
@section('content')
<div class="container my-5">

    {{-- ===== HEADER EVENT ===== --}}
    <div class="row align-items-center mb-5">
        <div class="col-md-2 text-center">
            <img src="{{ asset('images/image2.png') }}"
                 class="img-fluid rounded"
                 alt="Event Image">
        </div>

        <div class="col-md-5">
            <a href="#" class="tombolevent btn my-3">
                Seminar
            </a>

            <h4 class="fw-bold mb-1">
                Siap Kerja di Era Digital Bangun Karier IT dari Sekarang
            </h4>

            <p class="mb-0 text-muted">
                by <span class="fw-semibold">SigmaTech</span>
            </p>
        </div>

        <div class="col-md-1"></div>

        <div class="col-md-4">
            <p class="mb-1">Terbuka Hingga :</p>
            <h5 class="fw-bold mb-3">25 Desember 2025</h5>

            <p class="mb-1">Sisa Kuota :</p>
            <h5 class="fw-bold">15 Peserta</h5>
        </div>
    </div>

    {{-- ===== MAIN CONTENT ===== --}}
    <div class="row">

        {{-- ===== LEFT CONTENT ===== --}}
        <div class="col-md-8">

            <hr class="border-2 border-secondary">

            <h4 class="fw-bold mt-4 mb-3">Deskripsi Event</h4>
            <p>
                Seminar ini dirancang untuk membantu pelajar, mahasiswa, dan pemula
                di bidang teknologi memahami bagaimana memulai serta membangun karier
                di industri IT yang terus berkembang.
            </p>

            <p>
                Peserta akan mempelajari berbagai jalur karier seperti
                <strong>Network Engineer</strong>,
                <strong>Web Developer</strong>,
                <strong>Cyber Security</strong>,
                dan <strong>Technical Support</strong>,
                termasuk skill yang dibutuhkan untuk menembus dunia kerja modern.
            </p>

            <p>
                Acara dikemas santai namun informatif, dilengkapi sesi tanya jawab,
                sharing pengalaman kerja, dan networking antarpeserta.
            </p>

            <hr class="border-2 border-secondary my-5">

            <h4 class="fw-bold mb-3">Rundown Acara</h4>
            <ul class="list-unstyled">
                <li>08:00 | Registrasi Peserta</li>
                <li>09:00 | Pembukaan</li>
                <li>09:30 | Materi Utama</li>
                <li>11:00 | Sharing Session</li>
                <li>12:00 | Ishoma</li>
                <li>13:00 | Q&A</li>
                <li>14:00 | Networking</li>
                <li>15:00 | Penutupan</li>
            </ul>

        </div>

        {{-- ===== RIGHT SIDEBAR ===== --}}
        <div class="col-md-4">
            <div class="card custom-card">
                <div class="card-body">

                    <h5 class="fw-bold text-primary mb-4">
                        Informasi Event
                    </h5>

                    <h6 class="fw-bold mb-2">Partisipasi</h6>
                    <p>
                        Silakan masuk terlebih dahulu ke SigmaTech
                        untuk dapat mendaftar ke event ini.
                    </p>

                    <div class="text-center mb-4">
                        <a href="#" class="tombolkuning btn px-4">
                            Masuk
                        </a>
                    </div>

                    <h6 class="fw-bold mb-2">Jadwal Pelaksanaan</h6>
                    <p class="mb-1">Tanggal: 25 Desember 2025</p>
                    <p>Waktu: 08:00 – Selesai</p>

                    <h6 class="fw-bold mb-2">Lokasi</h6>
                    <p class="text-primary mb-1">
                        Gedung Pelatihan SigmaTech
                    </p>
                    <p>
                        Ruang Seminar Lantai 2<br>
                        Jl. Teknologi Maju No. 12, Probolinggo
                    </p>

                </div>
            </div>
        </div>

    </div>

</div>
@endsection