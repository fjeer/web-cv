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
                <td><a href="{{ route('kursus.show', $jadwal->kursus->slug) }}" class="text-black poppins-medium">{{ $jadwal->kursus->nama_kursus }}</a></td>
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
                    <a href="{{ route('daftar.index', ['training_id' => $jadwal->id]) }}" target="_blank" class="btn btn-primary btn-sm">
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
