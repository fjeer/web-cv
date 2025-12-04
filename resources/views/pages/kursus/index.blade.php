@extends('layouts.app')

@section('title','courses')

@section('content')
<div class="container py-5">

    {{-- HERO SECTION FULL WIDTH BACKGROUND --}}
<div class="hero-bg d-flex align-items-center">
    
    <div class="container py-5">
        <div class="col-lg-6 col-md-8">
            <h2 class="fw-bold mb-3 text-white">Tingkatkan Keahlianmu <br> Pilih Jalur Belajarmu di SigmaTech</h2>

            <p class="mb-4 text-white">
                Pelajari bidang IT sesuai passion-mu <br> Setiap program dirancang berbasis proyek dan dibimbing langsung <br> oleh praktisi industri.
            </p>

            <a href="#" class="btn btn-primary btn-lg"> <i class="bi bi-person-fill"></i>
 Daftar Kursus</a>
        </div>
    </div>
</div>


    {{-- ====== KELAS JARINGAN ====== --}}
    <h4 class="fw-bold mt-5 mb-3">Kelas Jaringan</h4>

    <div id="kelasJaringan" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            {{-- SLIDE 1 --}}
            <div class="carousel-item active">
                <div class="row g-4">
                    @foreach(range(1,3) as $i)
                    <div class="col-md-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-img-top bg-light" style="height:140px;"></div>
                            <div class="card-body">
                                <h6 class="text-muted small">Kursus Fundamental</h6>
                                <p class="card-text small">
                                    Pelajari dasar-dasar jaringan komputer seperti topologi,
                                    IP Addressing, hingga konfigurasi awal router/switch.
                                </p>
                                <p class="fw-bold">Rp. 80.000,00</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- SLIDE 2 --}}
            <div class="carousel-item">
                <div class="row g-4">
                    @foreach(range(1,3) as $i)
                    <div class="col-md-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-img-top bg-light" style="height:140px;"></div>
                            <div class="card-body">
                                <h6 class="text-muted small">Network Advanced</h6>
                                <p class="card-text small">
                                    Pelajari routing lanjutan, VLAN, tunneling, firewall, serta
                                    teknik troubleshooting profesional.
                                </p>
                                <p class="fw-bold">Rp. 120.000,00</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>

        {{-- ARROW CONTROLS --}}
        <button class="carousel-control-prev custom-arrow" type="button" data-bs-target="#kelasJaringan"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        {{-- CUSTOM RIGHT BUTTON --}}
        <button class="carousel-control-next custom-arrow" type="button" data-bs-target="#kelasJaringan"
            data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    {{-- ====== KELAS PEMROGRAMAN ====== --}}
    <h4 class="fw-bold mt-5 mb-3">Kelas Pemrograman</h4>

    <div id="kelasCoding" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            {{-- SLIDE 1 --}}
            <div class="carousel-item active">
                <div class="row g-4">
                    @foreach(range(1,3) as $i)
                    <div class="col-md-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-img-top bg-light" style="height:140px;"></div>
                            <div class="card-body">
                                <h6 class="text-muted small">Algoritma Fundamental</h6>
                                <p class="card-text small">
                                    Pelajari logika dasar pemrograman, struktur data, dan algoritma pemecahan masalah.
                                </p>
                                <p class="fw-bold">Rp. 90.000,00</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

            {{-- SLIDE 2 --}}
            <div class="carousel-item">
                <div class="row g-4">
                    @foreach(range(1,3) as $i)
                    <div class="col-md-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-img-top bg-light" style="height:140px;"></div>
                            <div class="card-body">
                                <h6 class="text-muted small">Fullstack Development</h6>
                                <p class="card-text small">
                                    Pelajari backend, frontend, API, database, dan deployment project web modern.
                                </p>
                                <p class="fw-bold">Rp. 150.000,00</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>

        </div>

        {{-- ARROW CONTROLS --}}
        <button class="carousel-control-prev custom-arrow" type="button" data-bs-target="#kelasCoding"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>

        {{-- CUSTOM RIGHT BUTTON --}}
        <button class="carousel-control-next custom-arrow" type="button" data-bs-target="#kelasCoding"
            data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>
    <div class="carousel-item">
                <div class="row g-4">
                    <div class="col-md-4">
                        <div class="card shadow-sm h-100">
                            <div class="card-img-top bg-light" style="height:140px;"></div>
                            <div class="card-body">
                                <h6 class="text-muted small">Fullstack Development</h6>
                                <p class="card-text small">
                                    Pelajari backend, frontend, API, database, dan deployment project web modern.
                                </p>
                                <p class="fw-bold">Rp. 150.000,00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</div>
@endsection