@extends('layouts.app')

@section('title', 'Jadwal Kursus')

@section('content')
<section style="background-image: url('{{ asset('images/bg-jadwal-1.png') }}');">


    <div class="container py-3">

        <div class="training-jadwal" data-aos="fade-zoom-in" data-aos-duration="800">

            <div class="card border-0 rounded-3 p-3 mb-4">
                <div class="card-body bg-warning bg-opacity-10 mb-5">
                    <div class="position-relative ps-4">

                        <!-- ICON POJOK -->
                        <i class="bi bi-exclamation-octagon fs-3 text-warning position-absolute top-0 start-0"></i>
                        <ul>
                            <li class="text-muted">Jika <strong>tidak menemukan jadwal</strong> kursus yang Anda inginkan, silakan hubungi admin kami melalui WhatsApp di nomor <a href="https://wa.me/6282144356926" target="_blank" class="text-decoration-none">0821-4435-6926</a> untuk informasi jadwal terbaru.</li>

                            <li class="text-muted">Pendaftaran kursus <strong>ditutup pada hari H</strong>. Namun, disarankan mendaftar lebih awal untuk memastikan ketersediaan seat.</li>

                            <li class="text-muted">Pastikan sudah <strong>melakukan pembayaran</strong> ketika mendaftar, <strong>simpan</strong> bukti pembayaran Anda.</li>

                            <li class="text-muted">Jika Anda sudah melakukan pendaftaran, silakan <strong>tunggu konfirmasi</strong> dari admin kami melalui WhatsApp.</li>

                            <li class="text-muted">Jika <strong>tidak mendapat konfirmasi</strong> dalam waktu 24 jam, silakan hubungi admin kami melalui WhatsApp di nomor <a href="https://wa.me/6282144356926" target="_blank" class="text-decoration-none">0821-4435-6926</a>.</li>

                            <li class="text-muted">Jika <strong>ingin mengubah atau menghapus</strong> pendaftaran, silakan hubungi admin kami melalui WhatsApp di nomor <a href="https://wa.me/6282144356926" target="_blank" class="text-decoration-none">0821-4435-6926</a>.</li>

                            <li class="text-muted">Kami juga menyediakan <strong>private / inhouse</strong> kursus dengan jadwal dan lokasi sesuai permintaan perusahaan atau institusi Anda.</li>

                        </ul>

                    </div>

                </div>

                {{-- ================= HEADER + SEARCH ================= --}}
                <div class="d-flex flex-wrap justify-content-between align-items-center mb-4 gap-3">

                    <div class="d-flex align-items-center gap-2">
                        <h5 class="fw-bold mb-0">Jadwal Kursus</h5>
                    </div>

                    <form action="{{ route('training.index') }}" method="GET" class="d-flex gap-3">
                        <input type="text" name="search" class="form-control" style="max-width: 220px" placeholder="Cari kursus..." value="{{ request('search') }}">

                        <div class="custom-select-wrapper">
                            <select name="status" class="custom-select">
                                <option value="">Semua Status</option>
                                <option value="1" {{ request('status') == '1' ? 'selected' : '' }}>
                                    Tersedia
                                </option>
                                <option value="0" {{ request('status') == '0' ? 'selected' : '' }}>
                                    Ditutup
                                </option>
                            </select>
                            <i class="bi bi-chevron-down select-icon"></i>
                        </div>

                        <div class="custom-select-wrapper">
                            <select name="kelas" class="custom-select">
                                <option value="">Semua kelas</option>
                                @foreach ($kelas as $k )
                                <option value="{{ $k->id }}" {{ request('kelas') == $k->id ? 'selected' : ''}}>{{ $k->nama_kelas }}</option>
                                @endforeach
                            </select>
                            <i class="bi bi-chevron-down select-icon"></i>
                        </div>

                        <button type="submit" class="btn button-biru">
                            <i class="bi bi-search"></i>
                        </button>
                    </form>

                </div>


                {{-- ================= TABLE / EMPTY STATE ================= --}}
                <div class="card custom-card p-3">
                    <div class="table-responsive">

                        @if($training->count() == 0)
                        {{-- EMPTY STATE --}}
                        <div class="text-center py-5">
                            <i class="bi bi-calendar-x fs-1 text-muted"></i>
                            <h5 class="mt-3">Belum ada jadwal kursus</h5>
                            <p class="text-muted">Silakan cek kembali atau gunakan filter lain.</p>
                        </div>
                        @else
                        {{-- TABLE --}}
                        <table class="table table-striped table-hover align-middle">
                            <thead class="table-primary">
                                <tr>
                                    <th>Nama Kursus</th>
                                    <th>Tanggal</th>
                                    <th>Waktu</th>
                                    <th>Harga</th>
                                    <th>Kuota</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($training as $jadwal)
                                <tr>
                                    <td><a href="{{ route('kursus.show', $jadwal->kursus->slug) }}" class="text-decoration-none text-black fw-semibold">{{ $jadwal->kursus->nama_kursus }}</a></td>
                                    <td>
                                        {{ $jadwal->tanggal_mulai->translatedFormat('d F Y') }}
                                        s/d
                                        {{ $jadwal->tanggal_selesai->translatedFormat('d F Y') }}
                                    </td>
                                    <td>{{ $jadwal->waktu }}</td>
                                    <td>
                                        Rp {{ number_format($jadwal->kursus->harga_kursus, 0, ',', '.') }}
                                    </td>
                                    <td>{{ $jadwal->kuota }}</td>
                                    <td>
                                        @if($jadwal->status)
                                        <span class="badge bg-success">Tersedia</span>
                                        @else
                                        <span class="badge bg-danger">Ditutup</span>
                                        @endif
                                    </td>
                                    <td>
                                        @if($jadwal->status)
                                        <a href="#" class="btn btn-outline-primary btn-sm">
                                            Daftar
                                        </a>
                                        @else
                                        <button class="btn btn-secondary btn-sm" disabled>
                                            Daftar
                                        </button>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        @endif

                    </div>
                </div>

                {{-- ================= PAGINATION (OPTIONAL) ================= --}}
                <div class="mt-3">
                    {{ $training->links() }}
                </div>

            </div>

        </div>
    </div>

</section>
@endsection
