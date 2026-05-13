@extends('layouts.app')

@section('title', 'Kursus - SigmaTech')

@section('content')

<section class="hero-bg w-100" style="background-image: url('{{ asset('images/banner2.webp') }}'); padding: 120px 0 80px 0;">
    <div class="container position-relative z-index-2">
        <div class="row">
            <div class="col-lg-6 col-md-8">
                <div class="container text-white" data-aos="fade-right">
                    <h2 class="poppins-semibold mb-3 display-5">Tingkatkan Keahlianmu <br> <span class="text-warning">Pilih Jalur Belajarmu di SigmaTech</span></h2>
                    <p class="mb-4 fs-5 text-white-50">
                        Pelajari bidang IT sesuai passion-mu. Setiap program dirancang berbasis proyek dan dibimbing langsung oleh praktisi industri.
                    </p>
                    <span class="badge badge-premium bg-white text-primary px-4 py-2 poppins-medium fs-6">Kursus (Program / Kelas)</span>
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
                <div class="input-group shadow-sm" style="border-radius: var(--radius-full);">
                    <span class="input-group-text bg-white border-end-0 ps-4" style="border-radius: var(--radius-full) 0 0 var(--radius-full)">
                        <i class="ph-bold ph-magnifying-glass text-muted"></i>
                    </span>
                    <input type="text" id="searchCourse" class="form-control border-start-0 ps-0" placeholder="Cari kursus atau keahlian..." style="border-radius: 0 var(--radius-full) var(--radius-full) 0; box-shadow: none;">
                </div>
            </div>

            <div class="col-lg-3 col-md-6 mb-3 mb-md-0">
                <select id="filterKelas" class="form-select shadow-sm" style="border-radius: var(--radius-full);">
                    <option value="">Semua Kelas</option>
                    @foreach($kelas as $kls)
                        <option value="{{ $kls->id }}">{{ $kls->nama_kelas }}</option>
                    @endforeach
                </select>
            </div>

            <div class="col-lg-2 col-md-6">
                <button id="resetFilter" class="btn btn-outline-secondary w-100 shadow-sm" style="border-radius: var(--radius-full);">
                    <i class="ph-bold ph-arrows-clockwise me-1"></i> Reset
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Course Grid Section -->
<section class="course-section" style="background-image: url('{{ asset('images/bg-jadwal-1.webp') }}')">

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
                <div class="card custom-card border-0 h-100">
                    <div class="position-relative overflow-hidden" style="border-radius: var(--radius-xl) var(--radius-xl) 0 0;">
                        <img src="{{ asset('storage/'.$krs->gambar_kursus) }}" class="card-img-top hover-scale" style="height: 200px; object-fit: cover;" alt="{{ $krs->nama_kursus }}">

                        <span class="position-absolute top-0 end-0 m-3 badge px-3 py-2 poppins-medium shadow-sm {{ $krs->id_kelas == 1 ? 'bg-primary' : ($krs->id_kelas == 2 ? 'bg-warning text-dark' : 'bg-danger') }}">
                            {{ $krs->Kelas->nama_kelas }}
                        </span>
                        <div class="position-absolute bottom-0 start-0 m-2">
                            <span class="badge bg-dark bg-opacity-75 px-3 py-2 shadow-sm rounded-pill">
                                <i class="ph-bold ph-buildings me-1"></i> Industri
                            </span>
                        </div>
                    </div>

                    <div class="card-body d-flex flex-column p-4">

                        <h5 class="card-title poppins-semibold mb-2 text-dark">{{ $krs->nama_kursus }}</h5>

                        <p class="card-text text-muted small flex-grow-1 mb-3">
                            {{ Str::limit(strip_tags($krs->deskripsi_kursus), 100) }}
                        </p>

                        <div class="d-flex align-items-center mb-4">
                            <div class="text-warning me-2 d-flex align-items-center">
                                <i class="ph-fill ph-star me-1 fs-5"></i>
                                <span class="poppins-bold text-dark">{{ $krs->rating_kursus }}</span>
                            </div>
                        </div>

                        <div class="mt-auto">
                            <div class="d-flex justify-content-between align-items-center mb-4">
                                <h5 class="text-primary poppins-bold mb-0">
                                    Rp {{ number_format($krs->harga_kursus, 0, ',', '.') }}
                                </h5>
                                <span class="badge bg-success bg-opacity-10 text-success px-2 py-1 poppins-medium rounded-pill">
                                    <i class="ph-bold ph-certificate me-1"></i>Sertifikat
                                </span>
                            </div>

                            <div class="d-grid gap-2">
                                <a href="{{ route('kursus.show', $krs->slug) }}" class="btn btn-gradient text-white">
                                    <i class="ph-bold ph-eye me-1"></i> Detail Kursus
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
                <i class="bi bi-laptop display-5 text-muted"></i>
            </div>
            <h4 class="text-muted mb-3">Kursus Belum Tersedia </h4>
            <p class="text-muted mb-4">Silakan cek kembali nanti atau coba kata kunci lain.</p>
        </div>

        <!-- Load More -->
        <div class="text-center mt-4">
            {{ $kursus->links('pagination::bootstrap-5') }}
        </div>

    </div>

</section>

<!-- Section Call to Action -->
<section class="call-to-action mb-5 mt-4">
    <div class="container py-5">
        <div class="row justify-content-center" data-aos="fade-up">
            <div class="col-lg-10">
                <div class="cardcur p-5 text-center shadow-lg border-0" style="border-radius: var(--radius-xl);">
                    <h1 class="poppins-bold mb-3 display-5">
                        Berhenti Belajar <span class="text-warning">Tanpa Tujuan.</span>
                    </h1>
                    <p class="poppins-medium text-white-50 fs-5 mb-5 px-md-5">
                        <span class="text-warning fw-bold">SigmaTech</span> bantu kamu kuasai keahlian IT secara terarah,
                        praktik langsung, dan siap kerja di era digital.
                    </p>
                    <a href="{{ route('daftar.index') }}" target="_blank" class="btn btn-secgradient text-white px-5 py-3 poppins-bold shadow-lg" style="font-size: 1.1rem;">
                        <i class="ph-bold ph-user-plus me-2"></i> Daftar Sekarang
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .badge.bg-info {
        background-color: #0dcaf0 !important;
    }

    .badge.bg-warning {
        background-color: #ffc107 !important;
    }

    .badge.bg-danger {
        background-color: #dc3545 !important;
    }

    .form-control:focus,
    .form-select:focus {
        border-color: var(--color-primary);
        box-shadow: 0 0 0 0.25rem rgba(50, 153, 205, 0.25);
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

        // Initial filter state
        filterCourses();
    });

</script>

@endsection
