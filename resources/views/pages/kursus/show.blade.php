@extends('layouts.app')

@section('title','course-detail')


@section('content')
    <div class="container">
        <div class="mb-5">
            <h2 class="fw-bold mb-3">Detail Kursus > MikroTik Administration Advanced</h2>
        </div>
    <div class="row d-flex">
        <div class="col-md-8 h-100">
            <h3>MikroTik Administration Advanced</h3>
            <div class="d-flex justify-content align-items-center gap-3">
                <a href="#" class="text-secondary">Kelas Jaringan</a>
                <span class="text-warning">
                    <i class="bi bi-star-fill"></i> 4.5
                </span>
                <div class="">
                    
                    <a href="#" class="text-secondary" >
                    <i class="bi bi-share"></i>    
                    Share</a>
                </div>                
            </div>
            <div class="d-flex justify-content gap-3 mb-5">
                <!-- Button Kiri -->
                <a href="#" class="btn btn-primary custom-left-btn mt-5">
                    Deskripsi
                </a>

                <!-- Button Kanan -->
                <a href="#" class="btn btn-outline-primary custom-right-btn mt-5">
                    Ulasan
                </a>
            </div>
            <div class=" mb-5 pb-5">
                <div class="card py-2 custom-card">

                    <!-- Center image -->


                    <div class="card-body ">
                        <h4 class="fw-bold mb-2 text-primary">Tentang Kelas</h4>
                        <p>
                            Kelas ini ditujukan untuk kamu yang sudah menguasai dasar MikroTik dan ingin melangkah lebih jauh.Peserta akan belajar mengelola interface lanjutan, memperkuat keamanan jaringan, mengatur QoS, dan memahami konsep routing.Kelas ini memberikan pemahaman teknis yang dibutuhkan oleh administrator jaringan profesional.
                        </p>

                        <h4 class="fw-bold mt-4 mb-2 text-primary">Materi Kursus Mencakup:</h4>
                        <ul>
                            <li>Advance interface & bridge</li>
                            <li>MSecurity hardening dan best practices</li>
                            <li>Wireless configuration & hotspot management</li>
                            <li>Quality of Service (QoS)</li>
                            <li>Routing concept dan static routing</li>
                            <li>Implementasi failover & load balancing</li>
                        </ul>

                        <h4 class="fw-bold mt-4 mb-2 text-primary">Target Peserta:</h4>
                        <ul>
                            <li>Administrator jaringan tingkat menengah</li>
                            <li>Teknisi jaringan yang ingin memperdalam MikroTik</li>
                            <li>Peserta yang telah menyelesaikan MikroTik Basic</li>
                        </ul>

                        <h4 class="fw-bold mt-4 mb-2 text-primary">Hasil yang diharapkan</h4>
                        <ul>
                            <li>Mampu mengamankan dan mengoptimalkan jaringan MikroTik</li>
                            <li>Dapat menerapkan QoS dan manajemen bandwidth</li>
                            <li>Menguasai routing dan load balancing</li>
                            <li>Siap bekerja sebagai Network Administrator profesional</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="col-md-4 h-100">
            <div class="card custom-card">
                <img src="{{ asset('images/image1.png') }}" class="card-img-top" alt="Produk 1">
                <div class="d-flex justify-content-center align-items-center mt-5">
                    <div class="card" >
                        <div class="card-body-detail-kursus">
                            <h3>Harga Kursus:</h3>
                            <p style="margin-bottom: 5px;"><del>Rp. 300.000,00</del></p>
                            <h2>Rp. 180.000,00</h2>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <div class="text-center">
                    <a href="#" class=" tombolkuning btn my-3" >
                        Beli Sekarang
                    </a>
                    </div>
                        <h5 class="fw-bold mt-4 mb-2 text-primary">Yang akan kamu dapatkan :</h5>
                        <ul>
                            <li>Pendampingan langsung dari mentor berpengalaman di bidangnya</li>
                            <li>Belajar praktik nyata sesuai kebutuhan industri</li>
                            <li>Bimbingan karier & pengembangan skill profesional</li>
                            <li>Sertifikat kompetensi resmi dari Sigmatech</li>
                            <li>Kelas luring interaktif dengan pendekatan pembelajaran personal</li>
                        </ul>
                </div>
            </div>
        </div>
        </div>

    </div>
@endsection