@extends('layouts.app')

@section('title','courses')

@section('content')
<div class="container py-5">
<div class="d-flex align-items-center justify-content-between">
    <h4 class="fw-bold mt-5 mb-3">Daftar Events</h4>

    <!-- Search Bar -->
    <form class="d-flex mt-5 mb-3">
        <div class="input-group">
            <input class="form-control" type="search" placeholder="Cari kursus..." aria-label="Search">
            <button class="btn btn-outline-secondary" type="submit">
                <i class="bi bi-search"></i>
            </button>
        </div>
    </form>
</div>

<section class="d-flex flex-column align-item-center mt-5">
    


                    <div class="carousel-inner">

                        <div class="carousel-item active">
                            <div class="row mt-5">
                                <!-- Card 1 -->
                                <div class="col-md-4 col-sm-6 mb-4">
                                    <div class="card h-100 p-2 custom-card">
                                        <img src="{{ asset('images/image 11.png') }}" class="card-img-top" alt="Produk 1">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <a href="{{ route('berita.show', 'parameter id') }}" class="card-title text-decoration-none mb-1 text-black">Cloudflare Alami Gangguan, X Juga Mengalami Pemadaman</a>
                                            </div>
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
                                        <img src="{{ asset('images/image 11.png') }}" class="card-img-top" alt="Produk 1">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="card-title mb-1">Cloudflare Alami Gangguan, X Juga Mengalami Pemadaman</h5>
                                            </div>
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
                                        <img src="{{ asset('images/image 11.png') }}" class="card-img-top" alt="Produk 1">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="card-title mb-1">Cloudflare Alami Gangguan, X Juga Mengalami Pemadaman</h5>
                                            </div>
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
                                <!-- Card 4 -->
                                <div class="col-md-4 col-sm-6 mb-4">
                                    <div class="card h-100 p-2 custom-card">
                                        <img src="{{ asset('images/image 11.png') }}" class="card-img-top" alt="Produk 1">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="card-title mb-1">Cloudflare Alami Gangguan, X Juga Mengalami Pemadaman</h5>
                                            </div>
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

                                <!-- Card 5 -->
                                <div class="col-md-4 col-sm-6 mb-4">
                                    <div class="card h-100 p-2 custom-card">
                                        <img src="{{ asset('images/image 11.png') }}" class="card-img-top" alt="Produk 1">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="card-title mb-1">Cloudflare Alami Gangguan, X Juga Mengalami Pemadaman</h5>
                                            </div>
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

                                <!-- Card 6 -->
                                <div class="col-md-4 col-sm-6 mb-4">
                                    <div class="card h-100 p-2 custom-card">
                                        <img src="{{ asset('images/image 11.png') }}" class="card-img-top" alt="Produk 1">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="card-title mb-1">Cloudflare Alami Gangguan, X Juga Mengalami Pemadaman</h5>
                                            </div>
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
                                <!-- Card 7 -->
                                <div class="col-md-4 col-sm-6 mb-4">
                                    <div class="card h-100 p-2 custom-card">
                                        <img src="{{ asset('images/image 11.png') }}" class="card-img-top" alt="Produk 1">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="card-title mb-1">Cloudflare Alami Gangguan, X Juga Mengalami Pemadaman</h5>
                                            </div>
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

                                <!-- Card 8 -->
                                <div class="col-md-4 col-sm-6 mb-4">
                                    <div class="card h-100 p-2 custom-card">
                                        <img src="{{ asset('images/image 11.png') }}" class="card-img-top" alt="Produk 1">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="card-title mb-1">Cloudflare Alami Gangguan, X Juga Mengalami Pemadaman</h5>
                                            </div>
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

                                <!-- Card 9 -->
                                <div class="col-md-4 col-sm-6 mb-4">
                                    <div class="card h-100 p-2 custom-card">
                                        <img src="{{ asset('images/image 11.png') }}" class="card-img-top" alt="Produk 1">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="card-title mb-1">Cloudflare Alami Gangguan, X Juga Mengalami Pemadaman</h5>
                                            </div>
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
                                <!-- Card 10 -->
                                <div class="col-md-4 col-sm-6 mb-4">
                                    <div class="card h-100 p-2 custom-card">
                                        <img src="{{ asset('images/image 11.png') }}" class="card-img-top" alt="Produk 1">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="card-title mb-1">Cloudflare Alami Gangguan, X Juga Mengalami Pemadaman</h5>
                                            </div>
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

                                <!-- Card 11 -->
                                <div class="col-md-4 col-sm-6 mb-4">
                                    <div class="card h-100 p-2 custom-card">
                                        <img src="{{ asset('images/image 11.png') }}" class="card-img-top" alt="Produk 1">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="card-title mb-1">Cloudflare Alami Gangguan, X Juga Mengalami Pemadaman</h5>
                                            </div>
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

                                <!-- Card 12 -->
                                <div class="col-md-4 col-sm-6 mb-4">
                                    <div class="card h-100 p-2 custom-card">
                                        <img src="{{ asset('images/image 11.png') }}" class="card-img-top" alt="Produk 1">
                                        <div class="card-body">
                                            <div class="d-flex justify-content-between align-items-center">
                                                <h5 class="card-title mb-1">Cloudflare Alami Gangguan, X Juga Mengalami Pemadaman</h5>
                                            </div>
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



                </div>
    </div>

    <div class="d-flex justify-content-center gap-3">
        <a href="#" class="btn button-biru my-5 ">
            Load More
        </a>
    </div>


</section>
@endsection