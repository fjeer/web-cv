@extends('layouts.app')

@section('title', 'news')

@section('content')
<div class="container py-5">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-bold mb-0">Daftar Berita</h4>

        <form class="d-flex" action="{{ route('berita.index') }}" method="GET">
            <div class="input-group">
                <input type="text" name="search" class="form-control" placeholder="Cari berita..." value="{{ request('search') }}">
                <button class="btn btn-outline-secondary">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </form>
    </div>

    <!-- Event List -->
    <section class="row mt-4">

        @forelse ($berita as $b)
        <div class="col-md-4 col-sm-6 mb-4">
            <div class="card h-100 p-2 custom-card">

                <img src="{{ asset('images/image 11.png') }}" class="card-img-top" alt="Event">

                <div class="card-body">
                    <a href="{{ route('berita.show', $b->slug) }}" class="text-decoration-none text-black fw-semibold">
                        {{ $b->title }}
                    </a>

                    <hr>

                    <div class="d-flex justify-content-between">
                        <a href="{{ route('berita.show', $b->slug) }}" class="mb-0 text-decoration-none text-secondary">Baca Selengkapnya</a>

                        <p class="mb-0">
                            <i class="bi bi-calendar-event"></i>
                            {{ $b->tanggal_berita->format('d M Y') }}
                        </p>
                    </div>

                    <a href="{{ route('berita.show', $b->slug) }}" class="stretched-link"></a>
                </div>

            </div>
        </div>
        @empty
        <div class="text-center">
            <i class="bi bi-newspaper fs-1 text-muted"></i>
            <h5 class="mt-3">Belum ada berita</h5>
            <p class="text-muted">Silakan cek kembali nanti.</p>
        </div>
        @endforelse



    </section>

    <!-- Load More -->
    <div class="text-center mt-4">
        {{ $berita->links() }}
    </div>


</div>
@endsection
