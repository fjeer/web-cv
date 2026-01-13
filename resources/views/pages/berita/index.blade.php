@extends('layouts.app')

@section('title', 'courses')

@section('content')
<div class="container py-5">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold mb-0">Daftar Events</h4>

        <form class="d-flex">
            <div class="input-group">
                <input type="search" class="form-control" placeholder="Cari kursus...">
                <button class="btn btn-outline-secondary">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </form>
    </div>

    <!-- Event List -->
    <section class="row mt-4">

        @foreach ($berita as $b )
                    <div class="col-md-4 col-sm-6 mb-4">
                        <div class="card h-100 p-2 custom-card">

                            <img src="{{ asset('images/image 11.png') }}" class="card-img-top" alt="Event">

                            <div class="card-body">
                                <a href="{{ route('berita.show', $i) }}" class="text-decoration-none text-black fw-semibold">
                                    Cloudflare Alami Gangguan, X Juga Mengalami Pemadaman
                                </a>

                                <hr>

                                <div class="d-flex justify-content-between">
                                    <p class="mb-0">Sisa Kuota 200</p>
                                    <p class="mb-0">
                                        <i class="bi bi-calendar-event"></i> 12 Jan 2025
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
        @endforeach


    </section>

    <!-- Load More -->
    <div class="text-center mt-4">
        <a href="#" class="btn button-biru">
            Load More
        </a>
    </div>

</div>
@endsection
