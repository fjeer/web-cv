@extends('layouts.app')

@section('title', 'Jadwal Kursus')

@section('content')
<div class="container py-2">
    <h5 class="fw-bold mb-4">Jadwal Kursus</h5>

    <div class="card custom-card p-3">
        <div class="table-responsive">
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
                            <td>{{ $jadwal->kursus->nama_kursus }}</td>
                            <td>
                                {{ date_format( $jadwal->tanggal_mulai, 'd F Y') }} s/d {{ date_format($jadwal->tanggal_selesai, 'd F Y')}}


                            </td>
                            <td>{{ $jadwal->waktu }}</td>
                            <td>Rp {{ number_format($jadwal->kursus->harga_kursus, 2, ',', '.') }}</td>

                            <td>{{ $jadwal->kuota }}</td>
                            <td>
                                @if($jadwal->status == true)
                                    <span class="badge bg-success">Tersedia</span>
                                @else
                                    <span class="badge bg-danger">Ditutup</span>
                                @endif
                            </td>
                            <td>
                                @if($jadwal->status == true)
                                    <a href="3" class="btn btn-outline-primary btn-sm">Daftar</a>
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
