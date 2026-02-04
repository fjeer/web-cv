@extends('layouts.app')

@section('title', 'course-detail')

@section('content')
<div class="container">
    <div class="mb-3">
        <a href="{{ route('kursus.index') }}" class="text-secondary text-decoration-none">
            ← kembali</a>
        <h2 class="fw-bold mt-3">Detail Kursus > {{ $kursus->nama_kursus }}</h2>
    </div>

    <div class="row d-flex">
        <!-- Bagian Utama (Deskripsi Kursus) -->
        <div class="col-md-8 h-100">
    
            <h3>{{ $kursus->deskripsi_kursus }}</h3>

            <div class="d-flex justify-content align-items-center gap-3 mb-3">
                <span class="text-secondary text-decoration-underline">{{ $kursus->kelas->nama_kelas }}</span>
            </div>

            <div class="d-flex justify-content mb-4">
                <span class="btn btn-primary custom-left-btn">Deskripsi</span>
            </div>

            <div class="mb-5 pb-5">
                <div class="card py-2 custom-card">
                    <div class="card-body">
                        {!! $kursus->detail_kursus !!}
                    </div>
                </div>
            </div>
        </div>

        <!-- Bagian Sidebar (Harga & Fitur) -->
        <div class="col-md-4 h-100">
            <div class="card custom-card">
                <img src="{{ asset('storage/'.$kursus->gambar_kursus) }}" class="card-img-top" alt="Produk 1">

                <div class="d-flex justify-content-center align-items-center mt-5">
                    <div class="card">
                        <div class="card-body-detail-kursus text-center">
                            <h3>Harga Kursus:</h3>
                            <h2>Rp. {{ number_format($kursus->harga_kursus,0,',','.') }}</h2>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="text-center">
                        <a href="{{ route('training.index') }}" class="tombolkuning btn my-3">Beli Sekarang</a>
                    </div>

                    <h5 class="fw-bold mt-4 mb-2 text-primary">Yang akan kamu dapatkan :</h5>
                    <ul>
                        <li>Pendampingan langsung dari mentor berpengalaman di bidangnya</li>
                        <li>Belajar praktik nyata sesuai kebutuhan industri</li>
                        <li>Bimbingan karier & pengembangan skill profesional</li>
                        <li>Sertifikat kompetensi resmi dari SigmaTech</li>
                        <li>Kelas luring interaktif dengan pendekatan pembelajaran personal</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
