@extends('layouts.app')

@section('title', 'course-detail')

@section('content')
<div class="container py-5">
    <div class="mb-3">
        <a href="{{ route('kursus.index') }}" class="text-secondary text-decoration-none">
            ← kembali</a>
        <h2 class="poppins-semibold mt-3">Detail Kursus > {{ $kursus->nama_kursus }}</h2>
    </div>

    <div class="row d-flex">
        <!-- Bagian Utama (Deskripsi Kursus) -->
        <div class="col-md-8 h-100">
    
            <h3 class="poppins-medium">{{ $kursus->deskripsi_kursus }}</h3>

            <div class="d-flex justify-content align-items-center gap-3 mb-4">
                <span class="text-secondary text-decoration-underline fs-6">{{ $kursus->kelas->nama_kelas }}</span>
            </div>

            <div class="d-flex justify-content mb-4">
                <span class="card p-2 poppins-medium bg-primary bg-opacity-50 text-white" style="border-radius: 20px; box-shadow:5px 5px 5px rgb(0, 0, 0, 0.6); border: solid 1px #3399CC;">Deskripsi</span>
            </div>

            <div class="mb-5 pb-5">
                <div class="card py-2" style="color: #1e2e49; border-radius: 20px; box-shadow:5px 5px 5px rgb(0, 0, 0, 0.6); border: solid 1px #3399CC;">
                    <div class="card-header text-muted bg-white" style="border-top-left-radius: 20px; border-top-right-radius: 20px;">
                        <h6>Detail Kursus > {{ $kursus->nama_kursus }} </h6>
                    </div>
                    <div class="card-body">
                        {!! $kursus->detail_kursus !!}
                    </div>
                </div>
            </div>
        </div>

        <!-- Bagian Sidebar (Harga & Fitur) -->
        <div class="col-md-4 h-100">
            <div class="card bg-primary bg-opacity-10" style="color: #1e2e49; border-radius: 20px; box-shadow:5px 5px 5px rgb(0, 0, 0, 0.6); border: solid 1px #3399CC;">
                <img src="{{ asset('storage/'.$kursus->gambar_kursus) }}" class="card-img-top" alt="Produk 1" style="height: 240px; object-fit: cover; border-radius: 20px; border:#1e2e49 solid 2px;">

                <div class="d-flex justify-content-center align-items-center mt-5">
                    <div class="card px-3 bg-primary bg-opacity-75" style="border-radius: 5px">
                        <div class="card-body text-center text-white">
                            <h3 class="poppins-semibold">Harga Kursus:</h3>
                            <h2 class="poppins-semibold">Rp. {{ number_format($kursus->harga_kursus,0,',','.') }}</h2>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="text-center">
                        <a href="{{ route('training.index') }}" class="btn kuning-round fs-6 my-3 p-3">Lihat jadwal kursus <i class="bi bi-arrow-right"></i></a>
                    </div>

                    <h5 class="poppins-semibold mt-4 mb-2 text-primary">Yang akan kamu dapatkan :</h5>
                    <ul class="poppins-semibold">
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
