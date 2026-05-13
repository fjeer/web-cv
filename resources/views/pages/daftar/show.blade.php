@extends('layouts.app')

@section('title', 'daftar-detail')

{{-- ================= CONTENT ================= --}}
@section('content')
@php
    $trainingHarga = (int) ($daftar->training?->kursus?->harga_kursus ?? 0);
    $eventHarga = (int) ($daftar->event?->harga_event ?? 0);
    $totalHarga = $trainingHarga + $eventHarga;
@endphp
<section class="py-5" style="background-color: var(--color-bg);">
    <div class="container" data-aos="fade-up">
        <div class="mb-5 text-center">
            <h6 class="section-title">Konfirmasi Pendaftaran</h6>
            <h2 class="poppins-bold text-dark display-6">Terima Kasih, {{ explode(' ', trim($daftar->name))[0] }}!</h2>
            <p class="text-muted">Pendaftaran Anda telah berhasil diterima. Berikut adalah detail informasi Anda.</p>
        </div>

        <div class="card-premium p-4 p-md-5 border-0 shadow-sm mb-5">
            <div class="card-body bg-primary-lightz mb-5 p-4 rounded-4 border border-primary border-opacity-10">
                <div class="d-flex align-items-start gap-3">
                    <div class="bg-primary text-white p-2 rounded-3">
                        <i class="ph-fill ph-info fs-4"></i>
                    </div>
                    <div>
                        <p class="mb-0 text-dark poppins-medium small">Jika ada kesalahan data atau ingin memperbarui informasi, silakan hubungi admin via WhatsApp untuk bantuan cepat.</p>
                        <a href="https://wa.me/62895639055084" target="_blank" class="text-decoration-none text-success poppins-semibold d-inline-flex align-items-center bg-white px-3 py-1 rounded-pill mt-2 shadow-sm small">
                            <i class="ph-fill ph-whatsapp me-2"></i> +62 895-6390-55084
                        </a>
                    </div>
                </div>
            </div>

            <div class="row g-5">
                <!-- Data Diri -->
                <div class="col-lg-6">
                    <h5 class="poppins-bold text-dark mb-4 d-flex align-items-center gap-2">
                        <i class="ph-fill ph-user-circle text-primary fs-3"></i> Informasi Peserta
                    </h5>
                    <div class="table-responsive rounded-4 border">
                        <table class="table table-borderless table-striped mb-0">
                            <tbody class="small">
                                <tr>
                                    <td class="p-3 text-muted" style="width: 35%;">No. Pendaftaran</td>
                                    <td class="p-3 text-dark poppins-bold">{{ $daftar->no_daftar }}</td>
                                </tr>
                                <tr>
                                    <td class="p-3 text-muted">Nama Lengkap</td>
                                    <td class="p-3 text-dark poppins-medium">{{ $daftar->name }}</td>
                                </tr>
                                <tr>
                                    <td class="p-3 text-muted">Email</td>
                                    <td class="p-3 text-dark">{{ $daftar->email }}</td>
                                </tr>
                                <tr>
                                    <td class="p-3 text-muted">Nomor WhatsApp</td>
                                    <td class="p-3 text-dark">{{ $daftar->phone }}</td>
                                </tr>
                                <tr>
                                    <td class="p-3 text-muted">Jenis Kelamin</td>
                                    <td class="p-3 text-dark">{{ $daftar->gender }}</td>
                                </tr>
                                <tr>
                                    <td class="p-3 text-muted">Alamat</td>
                                    <td class="p-3 text-dark">
                                        @if($daftar->provinsi)
                                            <span class="d-block poppins-medium">{{ $daftar->alamat_detail }}</span>
                                            <span class="d-block text-muted">{{ $daftar->desa }}, {{ $daftar->kecamatan }}</span>
                                            <span class="d-block text-muted">{{ $daftar->kabkota }}, {{ $daftar->provinsi }} {{ $daftar->kodepos }}</span>
                                        @else
                                            {{ $daftar->address ?? '-' }}
                                        @endif
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- Detail Program -->
                <div class="col-lg-6">
                    <h5 class="poppins-bold text-dark mb-4 d-flex align-items-center gap-2">
                        <i class="ph-fill ph-book-open text-primary fs-3"></i> Program Terdaftar
                    </h5>

                    @if($daftar->training_id)
                    <div class="card bg-light border-0 rounded-4 mb-3 p-3">
                        <div class="d-flex align-items-center gap-3">
                            <img src="{{ asset('storage/' . $daftar->training->kursus->gambar_kursus) }}" alt="Kursus" class="rounded-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;">
                            <div>
                                <h6 class="poppins-bold text-dark mb-1">{{ $daftar->training->kursus->nama_kursus }}</h6>
                                <p class="text-muted small mb-0">{{ $daftar->training->tanggal_mulai->translatedFormat('d M Y') }} - {{ $daftar->training->tanggal_selesai->translatedFormat('d M Y') }}</p>
                                <span class="text-primary poppins-semibold small">Biaya: Rp {{ number_format($daftar->training->kursus->harga_kursus, 0, ',', '.') }}</span>
                            </div>
                        </div>
                    </div>
                    @endif

                    @if($daftar->event_id)
                    <div class="card bg-light border-0 rounded-4 p-3">
                        <div class="d-flex align-items-center gap-3">
                            <img src="{{ asset('storage/' . $daftar->event->gambar_event) }}" alt="Event" class="rounded-3 shadow-sm" style="width: 80px; height: 80px; object-fit: cover;">
                            <div>
                                <h6 class="poppins-bold text-dark mb-1">{{ $daftar->event->title }}</h6>
                                <p class="text-muted small mb-0">{{ $daftar->event->tanggal_event->translatedFormat('d M Y') }}</p>
                                <span class="text-primary poppins-semibold small">Acara SigmaTech</span>
                            </div>
                        </div>
                    </div>
                    @endif

                    <div class="card mt-4 bg-primary text-white border-0 shadow-lg p-4 rounded-4">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="mb-0 opacity-75 small">Total Pembayaran</p>
                                <h3 class="poppins-bold mb-0">Rp {{ number_format($totalHarga, 0, ',', '.') }}</h3>
                            </div>
                            <div class="bg-primary-light p-3 rounded-circle">
                                <i class="ph-fill ph-wallet fs-2"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Pembayaran -->
            <div class="mt-5 border-top pt-5">
                <div class="row align-items-center g-4">
                    <div class="col-md-7">
                        <h5 class="poppins-bold text-dark mb-3">Informasi Pembayaran</h5>
                        <p class="text-muted small">Silakan lakukan pembayaran sesuai total harga ke rekening di bawah ini. Setelah pembayaran dilakukan, segera kirimkan bukti bayar untuk aktivasi.</p>

                        <div class="card border rounded-4 p-4 mt-4 shadow-sm bg-white">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <span class="badge bg-primary px-3 py-2 rounded-pill poppins-semibold">BANK MANDIRI</span>
                                <i class="ph-fill ph-bank fs-3 text-muted"></i>
                            </div>
                            <h4 class="poppins-bold text-dark mb-1">1234 5678 9012 34</h4>
                            <p class="text-muted mb-0 poppins-medium">A.N. SigmaTech Digital Solution</p>
                        </div>
                    </div>
                    <div class="col-md-5 text-center">
                        <div class="bg-light p-4 rounded-4 border border-dashed shadow-sm">
                            <img src="{{ asset('images/csan-qr-a.webp') }}" alt="QR Code" class="img-fluid rounded-3 mb-3" style="max-width: 250px;">
                            <p class="text-muted small mb-0">Scan QR Code untuk info bantuan CS</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="alert alert-warning border-0 rounded-4 mt-5 p-4 shadow-sm">
                <div class="d-flex align-items-start gap-3">
                    <i class="ph-fill ph-warning-circle fs-3 text-warning"></i>
                    <div>
                        <h6 class="poppins-bold text-dark mb-2">Instruksi Selanjutnya</h6>
                        <p class="mb-0 text-dark opacity-75 small">Admin akan menghubungi Anda via WhatsApp dalam waktu 1x24 jam untuk verifikasi. Jika belum mendapat respon, silakan klik tombol di bawah untuk konfirmasi manual.</p>
                        <a href="https://wa.me/62895639055084?text=Halo%20Admin%2C%20saya%20sudah%20mendaftar%20dengan%20nomor%20{{ $daftar->no_daftar }}" target="_blank" class="btn btn-gradient text-white mt-3 px-4 py-2 poppins-bold">
                            <i class="ph-bold ph-paper-plane-tilt me-2"></i> Konfirmasi Pembayaran
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
