@extends('layouts.app')

@section('title', 'news')

@section('content')
<section class="py-5 mt-5" style="background-color: var(--color-bg);">
    <div class="container" data-aos="fade-up">
        <div class="mb-5 text-center">
            <h6 class="section-title">Warta SigmaTech</h6>
            <h2 class="poppins-bold text-dark display-6">Artikel & Berita Terbaru</h2>

            <p class="text-muted">Ikuti perkembangan terbaru seputar teknologi dan informasi dari kami.</p>
        </div>

        <div class="card-premium p-4 p-md-5 border-0 shadow-sm mb-5">
            <!-- Header & Search -->
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-5 gap-4">
                <div class="d-flex align-items-center gap-2">
                    <div class="bg-primary-light p-2 rounded-circle text-primary">
                        <i class="ph-bold ph-newspaper fs-4"></i>
                    </div>
                    <h5 class="poppins-semibold mb-0">Semua Artikel & Berita</h5>
                </div>

                <form class="search-wrapper w-100 w-md-auto" action="{{ route('berita.index') }}" method="GET">
                    <div class="input-group shadow-sm" style="border-radius: var(--radius-full);">
                        <span class="input-group-text bg-white border-end-0 ps-4" style="border-radius: var(--radius-full) 0 0 var(--radius-full)">
                            <i class="ph-bold ph-magnifying-glass text-muted"></i>
                        </span>
                        <input type="text" name="search" class="form-control border-start-0 ps-0" placeholder="Cari berita..." value="{{ request('search') }}" style="border-radius: 0; box-shadow: none;">
                        <button class="btn btn-gradient text-white px-4" style="border-radius: 0 var(--radius-full) var(--radius-full) 0;">
                            Cari
                        </button>
                    </div>
                </form>
            </div>

            <!-- Berita Grid -->
            <div class="row g-4">
                @forelse ($berita as $b)
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="{{ $loop->iteration * 100 }}">
                    <div class="card-premium">
                        <div class="card-img-wrapper">
                            <span class="badge rounded-pill bg-white text-primary position-absolute top-0 start-0 m-3 z-index-2 shadow-sm px-3 py-2 poppins-semibold">
                                <i class="ph-bold ph-tag me-1"></i> Berita
                            </span>
                            <img src="{{ asset('storage/' . $b->gambar_berita) }}" alt="{{ $b->title }}">
                        </div>
                        <div class="card-body">
                            <div class="d-flex align-items-center gap-2 mb-3">
                                <span class="text-muted small d-flex align-items-center poppins-medium">
                                    <i class="ph-bold ph-calendar-blank me-1 text-primary"></i>
                                    {{ $b->tanggal_berita->translatedFormat('d M Y') }}
                                </span>
                            </div>
                            <h5 class="card-title text-truncate-2 mb-3">
                                <a href="{{ route('berita.show', $b->slug) }}" class="text-decoration-none text-dark hover-primary">{{ $b->title }}</a>
                            </h5>
                            <p class="card-text small mb-0">
                                {{ Str::limit(strip_tags($b->detail_berita ?? ''), 100) }}
                            </p>
                        </div>
                        <div class="card-footer">
                            <a href="{{ route('berita.show', $b->slug) }}" class="read-more text-primary text-decoration-none poppins-semibold">
                                Baca Selengkapnya <i class="ph-bold ph-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center py-5">
                    <i class="ph-bold ph-newspaper display-1 text-muted opacity-50"></i>
                    <h5 class="mt-3 poppins-semibold text-dark">Belum ada berita</h5>
                    <p class="text-muted">Silakan cek kembali nanti atau coba kata kunci lain.</p>
                </div>
                @endforelse
            </div>

            <!-- Pagination -->
            <div class="mt-5 d-flex justify-content-center">
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
