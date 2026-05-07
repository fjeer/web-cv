<div class="table-responsive rounded-3 border">
    @if($training->count() == 0)
    {{-- EMPTY STATE --}}
    <div class="text-center py-5">
        <i class="ph-fill ph-calendar-x display-1 text-muted opacity-50"></i>
        <h5 class="mt-4 poppins-semibold text-dark">Belum ada jadwal kursus</h5>
        <p class="text-muted poppins-regular">Silakan cek kembali atau gunakan filter lain.</p>
    </div>
    @else
    {{-- TABLE --}}
    <table class="table table-striped table-hover align-middle mb-0">
        <thead class="text-primary poppins-semibold">
            <tr>
                <th class="py-3 px-4 rounded-start">Nama Kursus</th>
                <th class="py-3">Tanggal</th>
                <th class="py-3">Waktu</th>
                <th class="py-3">Harga</th>
                <th class="py-3">Kuota</th>
                <th class="py-3">Status</th>
                <th class="py-3 px-4 rounded-end">Aksi</th>
            </tr>
        </thead>
        <tbody class="border-top-0">
            @foreach($training as $jadwal)
            <tr>
                <td class="px-4 py-3"><a href="{{ route('kursus.show', $jadwal->kursus->slug) }}" class="text-dark poppins-semibold text-decoration-none hover-text-primary transition-all">{{ $jadwal->kursus->nama_kursus }}</a></td>
                <td class="py-3 text-muted poppins-medium">
                    {{ $jadwal->tanggal_mulai->translatedFormat('d F Y') }}
                    <br>
                    <small class="text-muted">s/d</small>
                    <br>
                    {{ $jadwal->tanggal_selesai->translatedFormat('d F Y') }}
                </td>
                <td class="py-3 text-muted poppins-medium">{{ $jadwal->waktu }}</td>
                <td class="py-3 poppins-semibold text-success">
                    Rp {{ number_format($jadwal->kursus->harga_kursus, 0, ',', '.') }}
                </td>
                <td class="py-3 poppins-bold text-dark">{{ $jadwal->kuota }}</td>
                <td class="py-3">
                    @if($jadwal->status)
                    <span class="badge bg-success bg-opacity-10 text-success border border-success border-opacity-25 px-3 py-2 rounded-pill poppins-medium">Tersedia</span>
                    @else
                    <span class="badge bg-danger bg-opacity-10 text-danger border border-danger border-opacity-25 px-3 py-2 rounded-pill poppins-medium">Ditutup</span>
                    @endif
                </td>
                <td class="px-4 py-3">
                    @if($jadwal->status)
                    <a href="{{ route('daftar.index', ['training_id' => $jadwal->id]) }}" target="_blank" class="btn btn-gradient text-white btn-sm px-4 rounded-pill poppins-semibold shadow-sm">
                        Daftar
                    </a>
                    @else
                    <button class="btn btn-secondary btn-sm px-4 rounded-pill poppins-semibold shadow-sm" disabled>
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
