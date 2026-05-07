@extends('layouts.app')

@section('title', 'event-detail')

{{-- ================= CONTENT ================= --}}
@section('content')

<section class="hero-bg w-100 position-relative" style="background-image: url('{{ asset('storage/' . $event->gambar_event) }}'); padding: 150px 0; background-position: center; background-size: cover;">
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark bg-opacity-75 z-index-1"></div>
    <div class="container position-relative z-index-2 pt-5">
        <a href="{{ route('event.index') }}" class="text-white text-decoration-none d-inline-flex align-items-center mb-4 poppins-medium hover-scale bg-white bg-opacity-10 px-3 py-2 rounded-pill border border-white border-opacity-25">
            <i class="ph-bold ph-arrow-left me-2"></i> Kembali ke Event
        </a>
    </div>
</section>

<div class="container site-main mb-5" style="margin-top: -80px; position: relative; z-index: 3;">

    {{-- ===== HEADER EVENT ===== --}}
    <div class="card custom-card border-0 p-4 mb-5 shadow-lg">
        <div class="row align-items-center">
            <div class="col-md-2 text-center text-md-start mb-4 mb-md-0">
                <img src="{{ asset('storage/' . $event->gambar_event) }}"
                     class="img-fluid rounded-4 shadow-sm"
                     alt="Event Image"
                     style="max-height: 150px; width: 100%; object-fit: cover;">
            </div>

            <div class="col-md-6 mb-4 mb-md-0">
                <span class="badge bg-primary-light text-primary px-3 py-2 poppins-medium rounded-pill mb-3">
                    <i class="ph-bold ph-tag me-1"></i> {{ $event->kategori->nama_kategori }}
                </span>

                <h3 class="poppins-bold mb-2 text-dark lh-base">
                    {{ $event->title }}
                </h3>

                <p class="mb-0 text-muted d-flex align-items-center">
                    <i class="ph-fill ph-users-three text-primary me-2 fs-5"></i>
                    Diadakan oleh <span class="poppins-semibold ms-1 text-dark">SigmaTech</span>
                </p>
            </div>

            <div class="col-md-4 border-start-md ps-md-4 border-primary border-opacity-25 mt-4 mt-md-0">
                <div class="d-flex flex-column gap-3">
                    <div class="bg-light rounded-3 p-3">
                        <p class="mb-1 text-muted small poppins-medium d-flex align-items-center">
                            <i class="ph-fill ph-calendar-blank text-primary me-2 fs-5"></i> Terbuka Hingga:
                        </p>
                        @if($isOpen)
                        <h5 class="poppins-bold mb-0 text-dark">
                            {{ $event->tanggal_event->translatedFormat('d F Y') }}
                        </h5>
                        @else
                        <span class="badge bg-danger px-3 py-2 poppins-medium">Pendaftaran Ditutup</span>
                        @endif
                    </div>

                    <div class="bg-light rounded-3 p-3">
                        <p class="mb-1 text-muted small poppins-medium d-flex align-items-center">
                            <i class="ph-fill ph-ticket text-primary me-2 fs-5"></i> Sisa Kuota:
                        </p>
                        <h5 class="poppins-bold text-success mb-0">{{ $event->kuota }} Kursi</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- ===== MAIN CONTENT ===== --}}
    <div class="row g-5">

        {{-- ===== LEFT CONTENT ===== --}}
        <div class="col-lg-8">
            <div class="card custom-card border-0 p-4 p-md-5 h-100">
                <h4 class="poppins-bold mb-4 pb-3 border-bottom d-flex align-items-center">
                    <i class="ph-bold ph-text-align-left text-primary me-2"></i> Deskripsi Event
                </h4>
                <div class="text-dark fs-6" style="line-height: 1.8;">
                    {!! $event->detail_event !!}
                </div>
            </div>
        </div>

        {{-- ===== RIGHT SIDEBAR ===== --}}
        <div class="col-lg-4">
            <div class="card custom-card border-0 p-4 bg-primary bg-opacity-10 position-sticky" style="top: 100px;">
                <div class="card-body p-0">
                    <h5 class="poppins-bold text-primary mb-4 pb-3 border-bottom border-primary border-opacity-25 d-flex align-items-center">
                        <i class="ph-bold ph-info me-2"></i> Informasi Event
                    </h5>

                    <h6 class="poppins-semibold text-dark mb-2">Partisipasi</h6>
                    @if($isOpen)
                        <p class="text-muted small poppins-medium mb-4">
                            Silakan mendaftar ke event ini untuk mengamankan kursi Anda.
                        </p>

                        <div class="d-grid mb-4">
                            <a href="{{ route('daftar.index', ['event_id' => $event->id]) }}" class="btn btn-secgradient text-white py-3 fs-6 rounded-pill poppins-bold shadow-sm hover-up">
                                <i class="ph-bold ph-ticket me-1"></i> Ikuti Event Sekarang
                            </a>
                        </div>
                    @else
                        <div class="d-grid mb-4">
                            <span class="btn btn-secondary py-3 poppins-bold rounded-pill text-white shadow-sm opacity-75">
                                <i class="ph-bold ph-prohibit me-1"></i> Event Berakhir
                            </span>
                        </div>
                    @endif

                    <div class="bg-white rounded-3 p-3 shadow-sm mb-3 mt-2 border border-light">
                        <h6 class="poppins-semibold text-dark mb-3 d-flex align-items-center">
                            <i class="ph-fill ph-calendar text-primary me-2"></i> Jadwal Pelaksanaan
                        </h6>
                        <div class="d-flex align-items-center mb-2">
                            <i class="ph-bold ph-calendar-blank text-muted me-2"></i>
                            <span class="text-muted small poppins-medium">{{ $event->tanggal_event->translatedFormat('d F Y') }}</span>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="ph-bold ph-clock text-muted me-2"></i>
                            <span class="text-muted small poppins-medium">08:00 – Selesai</span>
                        </div>
                    </div>

                    <div class="bg-white rounded-3 p-3 shadow-sm border border-light">
                        <h6 class="poppins-semibold text-dark mb-3 d-flex align-items-center">
                            <i class="ph-fill ph-map-pin text-primary me-2"></i> Lokasi
                        </h6>
                        <div class="d-flex align-items-start">
                            <i class="ph-bold ph-map-trifold text-muted me-2 mt-1"></i>
                            <span class="text-primary small poppins-medium lh-lg">
                                {{ $event->lokasi }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
