@extends('layouts.app')

@section('title', 'courses')

@section('hero')
<div class="hero-section" style="background-image: url('{{ asset('images/banner2.png') }}');">
    <div class="container py-5">
        <div class="col-lg-6 col-md-8">
            <h2 class="fw-bold mb-3">Tingkatkan Keahlianmu <br> Pilih Jalur Belajarmu di SigmaTech</h2>
            <p class="mb-4">
                Pelajari bidang IT sesuai passion-mu <br> Setiap program dirancang berbasis proyek dan dibimbing
                langsung <br> oleh praktisi industri.
            </p>

            <h4 class="fw-bold mb-3">Kursus (Program / Kelas).</h4>
            <a href="{{ route('daftar.index') }}" class="btn button-biru btn-lg">
                <i class="bi bi-person-fill text-dark"></i> Daftar Kursus
            </a>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container py-1">


    @foreach($kelas as $i => $kls)
    <h4 class="fw-bold mt-5 mb-3">{{ $kls->nama_kelas }}</h4>

    <div id="kelas{{ $kls->id }}" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            @foreach ($kls->kursus->chunk(3) as $j => $chunk)
            <div class="carousel-item {{ $j == 0 ? 'active' : '' }}">
                <div class="row mt-5">
                    @foreach ($chunk as $krs)
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="card h-100 p-2 custom-card">
                            <img src="{{ asset('images/image 11.png') }}" class="card-img-top">
                            <div class="card-body">
                                <div class="d-flex justify-content-between">
                                    <a href="{{ route('kursus.show', $krs->slug) }}" class="text-decoration-none text-black fw-bold">
                                        {{ $krs->nama_kursus }}
                                    </a>
                                    <span class="text-warning">
                                        <i class="bi bi-star-fill"></i> {{ $krs->rating_kursus }}
                                    </span>
                                </div>
                                <p class="text-muted">{{ $krs->deskripsi_kursus }}</p>
                                <p class="fw-bold text-primary">
                                    Rp {{ number_format($krs->harga_kursus, 0, ',', '.') }}
                                </p>

                                <a href="{{ route('kursus.show', $krs->slug) }}" class="stretched-link"></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>

        <button class="carousel-control-prev custom-arrow" type="button" data-bs-target="#kelas{{ $kls->id }}" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        <button class="carousel-control-next custom-arrow" type="button" data-bs-target="#kelas{{ $kls->id }}" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
    @endforeach
</div>

<!-- Section Call to Action -->
<section class="d-flex flex-column align-item-center text-center mt-5">
    <div class="row g-4 text-center justify-content-center">
        <div class="col-md-10">
            <div class="h-100 text-center">
                <div class="cardcur py-5">
                    <h1 style="font-size: 50px;">
                        Berhenti Belajar <span style="color: #FF741F;">Tanpa Tujuan.</span>
                    </h1>

                    <h3>
                        <span style="color: #FF741F;">SigmaTech</span> bantu kamu kuasai keahlian IT secara terarah,
                        praktik <br> langsung, dan siap kerja di era digital.
                    </h3>
                    <div class="d-flex justify-content-center gap-3">
                        <a href="#" class="tombolkuning btn mt-5" style="font-size:30px;">
                            <i class="bi bi-person-fill text-dark"></i> Daftar Sekarang
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
