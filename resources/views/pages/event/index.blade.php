@extends('layouts.app')

@section('title', 'courses')

{{-- ================= HERO SECTION ================= --}}
@section('hero')
<section class="hero-section"
    style="background-image: url('{{ asset('images/banner3.png') }}'); background-size: cover; background-position: center;">
    <div class="container py-5">
        <div class="col-lg-6 col-md-8">
            <h2 class="fw-bold mb-3">
                Belajar Langsung, Bangun Koneksi, dan Rasakan Pengalaman Nyata Industri!
            </h2>

            <p class="mb-4">
                Ikuti berbagai event dan training luring yang interaktif dan aplikatif
                untuk meningkatkan skill, membangun koneksi, dan merasakan pengalaman nyata
                di dunia industri.
            </p>

            <h4 class="fw-bold">Event</h4>
        </div>
    </div>
</section>
@endsection

{{-- ================= CONTENT ================= --}}
@section('content')
<div class="container my-5">

    <h4 class="fw-bold mb-4">Daftar Events</h4>

    <section class="row">

        @for ($i = 1; $i <= 6; $i++)
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card h-100 p-2 custom-card">

                <img src="{{ asset('images/image1.png') }}"
                     class="card-img-top"
                     alt="Event">

                <div class="card-body">

                    <a href="{{ route('event.show', $i) }}"
                       class="tombolevent btn my-3">
                        Seminar
                    </a>

                    <h5 class="card-title mb-2">
                        Siap Kerja di Era Digital Bangun Karier IT dari Sekarang
                    </h5>

                    <p class="mb-3">
                        Temui pembicara profesional dari berbagai industri digital,
                        startup, dan dunia kerja.
                    </p>

                    <hr>

                    <div class="d-flex justify-content-between">
                        <span>Sisa Kuota 200</span>
                        <span>
                            <i class="bi bi-calendar-event"></i> 12 Jan 2025
                        </span>
                    </div>

                </div>
            </div>
        </div>
        @endfor

    </section>

    <div class="text-center mt-4">
        <a href="#" class="btn btn-primary px-4">
            Load More
        </a>
    </div>

</div>
@endsection
