@extends('layouts.app')

@section('title', 'events')

{{-- ================= HERO SECTION ================= --}}
@section('hero')
<section class="hero-section" style="background-image: url('{{ asset('images/banner3.png') }}'); background-size: cover; background-position: center;">
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

        @foreach ( $event as $e )

        <div class="col-md-4 col-sm-6 mb-4">

            <div class="card h-100 p-2 custom-card">
                <a href="{{ route('event.show', $e->slug) }}" class="text-decoration-none">
                    <img src="{{ asset('images/image1.png') }}" class="card-img-top" alt="Event">
                    <div class="card-body">

                        <span class="tombolevent btn my-3">
                            {{ $e->kategori->nama_kategori }}
                        </span>

                        <a href="{{ route('event.show', $e->slug) }}" class="text-decoration-none text-black fw-medium">
                            <h5 class="card-title mb-2">
                                {{ $e->title }}
                            </h5>
                        </a>

                        <p class="mb-3">
                            {{ Str::limit($e->detail_event, 100, '...') }}
                        </p>
                        <hr>
                        <div class="d-flex justify-content-between">
                            <span>Sisa Kuota {{ $e->kuota }}</span>
                            <span>
                                <i class="bi bi-calendar-event"></i> {{ $e->tanggal_event->translatedFormat('d M Y') }}
                            </span>
                        </div>

                    </div>
                </a>
            </div>
        </div>

        @endforeach

    </section>

    <div class="text-center mt-4">
        {{ $event->links() }}
    </div>

</div>
@endsection
