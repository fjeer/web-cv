@extends('layouts.app')

@section('title','course-detail')

@section('content')
    <div class="container">
        <a href="{{ route('berita.index') }}"class="mt-5 btn">← Kembali</a>
        <h1 class="fw-bold my-3">Cloudflare Alami Gangguan, X Juga Mengalami Pemadaman</h1>

        <div class="d-flex justify-content-between align-items-center">
            <p class="mb-1">Bustomi</p>
            <p class="text-muted mb-1">
                <i class="bi bi-calendar-event"></i> 12 Jan 2025
            </p>
        </div>
        <img src="{{ asset('images/image1.png') }}" class="" style="width:100%; border-radius: 50px;" alt="Produk 1">
        <div class="my-5 py-5">
        <p>
            Platform media sosial milik Elon Musk, X (sebelumnya Twitter) mengalami pemadaman besar yang memengaruhi ribuan pengguna di Amerika Serikat pada Selasa pagi.
            Menurut situs pelacak pemadaman Downdetector.com, lebih dari 5.200 pengguna melaporkan masalah dengan X pada pukul 18:55 WIB. Downdetector mengumpulkan laporan status dari berbagai sumber untuk memantau gangguan layanan.
            Secara bersamaan, perusahaan infrastruktur web Cloudflare juga mengalami masalah teknis yang memengaruhi layanan online lainnya. Belum jelas apakah pemadaman X dan masalah Cloudflare saling terkait.
            Cloudflare mengakui situasi tersebut di halaman statusnya sekitar pukul 18:40 WIB, dengan menyatakan: "Kami sedang bekerja untuk memahami dampak penuh dan mengatasi masalah ini. Pembaruan lebih lanjut akan segera menyusul."
            Kesulitan teknis tersebut tampaknya berdampak pada sentimen investor terhadap Cloudflare, karena saham perusahaan turun 4,1% dalam perdagangan pra-pasar.
        </p>
        <h3 class="fw-bold">Cloudflare Gangguan Kecil Kemungkinan karena Serangan Siber </h3>

        <p>
            Selama perbaikan, layanan enkripsi Warp di London sempat dinonaktifkan, sehingga pengguna di wilayah tersebut mengalami gagal koneksi. Teknisi Cloudflare dijadwalkan melakukan pemeliharaan pusat data di Tahiti, Los Angeles, Atlanta, dan Santiago (Chili), meskipun belum jelas apakah kegiatan ini terkait dengan gangguan yang terjadi. Ahli Keamanan Siber, Prof. Alan Woodward dari Surrey Centre for Cyber Security, menyebut Cloudflare sebagai “perusahaan terbesar yang belum pernah Anda dengar” dan “penjaga gerbang” internet. Ia menjelaskan bahwa Cloudflare memantau lalu lintas situs untuk melindunginya dari serangan DDoS, di mana pengguna jahat mencoba membanjiri situs dengan permintaan berlebihan.

            Penyebab Cloudflare gangguan disebabkan oleh file konfigurasi otomatis untuk mengelola lalu lintas ancaman (threat traffic) yang membesar melebihi ukuran normal, sehingga memicu crash pada sistem perangkat lunak yang mengatur aliran data sejumlah layanan. Lonjakan lalu lintas yang tidak biasa ini terdeteksi sekitar pukul 05.20, perusahaan menegaskan tidak ada indikasi gangguan disebabkan oleh serangan siber atau aktivitas berbahaya. 

            “Karena pentingnya layanan Cloudflare, setiap gangguan tidak dapat diterima. Kami meminta maaf kepada pelanggan dan seluruh internet atas ketidaknyamanan hari ini,” ujar juru bicara Cloudflare, Rabu (19/11/2025). Cloudflare mengelola dan mengamankan sekitar 20% situs web global, termasuk perlindungan terhadap serangan distributed denial of service (DDoS). 

            Setelah insiden ini, saham Cloudflare turun lebih dari 2%. Gangguan ini terjadi kurang dari sebulan setelah Amazon Web Services (AWS) mengalami pemadaman yang memengaruhi banyak layanan internet, dan beberapa hari kemudian Microsoft Azure serta Microsoft 365 juga sempat mengalami outage global. 

            Gangguan teknis yang terjadi memicu lonjakan galat di berbagai layanan digital, termasuk media sosial dan aplikasi AI. Kejadian ini menegaskan bahwa ketika infrastruktur vital seperti Cloudflare mengalami masalah, dampaknya langsung terasa luas, sehingga pengawasan dan pemeliharaan sistem menjadi sangat penting untuk mencegah gangguan serupa di masa mendatang.
        </p>
        </div>
    </div>
@endsection