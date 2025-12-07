@extends('layouts.app')

@section('title','courses')

@section('hero')
<div class="hero-section" style="background-image: url('{{ asset('images/banner2.png') }}');">
    
    <div class="container py-5">
        <div class="col-lg-6 col-md-8">
            <h2 class="fw-bold mb-3">Tingkatkan Keahlianmu <br> Pilih Jalur Belajarmu di SigmaTech</h2>

            <p class="mb-4">
                Pelajari bidang IT sesuai passion-mu <br> Setiap program dirancang berbasis proyek dan dibimbing langsung <br> oleh praktisi industri.
            </p>
            
            <h4 class="fw-bold mb-3">Kursus (Program / Kelas).</h4>


            <a href="#" class="btn button-biru btn-lg"> <i class="bi bi-person-fill text-dark"></i>
 Daftar Kursus</a>
        </div>
    </div>
</div>
@endsection

@section('content')
<div class="container py-5">

    {{-- HERO SECTION FULL WIDTH BACKGROUND --}}



    {{-- ====== KELAS JARINGAN ====== --}}
    <h4 class="fw-bold mt-5 mb-3">Kelas Jaringan</h4>

    {{-- Carousel --}}
                <div id="partnerCarousel" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="row mt-5">
                                <!-- Card 1 -->
                                <div class="col-md-4 col-sm-6 mb-4">
                                    <div class="card h-100 p-2 custom-card">
                                        <img src="{{ asset('images/image 11.png') }}" class="card-img-top" alt="Produk 1">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="{{ route('kursus.show', 'parameter id') }}" class="card-title text-decoration-none text-black mb-1">Kelas Pemrograman</a>
                                                <span class="text-warning">
                                                    <i class="bi bi-star-fill"></i> 4.5
                                                </span>
                                            </div>
                                            <p class="mb-1 text-start text-muted">Belajar Coding untuk Balita menggunakan Python</p>

                                            <!-- Harga di kanan -->
                                            <p class="mb-0 fw-bold text-primary text-start">Rp 250.000</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 2 -->
                                <div class="col-md-4 col-sm-6 mb-4">
                                    <div class="card h-100 p-2 custom-card">
                                        <img src="{{ asset('images/image 10.png') }}" class="card-img-top" alt="Produk 1">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="{{ route('kursus.show', 'parameter id') }}" class="card-title mb-1 text-decoration-none text-black">Kelas Pemrograman</a>
                                                <span class="text-warning">
                                                    <i class="bi bi-star-fill"></i> 4.5
                                                </span>
                                            </div>
                                            <p class="mb-1 text-start text-muted">Belajar Coding untuk Balita menggunakan Python</p>

                                            <!-- Harga di kanan -->
                                            <p class="mb-0 fw-bold text-primary text-start">Rp 250.000</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 3 -->
                                <div class="col-md-4 col-sm-6 mb-4">
                                    <div class="card h-100 p-2 custom-card">
                                        <img src="{{ asset('images/image 9.png') }}" class="card-img-top" alt="Produk 1">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="{{ route('kursus.show', 'parameter id') }}" class="card-title mb-1 text-decoration-none text-black">Kelas Pemrograman</a>
                                                <span class="text-warning">
                                                    <i class="bi bi-star-fill"></i> 4.5
                                                </span>
                                            </div>
                                            <p class="mb-1 text-start text-muted">Belajar Coding untuk Balita menggunakan Python</p>

                                            <!-- Harga di kanan -->
                                            <p class="mb-0 fw-bold text-primary text-start">Rp 250.000</p>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row mt-5">
                                <!-- Card 1 -->
                                <div class="col-md-4 col-sm-6 mb-4">
                                    <div class="card h-100 p-2 custom-card">
                                        <img src="{{ asset('images/image 11.png') }}" class="card-img-top" alt="Produk 1">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="{{ route('kursus.show', 'parameter id') }}" class="card-title mb-1 text-decoration-none text-black">Kelas Pemrograman</a>
                                                <span class="text-warning">
                                                    <i class="bi bi-star-fill"></i> 4.5
                                                </span>
                                            </div>
                                            <p class="mb-1 text-start text-muted">Belajar Coding untuk Balita menggunakan Python</p>

                                            <!-- Harga di kanan -->
                                            <p class="mb-0 fw-bold text-primary text-start">Rp 250.000</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 2 -->
                                <div class="col-md-4 col-sm-6 mb-4">
                                    <div class="card h-100 p-2 custom-card">
                                        <img src="{{ asset('images/image 10.png') }}" class="card-img-top" alt="Produk 1">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="{{ route('kursus.show', 'parameter id') }}" class="card-title mb-1 text-decoration-none text-black">Kelas Pemrograman</a>
                                                <span class="text-warning">
                                                    <i class="bi bi-star-fill"></i> 4.5
                                                </span>
                                            </div>
                                            <p class="mb-1 text-start text-muted">Belajar Coding untuk Balita menggunakan Python</p>

                                            <!-- Harga di kanan -->
                                            <p class="mb-0 fw-bold text-primary text-start">Rp 250.000</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 3 -->
                                <div class="col-md-4 col-sm-6 mb-4">
                                    <div class="card h-100 p-2 custom-card">
                                        <img src="{{ asset('images/image 9.png') }}" class="card-img-top" alt="Produk 1">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="{{ route('kursus.show', 'parameter id') }}" class="card-title mb-1 text-decoration-none text-black">Kelas Pemrograman</a>
                                                <span class="text-warning">
                                                    <i class="bi bi-star-fill"></i> 4.5
                                                </span>
                                            </div>
                                            <p class="mb-1 text-start text-muted">Belajar Coding untuk Balita menggunakan Python</p>

                                            <!-- Harga di kanan -->
                                            <p class="mb-0 fw-bold text-primary text-start">Rp 250.000</p>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                    </div>

                    {{-- CUSTOM LEFT BUTTON --}}
                    <button class="carousel-control-prev custom-arrow" type="button" data-bs-target="#partnerCarousel"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>

                    {{-- CUSTOM RIGHT BUTTON --}}
                    <button class="carousel-control-next custom-arrow" type="button" data-bs-target="#partnerCarousel"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>

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

    {{-- Carousel --}}
                <div id="CODING" class="carousel slide" data-bs-ride="carousel">

                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="row mt-5">
                                <!-- Card 1 -->
                                <div class="col-md-4 col-sm-6 mb-4">
                                    <div class="card h-100 p-2 custom-card">
                                        <img src="{{ asset('images/image 11.png') }}" class="card-img-top" alt="Produk 1">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="{{ route('kursus.show', 'parameter id') }}" class="card-title text-decoration-none mb-1 text-black">Kelas Pemrograman</a>
                                                <span class="text-warning">
                                                    <i class="bi bi-star-fill"></i> 4.5
                                                </span>
                                            </div>
                                            <p class="mb-1 text-start text-muted">Belajar Coding untuk Balita menggunakan Python</p>

                                            <!-- Harga di kanan -->
                                            <p class="mb-0 fw-bold text-primary text-start">Rp 250.000</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 2 -->
                                <div class="col-md-4 col-sm-6 mb-4">
                                    <div class="card h-100 p-2 custom-card">
                                        <img src="{{ asset('images/image 10.png') }}" class="card-img-top" alt="Produk 1">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="{{ route('kursus.show', 'parameter id') }}" class="card-title text-decoration-none mb-1 text-black">Kelas Pemrograman</a>
                                                <span class="text-warning">
                                                    <i class="bi bi-star-fill"></i> 4.5
                                                </span>
                                            </div>
                                            <p class="mb-1 text-start text-muted">Belajar Coding untuk Balita menggunakan Python</p>

                                            <!-- Harga di kanan -->
                                            <p class="mb-0 fw-bold text-primary text-start">Rp 250.000</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 3 -->
                                <div class="col-md-4 col-sm-6 mb-4">
                                    <div class="card h-100 p-2 custom-card">
                                        <img src="{{ asset('images/image 9.png') }}" class="card-img-top" alt="Produk 1">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="{{ route('kursus.show', 'parameter id') }}" class="card-title text-decoration-none mb-1 text-black">Kelas Pemrograman</a>
                                                <span class="text-warning">
                                                    <i class="bi bi-star-fill"></i> 4.5
                                                </span>
                                            </div>
                                            <p class="mb-1 text-start text-muted">Belajar Coding untuk Balita menggunakan Python</p>

                                            <!-- Harga di kanan -->
                                            <p class="mb-0 fw-bold text-primary text-start">Rp 250.000</p>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>
                        </div>

                        <div class="carousel-item">
                            <div class="row mt-5">
                                <!-- Card 1 -->
                                <div class="col-md-4 col-sm-6 mb-4">
                                    <div class="card h-100 p-2 custom-card">
                                        <img src="{{ asset('images/image 11.png') }}" class="card-img-top" alt="Produk 1">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="{{ route('kursus.show', 'parameter id') }}" class="card-title text-decoration-none mb-1 text-black">Kelas Pemrograman</a>
                                                <span class="text-warning">
                                                    <i class="bi bi-star-fill"></i> 4.5
                                                </span>
                                            </div>
                                            <p class="mb-1 text-start text-muted">Belajar Coding untuk Balita menggunakan Python</p>

                                            <!-- Harga di kanan -->
                                            <p class="mb-0 fw-bold text-primary text-start">Rp 250.000</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 2 -->
                                <div class="col-md-4 col-sm-6 mb-4">
                                    <div class="card h-100 p-2 custom-card">
                                        <img src="{{ asset('images/image 10.png') }}" class="card-img-top" alt="Produk 1">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="{{ route('kursus.show', 'parameter id') }}" class="card-title text-decoration-none mb-1 text-black">Kelas Pemrograman</a>
                                                <span class="text-warning">
                                                    <i class="bi bi-star-fill"></i> 4.5
                                                </span>
                                            </div>
                                            <p class="mb-1 text-start text-muted">Belajar Coding untuk Balita menggunakan Python</p>

                                            <!-- Harga di kanan -->
                                            <p class="mb-0 fw-bold text-primary text-start">Rp 250.000</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 3 -->
                                <div class="col-md-4 col-sm-6 mb-4">
                                    <div class="card h-100 p-2 custom-card">
                                        <img src="{{ asset('images/image 9.png') }}" class="card-img-top" alt="Produk 1">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="{{ route('kursus.show', 'parameter id') }}" class="card-title text-decoration-none mb-1 text-black">Kelas Pemrograman</a>
                                                <span class="text-warning">
                                                    <i class="bi bi-star-fill"></i> 4.5
                                                </span>
                                            </div>
                                            <p class="mb-1 text-start text-muted">Belajar Coding untuk Balita menggunakan Python</p>

                                            <!-- Harga di kanan -->
                                            <p class="mb-0 fw-bold text-primary text-start">Rp 250.000</p>
                                        </div>
                                    </div>
                                </div>

                                
                            </div>
                        </div>
                    </div>

                    {{-- CUSTOM LEFT BUTTON --}}
                    <button class="carousel-control-prev custom-arrow" type="button" data-bs-target="#CODING"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </button>

                    {{-- CUSTOM RIGHT BUTTON --}}
                    <button class="carousel-control-next custom-arrow" type="button" data-bs-target="#CODING"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </button>

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

    <section class="d-flex flex-column align-item-center text-center mt-5">

            
            <div class="row g-4 text-center justify-content-center">
                <div class="col-md-10">
                    <div class="h-100 text-center">
                        <div class="cardcur py-5">
                            <h1 style="font-size: 50px;">
                                Berhenti Belajar
                                <span style="color: #FF741F;">Tanpa Tujuan.</span>
                            </h1>

                            <h3>
                                <span style="color: #FF741F;">SigmaTech</span> bantu kamu kuasai keahlian IT secara terarah,
                                praktik <br> langsung, dan siap kerja di era digital.
                            </h3>
                            
                            <div class="d-flex justify-content-center gap-3">
                                <!-- Button Kiri -->
                                 
                                <a href="#" class="tombolkuning btn mt-5" style="font-size=30px;">
                                    <i class="bi bi-person-fill text-dark" ></i>
                                    Daftar Sekarang
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>


        </section>
@endsection