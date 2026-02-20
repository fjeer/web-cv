@extends('layouts.app')

@section('title', 'daftar-detail')

{{-- ================= CONTENT ================= --}}
@section('content')
<section class="">
    <div class="container py-5">
        <h2>Detail Pendaftaran</h2>
        <hr>
        <div class="card shadow mb-4">
            <div class="card-body p-5">
                <div class="alert alert-primary text-black mb-5" role="alert">
                    <i class="bi bi-info-circle-fill text-info"></i> Jika ada kesalahan data atau informasi yang ingin diperbarui, silakan hubungi admin melalui WhatsApp untuk bantuan lebih lanjut. <a href="https://wa.me/6282144356926" target="_blank" class="text-decoration-none text-success"><i class="bi bi-whatsapp text-success"></i> 0821-4435-6926</a>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <h6>Data Diri:</h6>
                        <table class="table table-primary table-striped table-hover table-bordered border-primary poppins-light">
                            <tbody>
                                <tr>
                                    <td>No Pendaftaran</td>
                                    <td>:</td>
                                    <td class="poppins-medium">{{ $daftar->no_daftar }}</td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td>:</td>
                                    <td>{{ $daftar->name }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>:</td>
                                    <td>{{ $daftar->email }}</td>
                                </tr>
                                <tr>
                                    <td>No. WhatsApp</td>
                                    <td>:</td>
                                    <td>{{ $daftar->phone }}</td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td>
                                    <td>:</td>
                                    <td>{{ $daftar->gender }}</td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td>:</td>
                                    <td>{{ $daftar->address }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <div class="col-md-6">
                        <h6>Detail Pendaftaran:</h6>
                        @if($daftar->training_id && $daftar->event_id)
                            <table class="table table-primary table-striped table-hover table-bordered border-primary poppins-light">
                                <tbody>
                                    <tr>
                                        <td colspan="3">
                                            <div class="d-flex align-items-center gap-3">

                                                <i class="bi bi-journal-text text-primary"></i>
                                                <img src="{{ asset('storage/' . $daftar->training->kursus->gambar_kursus) }}" alt="Gambar Kursus" class="img-fluid mb-3" style="max-height: 100px; object-fit: cover;">
                                                <span class="poppins-medium"> {{ $daftar->training->kursus->nama_kursus }}
                                                    <span class="poppins-reguler d-block text-muted" style="font-size: 14px;">
                                                        {{ $daftar->training->kursus->deskripsi_kursus }}
                                                    </span>
                                                </span>

                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kursus</td>
                                        <td>:</td>
                                        <td>{{ $daftar->training->kursus->kelas->nama_kelas ?? '-' }} - {{ $daftar->training->kursus->nama_kursus ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jadwal</td>
                                        <td>:</td>
                                        <td>{{ $daftar->training->tanggal_mulai->translatedFormat('d F Y') ?? '-' }} - {{ $daftar->training->tanggal_selesai->translatedFormat('d F Y') ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td>Rp. {{ number_format($daftar->training->kursus->harga_kursus, 0, ',', '.') ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td colspan="3">
                                            <div class="d-flex align-items-center gap-3">
                                                <i class="bi bi-calendar-event text-primary"></i>
                                                <img src="{{ asset('storage/' . $daftar->event->gambar_event) }}" alt="Gambar Event" class="img-fluid mb-3" style="max-height: 80px; object-fit: cover;">
                                                <span class="poppins-medium"> {{ $daftar->event->title }}
                                                    <span class="poppins-reguler d-block text-muted" style="font-size: 14px;">
                                                        ikuti event seru di SigmaTech
                                                    </span>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Event</td>
                                        <td>:</td>
                                        <td>{{ $daftar->event->title ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>:</td>
                                        <td>{{ $daftar->event->tanggal_event->translatedFormat('d F Y') ?? '-' }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        @elseif($daftar->training_id && !$daftar->event_id)
                            <table class="table table-primary table-striped table-hover table-bordered border-primary poppins-light">
                                <tbody>
                                    <tr>
                                        <td colspan="3">
                                            <div class="d-flex align-items-center gap-3">

                                                <i class="bi bi-journal-text text-primary"></i>
                                                <img src="{{ asset('storage/' . $daftar->training->kursus->gambar_kursus) }}" alt="Gambar Kursus" class="img-fluid mb-3" style="max-height: 100px; object-fit: cover;">
                                                <span class="poppins-medium"> {{ $daftar->training->kursus->nama_kursus }}
                                                    <span class="poppins-reguler d-block text-muted" style="font-size: 14px;">
                                                        {{ $daftar->training->kursus->deskripsi_kursus }}
                                                    </span>
                                                </span>

                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Kursus</td>
                                        <td>:</td>
                                        <td>{{ $daftar->training->kursus->kelas->nama_kelas ?? '-' }} - {{ $daftar->training->kursus->nama_kursus ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Jadwal</td>
                                        <td>:</td>
                                        <td>{{ $daftar->training->tanggal_mulai->translatedFormat('d F Y') ?? '-' }} - {{ $daftar->training->tanggal_selesai->translatedFormat('d F Y') ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td>Rp. {{ number_format($daftar->training->kursus->harga_kursus, 0, ',', '.') ?? '-' }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        @elseif(!$daftar->training_id && $daftar->event_id)
                            <table class="table table-primary table-striped table-hover table-bordered border-primary poppins-light">
                                <tbody>
                                    <tr>
                                        <td colspan="3">
                                            <div class="d-flex align-items-center gap-3">
                                                <i class="bi bi-calendar-event text-primary"></i>
                                                <img src="{{ asset('storage/' . $daftar->event->gambar_event) }}" alt="Gambar Event" class="img-fluid mb-3" style="max-height: 80px; object-fit: cover;">
                                                <span class="poppins-medium"> {{ $daftar->event->title }}
                                                    <span class="poppins-reguler d-block text-muted" style="font-size: 14px;">
                                                        ikuti event seru di SigmaTech
                                                    </span>
                                                </span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Event</td>
                                        <td>:</td>
                                        <td>{{ $daftar->event->title ?? '-' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Tanggal</td>
                                        <td>:</td>
                                        <td>{{ $daftar->event->tanggal_event->translatedFormat('d F Y') ?? '-' }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        @endif
                    </div>
                </div>

                <div class="alert alert-primary my-4" role="alert">
    
                    <h5 class="alert-heading poppins-semibold"><i class="bi bi-exclamation-square-fill text-primary"></i> Informasi Penting!</h5>

                    <p class="text-black">Tunggu konfirmasi melalui whatsapp. Admin akan menghubungi Anda untuk melakukan pembayaran dan langkah selanjutnya. Pastikan nomor whatsapp yang Anda masukkan aktif dan dapat dihubungi.</p>
                </div>

                <table class="table">
                    <tbody>
                        <tr>
                            <td>No. Pendaftaran</td>
                            <td>:</td>
                            <td><span class="badge bg-primary">{{ $daftar->no_daftar ?? '---' }}</span></td>
                             <td rowspan="3" class="align-middle">
                                 <img src="{{ asset('images/csan-qr-a.jpg') }}" alt="QR Code" class="img-fluid" style="max-width: 350px;">
                             </td>
                        </tr>
                        <tr>
                            <td>Transfer Ke Rekening</td>
                            <td>:</td>
                            <td class="poppins-medium"> 12345678901234  <span class="badge bg-info">  Bank MANDIRI </span> AN - SigmaTech</td>
                        </tr>
                        <tr>
                            <td>Total Pembayaran</td>
                            <td>:</td>
                            <td class="poppins-medium">Rp. {{ number_format($daftar->training->kursus->harga_kursus ?? $daftar->event->harga_event ?? $daftar->training->kursus->harga_kursus + $daftar->event->harga_event ?? 0, 0, ',', '.') }}</td>
                        </tr>
                    </tbody>
                </table>

                <div class="alert alert-info mt-4" role="alert">
                    <i class="bi bi-info-circle-fill text-info"></i> Silakan lakukan pembayaran sesuai total harga di atas ke rekening yang tersedia. Setelah pembayaran dilakukan, kirimkan bukti pembayaran ke <a href="https://wa.me/6282144356926" target="_blank" class="text-decoration-none text-success poppins-semibold">WhatsApp admin</a> untuk konfirmasi.

                </div>  
            </div>
    </div>
</section>
@endsection