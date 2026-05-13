@extends('layouts.app')

@section('title', 'Daftar')

@section('content')

<section class="py-5" style="background-color: var(--color-bg);">
    <div class="container" data-aos="fade-up">
        <div class="mb-5 text-center">
            <h6 class="section-title">Pendaftaran</h6>
            <h2 class="poppins-bold text-dark display-6">Mulai Perjalanan Anda</h2>
            <p class="text-muted">Lengkapi formulir di bawah ini untuk bergabung dengan program kami.</p>
        </div>

        <div class="card-premium p-4 p-md-5 border-0 shadow-sm mb-5">
            <div class="d-flex justify-content-between align-items-center mb-5">
                <div class="d-flex align-items-center gap-3">
                    <a href="{{ route('home.index') }}" class="btn btn-outline-premium p-0 d-flex align-items-center justify-content-center" style="width: 45px; height: 45px; border-radius: 12px;">
                        <i class="ph-bold ph-arrow-left"></i>
                    </a>
                    <h4 class="poppins-bold mb-0 text-dark">Formulir Pendaftaran</h4>
                </div>

                <div class="d-none d-md-block">
                    <a href="https://wa.me/62895639055084" target="_blank" class="text-decoration-none text-success poppins-semibold d-inline-flex align-items-center bg-success bg-opacity-10 px-4 py-2 rounded-pill">
                        <i class="ph-fill ph-whatsapp me-2 fs-5"></i> Hubungi Bantuan
                    </a>
                </div>
            </div>

            <div class="card-body bg-primary-light mb-5 p-4 rounded-4 border border-primary border-opacity-10">
                <div class="d-flex align-items-start gap-3">
                    <div class="bg-primary text-white p-2 rounded-3">
                        <i class="ph-fill ph-info fs-4"></i>
                    </div>
                    <div>
                        <p class="mb-0 text-dark poppins-medium">Jika ada kendala pendaftaran, silakan hubungi admin melalui WhatsApp untuk bantuan cepat.</p>
                    </div>
                </div>
            </div>

            {{-- Menampilkan error validasi --}}
            @if ($errors->any())
            <div class="alert alert-danger rounded-4 border-0 shadow-sm mb-4">
                <ul class="mb-0 poppins-medium small">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <form action="{{ route('daftar.store') }}" method="POST">
                @csrf

                <!-- Section: Data Diri -->
                <div class="row g-4 mb-5">
                    <div class="col-12 border-bottom pb-3">
                        <h5 class="poppins-bold text-primary mb-0 d-flex align-items-center gap-2">
                            <i class="ph-fill ph-user-circle"></i> Data Personal
                        </h5>
                    </div>

                    <div class="col-md-6">
                        <label for="name" class="form-label">Nama Lengkap <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" placeholder="Masukkan nama lengkap Anda" required>
                    </div>

                    <div class="col-md-6">
                        <label for="email" class="form-label">Email Aktif <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="contoh@email.com" required>
                    </div>

                    <div class="col-md-6">
                        <label for="phone" class="form-label">Nomor WhatsApp <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" placeholder="08xxxxxxxxxx" required>
                    </div>

                    <div class="col-md-6">
                        <label for="gender" class="form-label">Jenis Kelamin <span class="text-danger">*</span></label>
                        <select class="form-select" id="gender" name="gender" required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-laki" {{ old('gender') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ old('gender') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>
                </div>

                <!-- Section: Alamat -->
                <div class="row g-4 mb-5">
                    <div class="col-12 border-bottom pb-3">
                        <h5 class="poppins-bold text-primary mb-0 d-flex align-items-center gap-2">
                            <i class="ph-fill ph-map-pin"></i> Alamat Lengkap
                        </h5>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Provinsi <span class="text-danger">*</span></label>
                        <select class="form-select" id="select_provinsi" name="provinsi" required>
                            <option value="">Pilih Provinsi</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Kabupaten / Kota <span class="text-danger">*</span></label>
                        <select class="form-select" id="select_kabkota" name="kabkota" required disabled>
                            <option value="">Pilih Kab/Kota</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Kecamatan <span class="text-danger">*</span></label>
                        <select class="form-select" id="select_kecamatan" name="kecamatan" required disabled>
                            <option value="">Pilih Kecamatan</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label class="form-label">Desa / Kelurahan <span class="text-danger">*</span></label>
                        <select class="form-select" id="select_desa" name="desa" required disabled>
                            <option value="">Pilih Desa/Kelurahan</option>
                        </select>
                    </div>

                    <div class="col-md-9">
                        <label for="alamat_detail" class="form-label">Detail Alamat <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="alamat_detail" name="alamat_detail" placeholder="Jalan, RT/RW, Dusun" value="{{ old('alamat_detail') }}" required>
                    </div>

                    <div class="col-md-3">
                        <label for="kodepos" class="form-label">Kode Pos</label>
                        <input type="text" class="form-control" id="kodepos" name="kodepos" value="{{ old('kodepos') }}" maxlength="6">
                    </div>

                    <div class="col-12" id="preview_alamat_box" style="display:none;">
                        <div class="p-3 rounded-4 bg-light border border-dashed text-muted small">
                            <i class="ph-bold ph-info me-2"></i> Preview: <span id="preview_alamat_text"></span>
                        </div>
                    </div>
                </div>

                <!-- Section: Program -->
                <div class="row g-4 mb-5">
                    <div class="col-12 border-bottom pb-3">
                        <h5 class="poppins-bold text-primary mb-0 d-flex align-items-center gap-2">
                            <i class="ph-fill ph-book-open"></i> Pilihan Program
                        </h5>
                    </div>

                    <div class="col-md-6">
                        <label for="training_id" class="form-label">Pilih Kursus</label>
                        <select class="form-select" id="training_id" name="training_id">
                            <option value="">-- Tidak Memilih Kursus --</option>
                            @foreach ($training as $t)
                            <option value="{{ $t->id }}" data-jadwal="{{ $t->tanggal_mulai->translatedFormat('d F Y') }} s/d {{ $t->tanggal_selesai->translatedFormat('d F Y') }}" data-harga="{{number_format($t->kursus->harga_kursus, 0, ',', '.') }}" {{ $training_id == $t->id ? 'selected' : '' }}>{{ $t->kursus->kelas->nama_kelas }} - {{ $t->kursus->nama_kursus }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="event_id" class="form-label">Pilih Event</label>
                        <select class="form-select" id="event_id" name="event_id">
                            <option value="">-- Tidak Memilih Event --</option>
                            @foreach ($events as $event)
                            <option value="{{ $event->id }}" data-tanggal="{{ $event->tanggal_event->translatedFormat('d F Y') }}" {{ $event_id == $event->id ? 'selected' : '' }}>{{ $event->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="text-center mt-5">
                    <button type="button" class="btn btn-gradient text-white px-5 py-3 poppins-bold fs-5 shadow-lg w-100 w-md-auto" id="btnPreview">
                        <i class="ph-bold ph-check-circle me-2"></i> Review & Daftar
                    </button>
                    <p class="mt-3 text-muted small poppins-medium">Pastikan data yang diisi sudah benar sebelum menekan tombol daftar.</p>
                </div>

            </form>
        </div>
    </div>
</section>

        {{-- Modal Konfirmasi --}}
        <div class="modal fade" id="modalPreview" data-bs-backdrop="false" data-bs-keyboard="false" tabindex="1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content custom-card border-0 p-3">

                    <div class="modal-header border-0 pb-0">
                        <h5 class="modal-title poppins-bold text-dark">Konfirmasi Data</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <div class="card custom-card border-0 bg-primary bg-opacity-10 mb-4 shadow-sm">
                            <div class="card-body p-4">
                                <div class="d-flex align-items-start gap-3">
                                    <i class="ph-fill ph-info display-6 text-primary"></i>
                                    <p class="mb-0 text-dark poppins-medium">
                                        Setelah mendaftar, tunggu konfirmasi melalui WhatsApp. Admin akan menghubungi Anda untuk melakukan pembayaran dan langkah selanjutnya. Pastikan nomor WhatsApp yang Anda masukkan aktif.
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive rounded-3 border">
                            <table class="table table-borderless table-striped mb-0">
                                <tbody>
                                    <tr class="bg-light border-bottom">
                                        <td colspan="2" class="py-3">
                                            <div class="d-flex align-items-center gap-2 poppins-bold text-dark fs-6">
                                                <i class="ph-fill ph-user-circle text-primary fs-4"></i>
                                                Data Diri
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted poppins-medium" style="width: 30%;">Nama Lengkap</td>
                                        <td id="preview_name" class="poppins-semibold text-dark"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted poppins-medium">Email</td>
                                        <td id="preview_email" class="text-dark"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted poppins-medium">No. WhatsApp</td>
                                        <td id="preview_phone" class="text-dark"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted poppins-medium">Alamat</td>
                                        <td id="preview_address" class="text-dark" style="line-height: 1.6;"></td>
                                    </tr>

                                    <tr class="bg-light border-bottom border-top mt-3">
                                        <td colspan="2" class="py-3">
                                            <div class="d-flex align-items-center gap-2 poppins-bold text-dark fs-6">
                                                <i class="ph-fill ph-book-open-text text-primary fs-4"></i>
                                                Data Pendaftaran
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted poppins-medium">Kursus</td>
                                        <td id="preview_training" class="poppins-semibold text-primary"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted poppins-medium">Jadwal Kursus</td>
                                        <td id="preview_schedule" class="text-dark"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted poppins-medium">Biaya Kursus</td>
                                        <td id="preview_price_training" class="poppins-semibold text-success"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted poppins-medium">Event</td>
                                        <td id="preview_event" class="poppins-semibold text-primary"></td>
                                    </tr>
                                    <tr>
                                        <td class="text-muted poppins-medium">Tanggal Event</td>
                                        <td id="preview_date" class="text-dark"></td>
                                    </tr>
                                    <tr class="border-top bg-light">
                                        <td class="poppins-bold fs-5 text-dark py-3">Total Biaya</td>
                                        <td id="preview_total" class="poppins-bold fs-5 text-success py-3"></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="card mt-4 border border-warning border-opacity-50 bg-warning bg-opacity-10 rounded-3">
                            <div class="card-body p-3 d-flex align-items-center gap-3">
                                <i class="ph-fill ph-warning text-warning fs-3"></i>
                                <span class="poppins-medium text-dark">Pastikan data yang Anda masukkan sudah benar sebelum melanjutkan. Klik tombol "OK" untuk menyelesaikan pendaftaran.</span>
                            </div>
                        </div>

                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secgradient" data-bs-dismiss="modal">Batal</button>
                        <button class="btn btn-gradient text-white px-5" id="btnSubmitReal">OK</button>
                    </div>

                </div>
            </div>
        </div>

@endsection
@push('scripts')
<script>
    const API_BASE = 'https://www.emsifa.com/api-wilayah-indonesia/api';
    const modal    = new bootstrap.Modal(document.getElementById('modalPreview'));

    // =================== HELPERS ===================
    function setLoading(selectEl, isLoading) {
        selectEl.disabled = isLoading;
        if (isLoading) {
            selectEl.innerHTML = '<option value="">Memuat data...</option>';
        }
    }

    function resetSelect(selectEl, placeholder) {
        selectEl.innerHTML = `<option value="">${placeholder}</option>`;
        selectEl.disabled  = true;
    }

    function buildAlamatPreview() {
        const provinsi   = document.getElementById('select_provinsi').options[document.getElementById('select_provinsi').selectedIndex]?.text || '';
        const kabkota    = document.getElementById('select_kabkota').options[document.getElementById('select_kabkota').selectedIndex]?.text || '';
        const kecamatan  = document.getElementById('select_kecamatan').options[document.getElementById('select_kecamatan').selectedIndex]?.text || '';
        const desa       = document.getElementById('select_desa').options[document.getElementById('select_desa').selectedIndex]?.text || '';
        const detail     = document.getElementById('alamat_detail').value;
        const kodepos    = document.getElementById('kodepos').value;

        const parts = [detail, desa, kecamatan, kabkota, provinsi, kodepos].filter(Boolean);
        const box   = document.getElementById('preview_alamat_box');
        const text  = document.getElementById('preview_alamat_text');

        if (parts.length > 1) {
            text.textContent = parts.join(', ');
            box.style.display = 'block';
        } else {
            box.style.display = 'none';
        }
        return parts.join(', ');
    }

    // =================== LOAD PROVINSI ===================
    fetch(`${API_BASE}/provinces.json`)
        .then(r => r.json())
        .then(data => {
            const sel = document.getElementById('select_provinsi');
            data.forEach(p => {
                const opt = document.createElement('option');
                opt.value = p.name;
                opt.dataset.id = p.id;
                opt.textContent = p.name;
                sel.appendChild(opt);
            });
        })
        .catch(() => {
            document.getElementById('select_provinsi').innerHTML = '<option value="">Gagal memuat provinsi</option>';
        });

    // =================== PROVINSI → KAB/KOTA ===================
    document.getElementById('select_provinsi').addEventListener('change', function () {
        const selectedOpt = this.options[this.selectedIndex];
        const provId      = selectedOpt.dataset.id;

        resetSelect(document.getElementById('select_kabkota'), '-- Pilih Kab/Kota --');
        resetSelect(document.getElementById('select_kecamatan'), '-- Pilih Kecamatan --');
        resetSelect(document.getElementById('select_desa'), '-- Pilih Desa/Kelurahan --');
        document.getElementById('preview_alamat_box').style.display = 'none';

        if (!provId) return;

        const kabSel = document.getElementById('select_kabkota');
        setLoading(kabSel, true);

        fetch(`${API_BASE}/regencies/${provId}.json`)
            .then(r => r.json())
            .then(data => {
                kabSel.innerHTML = '<option value="">-- Pilih Kab/Kota --</option>';
                data.forEach(k => {
                    const opt = document.createElement('option');
                    opt.value = k.name;
                    opt.dataset.id = k.id;
                    opt.textContent = k.name;
                    kabSel.appendChild(opt);
                });
                kabSel.disabled = false;
            })
            .catch(() => {
                kabSel.innerHTML = '<option value="">Gagal memuat data</option>';
            });
    });

    // =================== KAB/KOTA → KECAMATAN ===================
    document.getElementById('select_kabkota').addEventListener('change', function () {
        const selectedOpt = this.options[this.selectedIndex];
        const kabId       = selectedOpt.dataset.id;

        resetSelect(document.getElementById('select_kecamatan'), '-- Pilih Kecamatan --');
        resetSelect(document.getElementById('select_desa'), '-- Pilih Desa/Kelurahan --');
        buildAlamatPreview();

        if (!kabId) return;

        const kecSel = document.getElementById('select_kecamatan');
        setLoading(kecSel, true);

        fetch(`${API_BASE}/districts/${kabId}.json`)
            .then(r => r.json())
            .then(data => {
                kecSel.innerHTML = '<option value="">-- Pilih Kecamatan --</option>';
                data.forEach(k => {
                    const opt = document.createElement('option');
                    opt.value = k.name;
                    opt.dataset.id = k.id;
                    opt.textContent = k.name;
                    kecSel.appendChild(opt);
                });
                kecSel.disabled = false;
            })
            .catch(() => {
                kecSel.innerHTML = '<option value="">Gagal memuat data</option>';
            });
    });

    // =================== KECAMATAN → DESA ===================
    document.getElementById('select_kecamatan').addEventListener('change', function () {
        const selectedOpt = this.options[this.selectedIndex];
        const kecId       = selectedOpt.dataset.id;

        resetSelect(document.getElementById('select_desa'), '-- Pilih Desa/Kelurahan --');
        buildAlamatPreview();

        if (!kecId) return;

        const desaSel = document.getElementById('select_desa');
        setLoading(desaSel, true);

        fetch(`${API_BASE}/villages/${kecId}.json`)
            .then(r => r.json())
            .then(data => {
                desaSel.innerHTML = '<option value="">-- Pilih Desa/Kelurahan --</option>';
                data.forEach(d => {
                    const opt = document.createElement('option');
                    opt.value = d.name;
                    opt.dataset.id = d.id;
                    opt.textContent = d.name;
                    desaSel.appendChild(opt);
                });
                desaSel.disabled = false;
            })
            .catch(() => {
                desaSel.innerHTML = '<option value="">Gagal memuat data</option>';
            });
    });

    // =================== DESA → UPDATE PREVIEW ===================
    document.getElementById('select_desa').addEventListener('change', buildAlamatPreview);
    document.getElementById('alamat_detail').addEventListener('input', buildAlamatPreview);
    document.getElementById('kodepos').addEventListener('input', buildAlamatPreview);

    // =================== TOMBOL DAFTAR / PREVIEW ===================
    document.getElementById('btnPreview').addEventListener('click', function () {
        const name       = document.getElementById('name').value.trim();
        const email      = document.getElementById('email').value.trim();
        const phone      = document.getElementById('phone').value.trim();
        const provinsi   = document.getElementById('select_provinsi').value;
        const kabkota    = document.getElementById('select_kabkota').value;
        const kecamatan  = document.getElementById('select_kecamatan').value;
        const desa       = document.getElementById('select_desa').value;
        const detail     = document.getElementById('alamat_detail').value.trim();
        const training   = document.getElementById('training_id');
        const event      = document.getElementById('event_id');

        // Validasi data diri
        if (!name || !email || !phone) {
            Swal.fire({ icon: 'warning', title: 'Data Diri Belum Lengkap', text: 'Silakan lengkapi nama, email, dan nomor WhatsApp.' });
            return;
        }

        // Validasi alamat
        if (!provinsi || !kabkota || !kecamatan || !desa || !detail) {
            Swal.fire({ icon: 'warning', title: 'Alamat Belum Lengkap', text: 'Silakan pilih Provinsi, Kab/Kota, Kecamatan, Desa, dan isi detail jalan.' });
            return;
        }

        // Validasi kursus/event
        if (training.value === '' && event.value === '') {
            Swal.fire({ icon: 'warning', title: 'Pilih Kursus atau Event', text: 'Silakan pilih salah satu kursus/event atau keduanya jika tersedia.' });
            return;
        }

        const selectedTraining = training.options[training.selectedIndex];
        const selectedEvent    = event.options[event.selectedIndex];

        // Isi tabel preview modal
        document.getElementById('preview_name').textContent    = name || '-';
        document.getElementById('preview_email').textContent   = email || '-';
        document.getElementById('preview_phone').textContent   = phone || '-';
        document.getElementById('preview_address').textContent = buildAlamatPreview() || '-';

        // Training
        if (training.value !== '') {
            document.getElementById('preview_training').textContent       = selectedTraining.text;
            document.getElementById('preview_schedule').textContent       = selectedTraining.dataset.jadwal;
            document.getElementById('preview_price_training').textContent = 'Rp ' + selectedTraining.dataset.harga;
            document.getElementById('preview_total').textContent          = 'Rp ' + selectedTraining.dataset.harga;
        } else {
            document.getElementById('preview_training').textContent       = '-';
            document.getElementById('preview_schedule').textContent       = '-';
            document.getElementById('preview_price_training').textContent = '-';
            document.getElementById('preview_total').textContent          = '-';
        }

        // Event
        if (event.value !== '') {
            document.getElementById('preview_event').textContent = selectedEvent.text;
            document.getElementById('preview_date').textContent  = selectedEvent.dataset.tanggal;
        } else {
            document.getElementById('preview_event').textContent = '-';
            document.getElementById('preview_date').textContent  = '-';
        }

        modal.show();
    });

    document.getElementById('btnSubmitReal').addEventListener('click', function () {
        document.querySelector('form').submit();
    });
</script>
@endpush
