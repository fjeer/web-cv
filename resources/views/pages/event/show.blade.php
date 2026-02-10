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
                 class="img-fluid"
                 alt="Event Image"
                 style="max-height: 150px; object-fit: cover;">
        </div>

        <div class="col-md-5">
            <span class="btn btn-outline-primary my-3">
                {{ $event->kategori->nama_kategori }}
            </span>

            <h4 class="poppins-semibold mb-1">
                {{ $event->title }}
            </h4>

            <p class="mb-0 text-muted">
                by <span class="poppins-medium">SigmaTech</span>
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
            <div class="card bg-primary bg-opacity-10" style="color: #1e2e49; border-radius: 20px; box-shadow:5px 5px 5px rgb(0, 0, 0, 0.6); border: solid 1px #3399CC;">
                <div class="card-body">

                    <h5 class="poppins-semibold text-primary mb-4">
                        Informasi Event
                    </h5>

                    <h6 class="poppins-medium mb-2">Partisipasi</h6>
                    @if($isOpen)
                        <p>
                            Silakan mendaftar ke event ini.
                        </p>

                        <div class="text-center mb-4">
                            <a href="" class="btn kuning-round px-5 py-3 my-3 fs-6 poppins-semibold">
                                Ikuti Event
                            </a>
                        </div>
                    @else
                    <div class="text-center mb-4">
                        <span class="btn btn-danger py-3 px-5 my-3 poppins-semibold" style="box-shadow: 5px 5px 5px rgb(0, 0, 0, 0.6);">Event Berakhir</span>


                    </div>
                       
                    @endif
                    

                    <h6 class="poppins-medium mb-2">Jadwal Pelaksanaan</h6>
                    <p class="mb-1">Tanggal: {{ $event->tanggal_event->translatedFormat('d F Y') }}</p>
                    <p>Waktu: 08:00 – Selesai</p>

                    <h6 class="poppins-medium mb-2">Lokasi</h6>
                    <p class="text-primary mb-1">
                        {{ $event->lokasi }}
                    </p>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection