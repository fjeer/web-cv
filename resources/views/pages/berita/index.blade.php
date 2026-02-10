@extends('layouts.app')

@section('title', 'news')

@section('content')
<section style="background-image: url('{{ asset('images/bg-berita.png') }}');" data-aos="fade-zoom-in">

    <div class="container py-5">

        <div class="card p-4" style="border-radius: 20px">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="poppins-semibold mb-0">Daftar Berita</h4>

                <form class="d-flex" action="{{ route('berita.index') }}" method="GET">
                    <div class="input-group">
                        <input type="text" name="search" class="form-control" placeholder="Cari berita..." value="{{ request('search') }}" style="border-radius: 20px 0 0 20px;">
                        <button class="btn btn-gradient text-white" style="border-radius: 0 20px 20px 0;">
                            <i class="bi bi-search"></i>
                        </button>
                    </div>
                </form>
            </div>

            <!-- Berita List -->
            <section class="row mt-4">

                @forelse ($berita as $b)
                <div class="col-md-4 col-sm-6 mb-4">
                    <div class="modern-card">
                        <div class="card-image-wrapper">
                            <span class="category-badge">Berita</span>
                            <img src="{{ asset('storage/' . $b->gambar_berita) }}" alt="{{ $b->gambar_berita }}">
                        </div>
                        <div class="card-body">
                            <h5 class="card-title poppins-semibold">{{ $b->title }}</h5>
                            <hr class="card-divider">
                            <div class="card-footer-custom">
                                <a href="{{ route('berita.show', $b->slug) }}" class="read-more">
                                    Baca Selengkapnya
                                    <i class="bi bi-arrow-right"></i>
                                </a>
                                <span class="card-date">
                                    <i class="bi bi-calendar-event"></i>
                                    {{ $b->tanggal_berita->format('d M Y') }}
                                </span>
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
                {{ $berita->links('pagination::bootstrap-5') }}

            </div>

        </div>

    </div>

</section>

<style>
    /* Modern Card Styles */
    .modern-card {
        background: #ffffff;
        border-radius: 20px;
        overflow: hidden;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.08);
        transition: all 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        height: 100%;
        position: relative;
        border: none;
    }

    .modern-card:hover {
        transform: translateY(-8px);
        box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
    }

    /* Image Container */
    .card-image-wrapper {
        position: relative;
        overflow: hidden;
        height: 190px;
        border-radius: 20px;
    }

    .card-image-wrapper img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.5s cubic-bezier(0.4, 0, 0.2, 1);
    }

    .modern-card:hover .card-image-wrapper img {
        transform: scale(1.08);
    }

    /* Image Overlay Gradient */
    .card-image-wrapper::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        right: 0;
        height: 60%;
        background: linear-gradient(to top, rgba(0, 0, 0, 0.3) 0%, transparent 100%);
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .modern-card:hover .card-image-wrapper::after {
        opacity: 1;
    }

    /* Card Body */
    .card-body {
        padding: 24px;
        display: flex;
        flex-direction: column;
    }

    /* Title Styling */
    .card-title {
        font-size: 1.1rem;
        font-weight: 600;
        line-height: 1.5;
        color: #1e2e49;
        margin-bottom: 16px;
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        transition: color 0.3s ease;
    }

    .modern-card:hover .card-title {
        color: #0d6efd;
    }


    /* Card Footer */
    .card-footer-custom {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: auto;
    }

    /* Read More Link */
    .read-more {
        font-size: 0.875rem;
        font-weight: 500;
        color: #3399CC;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 6px;
        transition: all 0.3s ease;
    }

    .read-more:hover {
        color: #0d6efd;
        gap: 10px;
    }

    .read-more i {
        transition: transform 0.3s ease;
    }

    .read-more:hover i {
        transform: translateX(4px);
    }

    /* Date Styling */
    .card-date {
        font-size: 0.8rem;
        color: #6b7280;
        display: flex;
        align-items: center;
        gap: 6px;
    }

    .card-date i {
        color: #9ca3af;
    }

    /* Stretched Link */
    .stretched-link::after {
        position: absolute;
        top: 0;
        right: 0;
        bottom: 0;
        left: 0;
        z-index: 1;
        content: "";
    }

    /* Category Badge (Optional) */
    .category-badge {
        position: absolute;
        top: 16px;
        left: 16px;
        background: rgba(255, 255, 255, 0.95);
        backdrop-filter: blur(10px);
        padding: 6px 14px;
        border-radius: 20px;
        font-size: 0.75rem;
        font-weight: 600;
        color: #3399CC;
        z-index: 2;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    /* Section Title */
    .section-title {
        text-align: center;
        margin-bottom: 50px;
    }

    .section-title h2 {
        font-weight: 700;
        color: #1a1a2e;
        margin-bottom: 12px;
    }

    .section-title p {
        color: #6b7280;
        font-size: 1.1rem;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .card-image-wrapper {
            height: 180px;
        }

        .card-body {
            padding: 20px;
        }

        .card-title {
            font-size: 1rem;
        }
    }

</style>

@endsection
