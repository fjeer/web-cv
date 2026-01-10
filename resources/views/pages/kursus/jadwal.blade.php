@extends('layouts.app')

@section('title', 'Jadwal Kursus')

@section('content')
<div class="container py-5">
    <h2 class="fw-bold mb-4">Form Jadwal Kursus</h2>

    <div class="card custom-card p-3">
        <div class="table-responsive">
            <table class="table table-striped table-hover align-middle">
                <thead class="table-primary">
                    <tr>
                        <th>Nama Kursus</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Harga</th>
                        <th>Lokasi</th>
                        <th>Kuota</th>
                        <th>Status</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jadwalKursus as $jadwal)
                        <tr>
                            <td>{{ $jadwal->kursus->nama_kursus }}</td>
                            <td>{{ \Carbon\Carbon::parse($jadwal->tanggal)->format('d M Y') }}</td>
                            <td>{{ \Carbon\Carbon::parse($jadwal->jam)->format('H:i') }}</td>
                            <td>Rp {{ number_format($jadwal->kursus->harga_kursus, 0, ',', '.') }}</td>
                            <td>{{ $jadwal->lokasi }}</td>
                            <td>{{ $jadwal->kuota }}</td>
                            <td>
                                @if($jadwal->status == 'tersedia')
                                    <span class="badge bg-success">Tersedia</span>
                                @elseif($jadwal->status == 'penuh')
                                    <span class="badge bg-danger">Penuh</span>
                                @else
                                    <span class="badge bg-secondary">{{ $jadwal->status }}</span>
                                @endif
                            </td>
                            <td>
                                @if($jadwal->status == 'tersedia')
                                    <a href="{{ route('jadwal.daftar', $jadwal->id) }}" class="btn btn-primary btn-sm">Daftar</a>
                                @else
                                    <button class="btn btn-secondary btn-sm" disabled>Daftar</button>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
