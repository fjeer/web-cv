@extends('layouts.app')

@section('title', 'Events')

@section('content')

<section class="hero-section" style="background-image: url('{{ asset('images/banner3.png') }}'); background-size: cover; background-position: center;">
    <div class="container py-5" data-aos="fade-right">
        <div class="col-lg-6 col-md-8">
            <h2 class="poppins-semibold mb-3">
                Belajar Langsung, Bangun Koneksi, dan Rasakan Pengalaman Nyata Industri!
            </h2>
            <p class="mb-4">
                Ikuti berbagai event dan training luring yang interaktif dan aplikatif
                untuk meningkatkan skill, membangun koneksi, dan merasakan pengalaman nyata
                di dunia industri.
            </p>
            <h4 class="poppins-medium">Event</h4>
        </div>
    </div>
</section>

<section class="py-5" style="background-image: url({{ asset('images/bg-event-1.png') }});">
    <div class="container" data-aos="fade-up">
        <div class="card border-0 shadow-lg p-4 p-md-5">
            {{-- Filter Section --}}
            <div class="d-flex flex-column flex-md-row justify-content-between align-items-start align-items-md-center mb-4 gap-3">
                <div>
                    <h5 class="poppins-semibold">Daftar Events</h5>
                </div>

                <div class="d-flex flex-wrap gap-3">
                    <div class="custom-select-wrapper">
                        <select id="kategoriFilter" class="custom-select rounded-pill">
                            <option value="">Semua Kategori</option>
                            @foreach ($kategori as $k)
                            <option value="{{ $k->id }}" {{ request('kategori') == $k->id ? 'selected' : '' }}>
                                {{ $k->nama_kategori }}
                            </option>
                            @endforeach
                        </select>
                        <i class="bi bi-chevron-down select-icon"></i>
                    </div>

                    <div class="search-wrapper">
                        <input type="text" id="searchEvent" class="form-control rounded-pill" placeholder="Cari event..." value="{{ request('search') }}">
                        <i class="bi bi-search search-icon"></i>
                    </div>

                    <button type="button" id="resetFilter" class="btn btn-warning" style="border-radius: 15px">
                        <i class="bi bi-arrow-clockwise"></i>
                    </button>
                </div>
            </div>

            <div class="border-top border-2 border-secondary mb-5"></div>

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
                    <div class="card h-100 border-0 shadow-sm event-hover">
                        <div class="position-relative overflow-hidden">
                            <img src="{{ asset('storage/' . $e->gambar_event) }}" class="card-img-top" alt="{{ $e->title }}" style="height: 220px; object-fit: cover;">
                            <div class="position-absolute top-0 start-0 m-3">
                                <span class="badge event-badge {{ $e->status_event = 1 ? 'bg-success' : 'bg-danger' }}">
                                    {{ $e->status_event = 1 ? 'Tersedia' : 'Ditutup' }}
                                </span>
                            </div>
                            <div class="position-absolute bottom-0 end-0 m-3">
                                <span class="badge bg-dark bg-opacity-75">
                                    {{ $e->kategori->nama_kategori }}
                                </span>
                            </div>
                            {{-- Tanggal Overlay --}}
                            <div class="date-overlay">
                                <div class="date-content">
                                    <span class="day">{{ $e->tanggal_event->format('d') }}</span>
                                    <span class="month">{{ $e->tanggal_event->translatedFormat('M') }}</span>
                                    <span class="year">{{ $e->tanggal_event->format('Y') }}</span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body d-flex flex-column">
                            <a href="{{ route('event.show', $e->slug) }}" class="text-decoration-none text-dark stretched-link">
                                <h5 class="card-title poppins-semibold mb-2 text-truncate-2">
                                    {{ $e->title }}
                                </h5>
                            </a>

                            <p class="card-text text-muted small flex-grow-2" style="min-height: 30px;">
                                {!! Str::limit(strip_tags($e->detail_event), 100, '...') !!}
                            </p>

                            <div class="mt-3 pt-3 border-top">
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="d-flex align-items-center gap-2">
                                        <i class="bi bi-people-fill text-primary"></i>
                                        <small class="text-muted">
                                            <strong>{{ $e->kuota }}</strong> Kuota
                                        </small>
                                    </div>

                                    <div class="d-flex align-items-center gap-2">
                                        <i class="bi bi-clock text-primary"></i>
                                        <small class="text-muted">{{ $e->waktu_event ?? '09:00 WIB' }}</small>
                                    </div>
                                </div>

                                {{-- <div class="mt-3">
                                    <div class="progress" style="height: 6px;">
                                        @php
                                        $progress = $e->kuota > 0 ? min(100, (($e->kuota_awal - $e->kuota) / $e->kuota_awal) * 100) : 100;
                                        @endphp
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $progress }}%" aria-valuenow="{{ $progress }}" aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                    <small class="text-muted d-block mt-1">
                                        {{ $e->kuota_awal - $e->kuota }} dari {{ $e->kuota_awal }} terisi
                                    </small>
                                </div> --}}
                            </div>
                        </div>

                        <div class="card-footer bg-transparent border-top-0">
                            <a href="{{ route('event.show', $e->slug) }}" class="btn btn-gradient text-white fw-semibold d-flex align-items-center justify-content-center gap-2">
                                <i class="bi bi-ticket-perforated"></i> Detail Event
                            </a>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center py-5">
                    <div class="empty-state">
                        <i class="bi bi-calendar-x display-1 text-muted"></i>
                        <h4 class="mt-3 text-muted">Belum ada Event</h4>
                        <p class="text-muted">Silakan cek kembali nanti.</p>
                    </div>
                </div>
                @endforelse
            </div>

            {{-- No Results Message --}}
            <div id="noResults" class="text-center py-5 d-none">
                <div class="empty-state">
                    <i class="bi bi-search display-5 text-muted"></i>
                    <h4 class="mt-3 text-muted">Event tidak ditemukan</h4>
                    <p class="text-muted mb-4">Coba gunakan kategori atau kata kunci yang berbeda</p>
                    <button id="resetFilterBtn" class="btn btn-gradient" style="border-radius: 20px">
                        <i class="bi bi-arrow-clockwise fw-bold text-white"></i>
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
