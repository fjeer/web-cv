@extends('layouts.app')

@section('title', 'Kursus - SigmaTech')

@section('content')

<section class="hero-section w-100" style="background-image: url('{{ asset('images/banner2.png') }}');">
    <div class="container py-5">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <div class="container" data-aos="fade-right">
                    <h2 class="poppins-semibold mb-3">Tingkatkan Keahlianmu <br> Pilih Jalur Belajarmu di SigmaTech</h2>
                    <p class="mb-4">
                        Pelajari bidang IT sesuai passion-mu <br> Setiap program dirancang berbasis proyek dan dibimbing
                        langsung oleh praktisi industri.
                    </p>
                    <h4 class="poppins-medium mb-3 fs-5">Kursus (Program / Kelas).</h4> 
                </div>
            </div>
        </div>
    </div>
</section>

<div data-aos="fade-up">
    <div class="container pt-5">
        <h5 class="poppins-semibold">Daftar Kursus</h5>
    </div>
</div>

<!-- Filter Section -->
<div class="container-fluid py-3 shadow-sm" data-aos="fade-up">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-6 mb-3 mb-md-0">
                <div class="input-group">
                    <span class="input-group-text btn-gradient" style="border-radius: 20px 0 0 20px">
                        <i class="bi bi-search text-white"></i>
                    </span>
                    <input type="text" id="searchCourse" class="form-control" placeholder="Cari kursus atau keahlian..." style="border-radius: 0 20px 20px 0">
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-3 mb-md-0">
                <select id="filterKelas" class="form-select" style="border-radius: 20px;">
                    <option value="">Semua Kelas</option>
                    @foreach($kelas as $kls)
                        <option value="{{ $kls->id }}">{{ $kls->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-lg-2 col-md-6">
                <button id="resetFilter" class="btn btn-warning w-100 rounded-pill">
                    <i class="bi bi-arrow-clockwise"></i> Reset
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Course Grid Section -->
<section class="course-section" style="background-image: url('{{ asset('images/bg-jadwal-1.png') }}')">

    <div class="container py-5" data-aos="fade-zoom-in">
        <!-- Loading Spinner -->
        <div id="loadingSpinner" class="text-center d-none">
            <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;">
                <span class="visually-hidden">Loading...</span>
            </div>
            <p class="mt-3 text-muted">Memuat kursus...</p>
        </div>

        <!-- Course Grid -->
        <div id="courseContainer" class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
            @foreach($kursus as $krs)
            <div class="col course-card" data-kelas="{{ $krs->id_kelas }}" data-name="{{ strtolower($krs->nama_kursus) }}">
                <div class="card border-0 shadow-sm course-hover">
                    <div class="position-relative">
                        <img src="{{ asset('storage/'.$krs->gambar_kursus) }}" class="card-img-top" style="height: 200px; object-fit: cover;" alt="{{ $krs->nama_kursus }}">

                        <span class="position-absolute top-0 end-0 m-3 badge {{ $krs->id_kelas == 1 ? 'bg-primary' : ($krs->id_kelas == 2 ? 'bg-warning text-dark' : 'bg-danger') }}">
                            {{ $krs->Kelas->nama_kelas }}
                        </span>
                        <div class="position-absolute bottom-0 start-0 m-2">
                            <span class="badge bg-dark bg-opacity-75">
                                <i class="bi bi-building me-1"></i>
                            </span>
                        </div>
                    </div>

                    <div class="card-body d-flex flex-column">

                        <h5 class="card-title poppins-semibold mb-2 text-truncate">{{ $krs->nama_kursus }}</h5>

                        <p class="card-text text-muted text-decoration-underline small flex-grow-2" style="min-height: 30px;">
                            {{ Str::limit(strip_tags($krs->deskripsi_kursus), 100) }}
                        </p>

                        <div class="d-flex align-items-center mb-1">
                            <div class="text-warning me-2">
                                <i class="bi bi-star-fill"></i>
                                <small class="poppins-bold">{{ $krs->rating_kursus }}</small>
                            </div>
                        </div>

                        <div class="mt-auto">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="text-primary text-decoration-underline poppins-medium mb-0">
                                    Rp {{ number_format($krs->harga_kursus) }}
                                </h5>
                                <span class="badge bg-success bg-opacity-10 text-success">
                                    <i class="bi bi-check-circle me-1"></i>Sertifikat
                                </span>
                            </div>

                            <div class="d-grid gap-2">
                                <a href="{{ route('kursus.show', $krs->slug) }}" class="btn btn-gradient text-white fw-bold">
                                    <i class="bi bi-eye me-1"></i> Detail Kursus
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <!-- No Results Message -->
        <div id="noResults" class="text-center py-5 d-none">
            <div class="mb-4">
                <i class="bi bi-search display-5 text-muted"></i>
            </div>
            <h4 class="text-muted mb-3">Kursus tidak ditemukan</h4>
            <p class="text-muted mb-4">Coba gunakan kata kunci atau filter yang berbeda</p>
            <button id="resetFilterBtn" class="btn btn-danger">
                <i class="bi bi-arrow-clockwise"></i>
            </button>
        </div>

        <!-- Load More -->
        <div class="text-center mt-4">
            {{ $kursus->links('pagination::bootstrap-5') }}
        </div>

    </div>

</section>

<!-- Section Call to Action -->
<section class="call-to-action">
    <div class="container py-5">
        <div class="row g-4 text-center justify-content-center">
            <div class="col-md-10">
                <div class="text-center">
                    <div class="cardcur p-5">
                        <h1 class="poppins-bold" style="font-size: 34px; -webkit-text-stroke: 1px black;">
                            Berhenti Belajar <span style="color: #FF741F;">Tanpa Tujuan.</span>
                        </h1>
                        <h4 class="poppins-semibold" style="-webkit-text-stroke: 1px black;">
                            <span style="color: #FF741F;">SigmaTech</span> bantu kamu kuasai keahlian IT secara terarah,
                            praktik <br> langsung, dan siap kerja di era digital.
                        </h4>
                        <div class="d-flex justify-content-center gap-3">
                            <a href="{{ route('daftar.index') }}" target="_blank" class="kuning-round btn mt-4 poppins-semibold" style="font-size:18px;">
                                <i class="bi bi-person-fill text-dark"></i> Daftar Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .course-hover {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        border-radius: 12px;
        overflow: hidden;
    }

    .course-hover:hover {
        transform: translateY(-8px);
        box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1) !important;
    }

    .card-img-top {
        transition: transform 0.5s ease;
    }

    .course-hover:hover .card-img-top {
        transform: scale(1.05);
    }

    .badge.bg-info {
        background-color: #0dcaf0 !important;
    }

    .badge.bg-warning {
        background-color: #ffc107 !important;
    }

    .badge.bg-danger {
        background-color: #dc3545 !important;
    }

    .form-control,
    .form-select {
        border-radius: 8px;
        border: 2px solid #e9ecef;
        padding: 10px 15px;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: #667eea;
        box-shadow: 0 0 0 0.25rem rgba(102, 126, 234, 0.25);
    }

    .input-group-text {
        border-radius: 8px 0 0 8px;
    }

</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        let originalCourses = $('#courseContainer').html();

        function filterCourses() {
            let searchTerm = $('#searchCourse').val().toLowerCase();
            let KelasFilter = $('#filterKelas').val();

            $('#loadingSpinner').removeClass('d-none');

            setTimeout(() => {
                let visibleCount = 0;

                $('.course-card').each(function() {
                    let courseName = $(this).data('name');
                    let courseKelas = $(this).data('kelas');

                    let matchSearch = searchTerm === '' || courseName.includes(searchTerm);
                    let matchKelas = KelasFilter === '' || courseKelas == KelasFilter;

                    if (matchSearch && matchKelas) {
                        $(this).removeClass('d-none');
                        visibleCount++;
                    } else {
                        $(this).addClass('d-none');
                    }
                });

                $('#loadingSpinner').addClass('d-none');

                if (visibleCount === 0) {
                    $('#courseContainer').addClass('d-none');
                    $('#noResults').removeClass('d-none');
                } else {
                    $('#courseContainer').removeClass('d-none');
                    $('#noResults').addClass('d-none');
                }
            }, 300);
        }

        // Search input with debounce
        let searchTimeout;
        $('#searchCourse').on('input', function() {
            clearTimeout(searchTimeout);
            searchTimeout = setTimeout(filterCourses, 300);
        });

        // Filter change
        $('#filterKelas').on('change', filterCourses);

        // Reset filter
        $('#resetFilter, #resetFilterBtn').on('click', function() {
            $('#searchCourse').val('');
            $('#filterKelas').val('');
            filterCourses();
        });

        // Initial filter state
        filterCourses();
    });

</script>

@endsection
