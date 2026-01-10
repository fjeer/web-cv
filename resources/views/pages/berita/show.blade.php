@extends('layouts.app')

@section('title', 'course-detail')

@section('content')
<div class="container my-5">

    <!-- Back Button -->
    <a href="{{ route('berita.index') }}" class="btn mb-4">
        ← Kembali
    </a>

    <!-- Title -->
    <h1 class="fw-bold mb-3">
        Cloudflare Alami Gangguan, X Juga Mengalami Pemadaman
    </h1>

    <!-- Meta Info -->
    <div class="d-flex justify-content-between align-items-center text-muted mb-4">
        <span>Bustomi</span>
        <span>
            <i class="bi bi-calendar-event"></i> 12 Jan 2025
        </span>
    </div>

    <!-- Thumbnail -->
    <img
        src="{{ asset('images/image1.png') }}"
        alt="Cloudflare Gangguan"
        class="img-fluid rounded-4 mb-5"
    >

    <!-- Content -->
    <article class="content">

        <p>
            Platform media sosial milik Elon Musk, X (sebelumnya Twitter) mengalami pemadaman besar
            yang memengaruhi ribuan pengguna di Amerika Serikat pada Selasa pagi. Menurut situs
            pelacak pemadaman Downdetector.com, lebih dari 5.200 pengguna melaporkan masalah dengan X
            pada pukul 18:55 WIB.
        </p>

        <p>
            Secara bersamaan, perusahaan infrastruktur web Cloudflare juga mengalami masalah teknis
            yang memengaruhi layanan online lainnya. Belum jelas apakah pemadaman X dan masalah
            Cloudflare saling terkait.
        </p>

        <p>
            Cloudflare mengakui situasi tersebut di halaman statusnya sekitar pukul 18:40 WIB,
            dengan menyatakan bahwa mereka sedang bekerja untuk memahami dampak penuh dan
            mengatasi masalah tersebut.
        </p>

        <p>
            Kesulitan teknis ini berdampak pada sentimen investor, dengan saham Cloudflare turun
            4,1% dalam perdagangan pra-pasar.
        </p>

        <h3 class="fw-bold mt-5 mb-3">
            Cloudflare Gangguan Kecil Kemungkinan karena Serangan Siber
        </h3>

        <p>
            Selama perbaikan, layanan enkripsi Warp di London sempat dinonaktifkan, menyebabkan
            gagal koneksi bagi sebagian pengguna. Cloudflare menyebut penyebab gangguan berasal
            dari file konfigurasi otomatis yang membesar melebihi ukuran normal.
        </p>

        <p>
            Lonjakan lalu lintas terdeteksi sekitar pukul 05.20 WIB. Perusahaan menegaskan tidak ada
            indikasi serangan siber atau aktivitas berbahaya.
        </p>

        <p>
            Cloudflare mengelola sekitar 20% situs web global dan memainkan peran penting dalam
            melindungi internet dari serangan DDoS. Gangguan ini kembali mengingatkan pentingnya
            pemeliharaan infrastruktur digital.
        </p>

    </article>

</div>
@endsection
