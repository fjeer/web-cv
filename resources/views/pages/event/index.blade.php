@extends('layouts.app')

@section('title', 'Events')

@section('content')

<section class="hero-bg w-100" style="background-image: url('{{ asset('images/banner3.webp') }}'); padding: 120px 0 80px 0;">
    <div class="container position-relative z-index-2" data-aos="fade-right">
        <div class="row">
            <div class="col-lg-7 col-md-8 text-white">
                <h2 class="poppins-semibold mb-3 display-5">
                    Belajar Langsung, Bangun Koneksi, dan Rasakan Pengalaman <span class="text-warning">Nyata Industri!</span>
                </h2>
                <p class="mb-4 fs-5 text-white-50">
                    Ikuti berbagai event dan training luring yang interaktif dan aplikatif
                    untuk meningkatkan skill, membangun koneksi, dan merasakan pengalaman nyata di dunia industri.
                </p>
                <span class="badge badge-premium bg-white text-primary px-4 py-2 poppins-medium fs-6">Event</span>
            </div>
        </div>
    </div>
</section>

<section class="py-5" style="background-color: var(--color-bg);">
    <div class="container" data-aos="fade-up">
        <div class="mb-5 text-center">
            <h6 class="section-title">Program Event</h6>
            <h2 class="poppins-bold text-dark display-6">Temukan Event Menarik</h2>
            <p class="text-muted">Ikuti berbagai kegiatan seru untuk meningkatkan skill dan networking Anda.</p>
        </div>

        <div class="card-premium p-4 p-md-5 border-0 shadow-sm mb-5">
            {{-- Filter Section --}}
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4 gap-3">
                <div class="d-flex align-items-center gap-2">
                    <div class="bg-primary-light p-2 rounded-circle text-primary">
                        <i class="ph-bold ph-funnel fs-4"></i>
                    </div>
                    <h5 class="poppins-semibold mb-0">Filter & Cari</h5>
                </div>

                <div class="d-flex flex-wrap gap-3">
                    <div class="custom-select-wrapper">
                        <select id="kategoriFilter" class="form-select shadow-sm ps-4" style="border-radius: var(--radius-full); cursor: pointer;">
                            <option value="">Semua Kategori</option>
                            @foreach ($kategori as $k)
                            <option value="{{ $k->id }}" {{ request('kategori') == $k->id ? 'selected' : '' }}>
                                {{ $k->nama_kategori }}
                            </option>
                            @endforeach
                        </select>
                    </div>

                    <div class="search-wrapper">
                        <div class="input-group shadow-sm" style="border-radius: var(--radius-full);">
                            <span class="input-group-text bg-white border-end-0 ps-4" style="border-radius: var(--radius-full) 0 0 var(--radius-full)">
                                <i class="ph-bold ph-magnifying-glass text-muted"></i>
                            </span>
                            <input type="text" id="searchEvent" class="form-control border-start-0 ps-0" placeholder="Cari event..." value="{{ request('search') }}" style="border-radius: 0 var(--radius-full) var(--radius-full) 0; box-shadow: none;">
                        </div>
                    </div>

                    <button type="button" id="resetFilter" class="btn btn-outline-premium shadow-sm px-4">
                        <i class="ph-bold ph-arrows-clockwise me-1"></i> Reset
                    </button>
                </div>
            </div>

            <div class="border-top border-1 opacity-25 mb-5"></div>

            {{-- Loading Spinner --}}
            <div id="loadingSpinner" class="text-center py-5 d-none">
                <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                    <span class="visually-hidden">Loading...</span>
                </div>
                <p class="mt-3 text-muted">Memuat events...</p>
            </div>

            {{-- Event Grid Container --}}
            <div id="eventContainer" class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                @forelse ($event as $e)
                <div class="col event-card" data-kategori="{{ $e->kategori->id }}" data-title="{{ strtolower($e->title) }}">
                    <div class="card-premium">
                        <div class="card-img-wrapper">
                            <img src="{{ asset('storage/' . $e->gambar_event) }}" class="hover-scale" alt="{{ $e->title }}">
                            <div class="position-absolute top-0 start-0 m-3 z-index-2">
                                <span class="badge rounded-pill px-3 py-2 poppins-medium shadow-sm {{ $e->status_event == 1 ? 'bg-success' : 'bg-danger' }}">
                                    {{ $e->status_event == 1 ? 'Tersedia' : 'Ditutup' }}
                                </span>
                            </div>
                            {{-- Tanggal Overlay --}}
                            <div class="date-overlay-premium shadow-md">
                                <div class="date-content poppins-semibold">
                                    <span class="day">{{ $e->tanggal_event->format('d') }}</span>
                                    <span class="month">{{ $e->tanggal_event->translatedFormat('M') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <span class="card-category">{{ $e->kategori->nama_kategori }}</span>
                            <h5 class="card-title text-truncate-2">
                                {{ $e->title }}
                            </h5>

                            <p class="card-text small mb-4">
                                {!! Str::limit(strip_tags($e->detail_event), 80, '...') !!}
                            </p>

                            <div class="d-flex justify-content-between align-items-center mt-auto border-top pt-3">
                                <div class="d-flex align-items-center gap-2 poppins-medium text-muted">
                                    <i class="ph-fill ph-users text-primary"></i>
                                    <small>{{ $e->kuota }} Kuota</small>
                                </div>

                                <div class="d-flex align-items-center gap-2 poppins-medium text-muted">
                                    <i class="ph-fill ph-clock text-warning"></i>
                                    <small>{{ $e->waktu_event ?? '09:00 WIB' }}</small>
                                </div>
                            </div>
                        </div>

                        <div class="card-footer border-0 pb-4 pt-0">
                            <a href="{{ route('event.show', $e->slug) }}" class="btn btn-gradient text-white w-100 py-3">
                                <i class="ph-bold ph-ticket me-1"></i> Lihat Detail
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center py-5">
                    <div class="empty-state">
                        <i class="ph-bold ph-calendar-x display-1 text-muted opacity-50"></i>
                        <h4 class="mt-3 poppins-semibold text-dark">Belum ada Event</h4>
                        <p class="text-muted">Silakan cek kembali nanti.</p>
                    </div>
                </div>
                @endforelse
            </div>

            {{-- No Results Message --}}
            <div id="noResults" class="text-center py-5 d-none">
                <div class="empty-state">
                    <i class="ph-bold ph-magnifying-glass display-1 text-muted opacity-50"></i>
                    <h4 class="mt-3 poppins-semibold text-dark">Event tidak ditemukan</h4>
                    <p class="text-muted mb-4">Coba gunakan kategori atau kata kunci yang berbeda</p>
                    <button id="resetFilterBtn" class="btn btn-gradient text-white px-5">
                        <i class="ph-bold ph-arrows-clockwise me-1"></i> Reset Pencarian
                    </button>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .event-hover {
        transition: all 0.3s ease;
        border-radius: 12px;
        overflow: hidden;
    }

    .event-hover:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1) !important;
    }

    .event-badge {
        font-size: 0.75rem;
        padding: 6px 12px;
        border-radius: 20px;
    }

    .date-overlay {
        position: absolute;
        top: 15px;
        right: 15px;
        background: rgba(255, 255, 255, 0.95);
        border-radius: 10px;
        padding: 15px;
        text-align: center;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        min-width: 60px;
    }

    .date-content {
        display: flex;
        flex-direction: column;
        gap: 2px;
    }

    .date-content .day {
        font-size: 24px;
        font-weight: bold;
        color: #333;
        line-height: 1;
    }

    .date-content .month {
        font-size: 14px;
        color: #667eea;
        text-transform: uppercase;
        font-weight: 600;
    }

    .date-content .year {
        font-size: 12px;
        color: #666;
    }

    .custom-select-wrapper {
        position: relative;
        min-width: 200px;
    }

    .custom-select {
        width: 100%;
        padding: 10px 40px 10px 15px;
        border: 2px solid #e9ecef;
        border-radius: 8px;
        background-color: white;
        appearance: none;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .custom-select:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.25);
    }

    .select-icon {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        pointer-events: none;
        color: #6c757d;
    }

    .search-wrapper {
        position: relative;
        min-width: 250px;
    }

    .search-wrapper .form-control {
        padding: 10px 40px 10px 15px;
        border: 2px solid #e9ecef;
        border-radius: 8px;
    }

    .search-wrapper .form-control:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.25);
    }

    .search-icon {
        position: absolute;
        right: 15px;
        top: 50%;
        transform: translateY(-50%);
        color: #6c757d;
    }

    .empty-state {
        padding: 40px 20px;
    }

    .stat-item {
        padding: 20px;
        background: rgba(102, 126, 234, 0.05);
        border-radius: 10px;
        transition: transform 0.3s ease;
    }

    .stat-item:hover {
        transform: translateY(-5px);
        background: rgba(102, 126, 234, 0.1);
    }

    .text-truncate-2 {
        display: -webkit-box;
        -webkit-line-clamp: 2;
        -webkit-box-orient: vertical;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    @media (max-width: 768px) {

        .search-wrapper,
        .custom-select-wrapper {
            width: 100%;
        }

        .date-overlay {
            padding: 10px;
            min-width: 50px;
        }

        .date-content .day {
            font-size: 20px;
        }

        .date-content .month {
            font-size: 12px;
        }
    }

</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Filter dengan debounce
        let searchTimeout;

        function filterEvents() {
            let searchTerm = $('#searchEvent').val().toLowerCase();
            let kategoriFilter = $('#kategoriFilter').val();

            $('#loadingSpinner').removeClass('d-none');

            setTimeout(() => {
                let visibleCount = 0;

                $('.event-card').each(function() {
                    let eventTitle = $(this).data('title');
                    let eventKategori = $(this).data('kategori').toString();

                    let matchSearch = searchTerm === '' || eventTitle.includes(searchTerm);
                    let matchKategori = kategoriFilter === '' || eventKategori === kategoriFilter;

                    if (matchSearch && matchKategori) {
                        $(this).removeClass('d-none');
                        visibleCount++;
                    } else {
                        $(this).addClass('d-none');
                    }
                });

                $('#loadingSpinner').addClass('d-none');

                if (visibleCount === 0) {
                    $('#eventContainer').addClass('d-none');
                    $('#noResults').removeClass('d-none');
                } else {
                    $('#eventContainer').removeClass('d-none');
                    $('#noResults').addClass('d-none');
                }
            }, 300);
        }

        // Search dengan debounce
        $('#searchEvent').on('input', function() {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(filterEvents, 300);
        });

        // Filter kategori
        $('#kategoriFilter').on('change', filterEvents);

        // Reset filter
        $('#resetFilter, #resetFilterBtn').on('click', function() {
            $('#searchEvent').val('');
            $('#kategoriFilter').val('');
            filterEvents();
        });

        // Enter untuk search
        $('#searchEvent').on('keypress', function(e) {
            if (e.which === 13) {
                filterEvents();
            }
        });
    });

</script>

@endsection
