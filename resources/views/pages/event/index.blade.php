@extends('layouts.app')

@section('title', 'events')

{{-- ================= CONTENT ================= --}}
@section('content')

<section class="hero-section" style="background-image: url('{{ asset('images/banner3.png') }}'); background-size: cover; background-position: center;">
    <div class="container py-5" data-aos="fade-right">
        <div class="col-lg-6 col-md-8">
            <h2 class="fw-bold mb-3">
                Belajar Langsung, Bangun Koneksi, dan Rasakan Pengalaman Nyata Industri!
            </h2>

            <p class="mb-4">
                Ikuti berbagai event dan training luring yang interaktif dan aplikatif
                untuk meningkatkan skill, membangun koneksi, dan merasakan pengalaman nyata
                di dunia industri.
            </p>

            <h4 class="fw-bold">Event</h4>
        </div>
    </div>
</section>

<section style="background-image: url({{ asset('images/bg-event-1.png') }});">

    <div class="container py-5" data-aos="fade-up">

        <div class="card border-0 p-5">
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 gap-3">

                <h4 class="fw-bold mb-4">Daftar Events</h4>

                <form action="{{ route('event.index') }}" method="GET" class="d-flex gap-3">
                    <div class="custom-select-wrapper">
                        <select name="kategori" class="custom-select">
                            <option value="">Semua Kategori</option>
                            @foreach ($kategori as $k)
                            <option value="{{ $k->id }}" {{ request('kategori') == $k->id ? 'selected' : '' }}>
                                {{ $k->nama_kategori }}
                            </option>
                            @endforeach
                        </select>
                        <i class="bi bi-chevron-down select-icon"></i>
                    </div>

                    <button type="submit" class="btn button-biru">
                        <i class="bi bi-search"></i>
                    </button>

                </form>

            </div>

            <div class="border-top border-2 border-secondary mb-5"></div>

            <section class="row">

                @forelse ( $event as $e )

                <div class="col-md-4 col-sm-6 mb-4">

                    <div class="card custom-card">
                        <img src="{{ asset('storage/' . $e->gambar_event) }}" class="card-img-top" alt="{{ $e->gambar_event }}" style="height: 200px; object-fit: cover;">

                        <div class="card-body">
                            <span class="mb-3 badge rounded-pill bg-info">
                                {{ $e->kategori->nama_kategori }}
                            </span>

                            <a href="{{ route('event.show', $e->slug) }}" class="text-decoration-none text-black fw-medium">
                                <h5 class="card-title mb-2">
                                    {{ $e->title }}
                                </h5>
                            </a>

                            <p class="mb-3">
                                {!! Str::limit($e->detail_event, 99,'...') !!}
                            </p>
                            <hr>
                            <div class="d-flex justify-content-between">
                                <span>Sisa Kuota {{ $e->kuota }}</span>
                                <span>
                                    <i class="bi bi-calendar-event"></i> {{ $e->tanggal_event->translatedFormat('d M Y') }}
                                </span>
                            </div>

                            <a href="{{ route('event.show', $e->slug) }}" class="stretched-link"></a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="text-center">
                    <i class="bi bi-calendar-x fs-1 text-muted"></i>
                    <h5 class="mt-3">Belum ada Event</h5>
                    <p class="text-muted">Silakan cek kembali nanti.</p>
                </div>
                @endforelse

            </section>

            <div class="text-center mt-4">
                {{ $event->links() }}
            </div>

        </div>


    </div>

</section>

@endsection
