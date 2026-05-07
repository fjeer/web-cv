@extends('layouts.app')

@section('title', 'course-detail')

@section('content')
<div class="container py-5 site-main">
    <div class="mb-4 d-flex align-items-center">
        <a href="{{ route('kursus.index') }}" class="text-primary text-decoration-none bg-primary-light p-2 rounded-circle hover-scale d-inline-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
            <i class="ph-bold ph-arrow-left"></i>
        </a>
        <h3 class="poppins-bold mb-0 text-dark">Detail Kursus <span class="text-muted fw-normal mx-2">></span> <span class="text-primary">{{ $kursus->nama_kursus }}</span></h3>
    </div>

    <div class="row g-4 d-flex">
        <!-- Bagian Utama (Deskripsi Kursus) -->
        <div class="col-lg-8 h-100">

            <h4 class="poppins-medium text-dark lh-base mb-4">{{ $kursus->deskripsi_kursus }}</h4>

            <div class="d-flex align-items-center gap-3 mb-4">
                <span class="badge bg-primary-light text-primary px-3 py-2 poppins-medium rounded-pill fs-6">
                    <i class="ph-bold ph-tag me-1"></i> {{ $kursus->kelas->nama_kelas }}
                </span>
            </div>

            <div class="d-flex mb-4">
                <span class="badge btn-gradient text-white px-4 py-2 poppins-medium fs-6 shadow-sm rounded-pill">Deskripsi Lengkap</span>
            </div>

            <div class="mb-5 pb-5">
                <div class="card custom-card border-0 p-4">
                    <div class="card-header bg-transparent border-bottom-0 pb-0">
                        <h5 class="poppins-semibold text-primary mb-0"><i class="ph-bold ph-info me-2"></i> Tentang Kursus</h5>
                        <hr class="text-primary opacity-25">
                    </div>
                    <div class="card-body pt-2 text-dark" style="line-height: 1.8;">
                        {!! $kursus->detail_kursus !!}
                    </div>
                </div>
            </div>
        </div>

        <!-- Bagian Sidebar (Harga & Fitur) -->
        <div class="col-lg-4 h-100">
            <div class="card custom-card border-0 pb-4">
                <div class="position-relative p-3 pb-0">
                    <img src="{{ asset('storage/'.$kursus->gambar_kursus) }}" class="card-img-top rounded-4 shadow-sm" alt="{{ $kursus->nama_kursus }}" style="height: 240px; object-fit: cover;">
                </div>

                <div class="d-flex justify-content-center align-items-center mt-4 px-3">
                    <div class="card bg-primary-light border border-primary border-opacity-25 w-100 rounded-3 shadow-sm">
                        <div class="card-body text-center text-primary py-4">
                            <span class="poppins-medium d-block mb-1">Harga Kursus</span>
                            <h2 class="poppins-bold mb-0 text-dark">Rp {{ number_format($kursus->harga_kursus,0,',','.') }}</h2>
                        </div>
                    </div>
                </div>

                <div class="card-body px-4 pt-4">
                    <div class="d-grid mb-4">
                        <a href="{{ route('training.index') }}" class="btn btn-secgradient text-white py-3 fs-6 rounded-pill poppins-bold shadow-sm">
                            Lihat Jadwal Kursus <i class="ph-bold ph-arrow-right ms-1"></i>
                        </a>
                    </div>

                    <h6 class="poppins-semibold mb-3 text-dark d-flex align-items-center">
                        <i class="ph-fill ph-check-circle text-primary me-2 fs-5"></i> Yang akan kamu dapatkan:
                    </h6>
                    <ul class="poppins-medium text-muted small ps-3" style="line-height: 1.8;">
                        <li class="mb-2">Pendampingan langsung dari mentor berpengalaman di bidangnya</li>
                        <li class="mb-2">Belajar praktik nyata sesuai kebutuhan industri</li>
                        <li class="mb-2">Bimbingan karier & pengembangan skill profesional</li>
                        <li class="mb-2">Sertifikat kompetensi resmi dari SigmaTech</li>
                        <li class="mb-0">Kelas luring interaktif dengan pendekatan pembelajaran personal</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
