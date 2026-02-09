@extends('layouts.app')

@section('title', 'event-detail')

{{-- ================= CONTENT ================= --}}
@section('content')

<section class="hero-section">
    <img src="{{ asset('storage/' . $event->gambar_event) }}" class="w-100" style="object-fit: cover; max-height: 420px;" alt="Banner Event">
</section>

<div class="container my-5">

    {{-- ===== HEADER EVENT ===== --}}
    <div class="row align-items-center mb-5">
        <div class="col-md-2 text-center">
            <img src="{{ asset('storage/' . $event->gambar_event) }}"
                 class="img-fluid rounded"
                 alt="Event Image"
                 style="max-height: 150px; object-fit: cover;">
        </div>

        <div class="col-md-5">
            <span class="tombolevent btn my-3">
                {{ $event->kategori->nama_kategori }}
            </span>

            <h4 class="fw-bold mb-1">
                {{ $event->title }}
            </h4>

            <p class="mb-0 text-muted">
                by <span class="fw-bolder">SigmaTech</span>
            </p>
        </div>

        <div class="col-md-1"></div>

        <div class="col-md-4">
            <p class="mb-1">Terbuka Hingga :</p>
            @if($isOpen)
            <h5 class="fw-bold mb-3">
                {{ $event->tanggal_event->translatedFormat('d F Y') }}
            </h5>
            @else
            <span class="badge bg-danger">Pendaftaran Ditutup</span>
            @endif

            <p class="mb-1">Sisa Kuota :</p>
            <h5 class="fw-bold">{{ $event->kuota }}</h5>
        </div>
    </div>

    {{-- ===== MAIN CONTENT ===== --}}
    <div class="row">

        {{-- ===== LEFT CONTENT ===== --}}
        <div class="col-md-8">

            <hr class="border-2 border-secondary">

            <h4 class="fw-bold mt-4 mb-3">Deskripsi Event</h4>
            {!! $event->detail_event !!}

        </div>

        {{-- ===== RIGHT SIDEBAR ===== --}}
        <div class="col-md-4">
            <div class="card custom-card">
                <div class="card-body">

                    <h5 class="fw-bold text-primary mb-4">
                        Informasi Event
                    </h5>

                    <h6 class="fw-bold mb-2">Partisipasi</h6>
                    @if($isOpen)
                        <p>
                            Silakan mendaftar ke event ini.
                        </p>

                        <div class="text-center mb-4">
                            <a href="" class="tombolkuning btn px-4">
                                Ikuti Event
                            </a>
                        </div>
                    @else
                    <div class="text-center mb-4">
                        <span class="btn btn-outline-danger">Pendaftaran Ditutup</span>

                    </div>
                       
                    @endif
                    

                    <h6 class="fw-bold mb-2">Jadwal Pelaksanaan</h6>
                    <p class="mb-1">Tanggal: {{ $event->tanggal_event->translatedFormat('d F Y') }}</p>
                    <p>Waktu: 08:00 – Selesai</p>

                    <h6 class="fw-bold mb-2">Lokasi</h6>
                    <p class="text-primary mb-1">
                        {{ $event->lokasi }}
                    </p>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection