@extends('layouts.app')

@section('title','courses')

@section('content')
<div class="container py-5">

    {{-- HERO SECTION FULL WIDTH BACKGROUND --}}
<div class="hero-bg d-flex align-items-center">
    
    <div class="container py-5">
        <div class="col-lg-6 col-md-8">
            <h2 class="fw-bold mb-3 text-white">Belajar Langsung, Bangun Koneksi, dan Rasakan Pengalaman Nyata Industri!</h2>

            <p class="mb-4 text-white">
                Ikuti berbagai event dan training luring yang interaktif dan aplikatif untuk meningkatkan skill, membangun koneksi, dan merasakan pengalaman nyata di dunia industri.

            </p>

            <h4 class="fw-bold mb-3 text-white">Event.</h4>

        </div>
    </div>
</div>
<h4 class="fw-bold mt-5 mb-3">Daftar Events</h4>
<section class="d-flex flex-column align-item-center mt-5">
                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="row mt-5">
                                <!-- Card 1 -->
                                <div class="col-md-4 col-sm-6 mb-4">
                                    <div class="card h-100 p-2 custom-card">
                                        <img src="{{ asset('images/image 11.png') }}" class="card-img-top" alt="Produk 1">
                                        <div class="card-body">
                                            <a href="#" class=" tombolevent btn rounded-4xl my-3">
                                                Seminar
                                            </a>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="card-title mb-1">Siap Kerja di Era Digital Bangun Karier IT dari Sekarang</h5>
                                            </div>
                                            <p class="mb-1 text-start">Temui pembicara profesional dari berbagai industri digital, startup, dan dunia kerja. Dapatkan insight tentang tren teknologi, peluang karier, dan strategi pengembangan skill di era digital.</p>

                                             <hr>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-1">Sisa Kuota 200</p>
                                                <p class="mb-1">
                                                    <i class="bi bi-calendar-event"></i> 12 Jan 2025
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 2 -->
                                <div class="col-md-4 col-sm-6 mb-4">
                                    <div class="card h-100 p-2 custom-card">
                                        <img src="{{ asset('images/image 10.png') }}" class="card-img-top" alt="Produk 1">
                                        <div class="card-body">
                                            <a href="#" class=" tombolevent btn rounded-4xl my-3">
                                                Seminar
                                            </a>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="card-title mb-1">Siap Kerja di Era Digital Bangun Karier IT dari Sekarang</h5>
                                            </div>
                                            <p class="mb-1 text-start">Temui pembicara profesional dari berbagai industri digital, startup, dan dunia kerja. Dapatkan insight tentang tren teknologi, peluang karier, dan strategi pengembangan skill di era digital.</p>

                                             <hr>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-1">Sisa Kuota 200</p>
                                                <p class="mb-1">
                                                    <i class="bi bi-calendar-event"></i> 12 Jan 2025
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 3 -->
                                <div class="col-md-4 col-sm-6 mb-4">
                                    <div class="card h-100 p-2 custom-card">
                                        <img src="{{ asset('images/image 9.png') }}" class="card-img-top" alt="Produk 1">
                                        <div class="card-body">
                                            <a href="#" class=" tombolevent btn rounded-4xl my-3">
                                                Seminar
                                            </a>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="card-title mb-1">Siap Kerja di Era Digital Bangun Karier IT dari Sekarang</h5>
                                            </div>
                                            <p class="mb-1 text-start">Temui pembicara profesional dari berbagai industri digital, startup, dan dunia kerja. Dapatkan insight tentang tren teknologi, peluang karier, dan strategi pengembangan skill di era digital.</p>

                                             <hr>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-1">Sisa Kuota 200</p>
                                                <p class="mb-1">
                                                    <i class="bi bi-calendar-event"></i> 12 Jan 2025
                                                </p>
                                            </div>
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
                                                <h5 class="card-title mb-1">Kelas Pemrograman</h5>
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
                                                <h5 class="card-title mb-1">Kelas Pemrograman</h5>
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
                                                <h5 class="card-title mb-1">Kelas Pemrograman</h5>
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




                        <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="row mt-5">
                                <!-- Card 1 -->
                                <div class="col-md-4 col-sm-6 mb-4">
                                    <div class="card h-100 p-2 custom-card">
                                        <img src="{{ asset('images/image 11.png') }}" class="card-img-top" alt="Produk 1">
                                        <div class="card-body">
                                            <a href="#" class=" tombolevent btn rounded-4xl my-3">
                                                Seminar
                                            </a>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="card-title mb-1">Siap Kerja di Era Digital Bangun Karier IT dari Sekarang</h5>
                                            </div>
                                            <p class="mb-1 text-start">Temui pembicara profesional dari berbagai industri digital, startup, dan dunia kerja. Dapatkan insight tentang tren teknologi, peluang karier, dan strategi pengembangan skill di era digital.</p>

                                             <hr>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-1">Sisa Kuota 200</p>
                                                <p class="mb-1">
                                                    <i class="bi bi-calendar-event"></i> 12 Jan 2025
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 2 -->
                                <div class="col-md-4 col-sm-6 mb-4">
                                    <div class="card h-100 p-2 custom-card">
                                        <img src="{{ asset('images/image 10.png') }}" class="card-img-top" alt="Produk 1">
                                        <div class="card-body">
                                            <a href="#" class=" tombolevent btn rounded-4xl my-3">
                                                Seminar
                                            </a>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="card-title mb-1">Siap Kerja di Era Digital Bangun Karier IT dari Sekarang</h5>
                                            </div>
                                            <p class="mb-1 text-start">Temui pembicara profesional dari berbagai industri digital, startup, dan dunia kerja. Dapatkan insight tentang tren teknologi, peluang karier, dan strategi pengembangan skill di era digital.</p>

                                             <hr>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-1">Sisa Kuota 200</p>
                                                <p class="mb-1">
                                                    <i class="bi bi-calendar-event"></i> 12 Jan 2025
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Card 3 -->
                                <div class="col-md-4 col-sm-6 mb-4">
                                    <div class="card h-100 p-2 custom-card">
                                        <img src="{{ asset('images/image 9.png') }}" class="card-img-top" alt="Produk 1">
                                        <div class="card-body">
                                            <a href="#" class=" tombolevent btn rounded-4xl my-3">
                                                Seminar
                                            </a>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="card-title mb-1">Siap Kerja di Era Digital Bangun Karier IT dari Sekarang</h5>
                                            </div>
                                            <p class="mb-1 text-start">Temui pembicara profesional dari berbagai industri digital, startup, dan dunia kerja. Dapatkan insight tentang tren teknologi, peluang karier, dan strategi pengembangan skill di era digital.</p>

                                             <hr>
                                            <div class="d-flex justify-content-between align-items-center">
                                                <p class="mb-1">Sisa Kuota 200</p>
                                                <p class="mb-1">
                                                    <i class="bi bi-calendar-event"></i> 12 Jan 2025
                                                </p>
                                            </div>
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
                                                <h5 class="card-title mb-1">Kelas Pemrograman</h5>
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
                                                <h5 class="card-title mb-1">Kelas Pemrograman</h5>
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
                                                <h5 class="card-title mb-1">Kelas Pemrograman</h5>
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




    </div>
                            <div class="d-flex justify-content-center gap-3">
                                <a href="#" class="btn btn-primary my-5 " style="font-size=30px;">
                                    Load More
                                </a>
                            </div>


</section>
@endsection