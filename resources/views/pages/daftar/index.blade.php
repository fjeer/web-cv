@extends('layouts.app')

@section('title', 'Daftar')

@section('content')

<section class="hero-section w-100" style="background-image: url({{ asset('images/bg-jadwal-1.png') }})">

    <div class="container py-5">

        <div class="card shadow-lg p-3">

            <div class="my-3 d-flex justify-content-start align-items-start">
                <a href="{{ route('home.index') }}" class="text-secondary text-decoration-none">
                    ← </a>
                <h4 class="fw-bold ps-2">Daftar</h4>
            </div>

            <div class="card-body bg-primary bg-opacity-25 mb-5" style="border-radius: 10px">
                <div class="d-flex align-items-between gap-2">
                    <!-- ICON POJOK -->
                    <i class="bi bi-info-circle-fill text-primary"></i>
                    Jika ada kendala pendaftaran, silahkan hubungi admin melalui whatsapp
                    <!-- END ICON POJOK -->
                    <a href="https://wa.me/6282144356926" target="_blank" class="text-decoration-none text-success"><i class="bi bi-whatsapp text-success"></i> 0821-4435-6926.</a>
                </div>
            </div>

            {{-- Menampilkan error validasi --}}
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <ul class="list-group list-group-flush">
                <li class="list-group-item text-primary poppins-medium">Formulir Data Diri</li>
            </ul>

            <div class="card-body">

                <form action="{{ route('daftar.store') }}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Lengkap <span class="text-danger"> * </span></label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                    </div>

                    <div class="mb-3">
                        <label for="email" class="form-label">Email <span class="text-danger"> * </span></label>
                        <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                        <small class="text-muted fst-italic">Pastikan email yang Anda masukkan aktif.</small>
                    </div>

                    <div class="mb-3">
                        <label for="phone" class="form-label">No. WhatsApp <span class="text-danger"> * </span></label>
                        <input type="text" class="form-control" id="phone" name="phone" value="{{ old('phone') }}" required>
                        <small class="text-muted fst-italic">Pastikan nomor whatsapp yang Anda masukkan aktif.</small>
                    </div>

                    <div class="mb-3">
                        <label for="gender" class="form-label">Jenis Kelamin <span class="text-danger"> * </span></label>
                        <select class="form-select" id="gender" name="gender" required>
                            <option value="">Pilih Jenis Kelamin</option>
                            <option value="Laki-laki" {{ old('gender') == 'Laki-laki' ? 'selected' : '' }}>Laki-laki</option>
                            <option value="Perempuan" {{ old('gender') == 'Perempuan' ? 'selected' : '' }}>Perempuan</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label for="address" class="form-label">Alamat Lengkap <span class="text-danger"> * </span></label>
                        <textarea class="form-control" id="address" name="address" rows="3" placeholder="Jl. Mawar Indah, RT002, RW004, Dusun Grabakan, Desa Sekar, Kecamatan Karanganyar, Kabupaten Banyumas" required>{{ old('address') }}</textarea>
                    </div>

            </div>

            <ul class="list-group list-group-flush">
                <li class="list-group-item text-primary poppins-medium">Formulir Pendaftaran</li>
            </ul>

            <div class="card-body">
                <div class="mb-3">
                    <label for="training_id" class="form-label">Pilih Kursus <span class="text-danger"> * </span></label>
                    <select class="form-select" id="training_id" name="training_id" required>
                        <option value="">Pilih Kursus</option>
                        @foreach ($training as $t)
                        <option value="{{ $t->id }}" data-jadwal="{{ $t->tanggal_mulai->translatedFormat('d F Y') }} s/d {{ $t->tanggal_selesai->translatedFormat('d F Y') }}" data-harga="{{number_format($t->kursus->harga_kursus, 0, ',', '.') }}" {{ $training_id == $t->id ? 'selected' : '' }}>{{ $t->kursus->kelas->nama_kelas }} - {{ $t->kursus->nama_kursus }}</option>

                        @endforeach
                    </select>
                </div>

                <div class="card-body bg-warning bg-opacity-10 my-2" style="border-radius: 10px; font-size: 13px; border: 1px solid #ffc107;">
                    <div class="d-flex align-items-between gap-2">
                        <!-- ICON POJOK -->
                        <i class="bi bi-exclamation-triangle-fill text-warning"></i>
                        Jika daftar pilihan kursus belum tersedia, silahkan hubungi admin melalui whatsapp
                        <!-- END ICON POJOK -->
                        <a href="https://wa.me/6282144356926" target="_blank" class="text-decoration-none text-success"><i class="bi bi-whatsapp text-success"></i> 0821-4435-6926.</a>
                    </div>
                </div>

                <div class="mb-3">
                    <label for="event_id" class="form-label">Pilih Event <span class="text-danger"> * </span></label>
                    <select class="form-select" id="event_id" name="event_id" required>
                        <option value="">Pilih Event</option>
                        @foreach ($events as $event)
                        <option value="{{ $event->id }}" data-tanggal="{{ $event->tanggal_event->translatedFormat('d F Y') }}" {{ $event_id == $event->id ? 'selected' : '' }}>{{ $event->title }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="button" class="btn btn-gradient text-white px-5" id="btnPreview"><i class="bi bi-floppy-fill text-white"></i> Daftar</button>

                </form>
            </div>

        </div>

        {{-- Modal Konfirmasi --}}
        <div class="modal fade" id="modalPreview" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content p-2">

                    <div class="modal-header">
                        <h6 class="modal-title poppins-semibold">Konfirmasi Data</h6>
                    </div>

                    <div class="modal-body" style="font-size: 14px">
                        <div class="card mb-3">
                            <div class="card-body bg-primary bg-opacity-10" style="border-radius: 5px; border: 1px solid #3399CC; font-size: 12px;">
                                <i class="bi bi-info-square-fill text-primary"></i>
                                Setelah mendaftar tunggu konfirmasi melalui whatsapp. Admin akan menghubungi Anda untuk melakukan pembayaran dan langkah selanjutnya. Pastikan nomor whatsapp yang Anda masukkan aktif dan dapat dihubungi.
                            </div>  
                        </div>
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <td colspan="2" class="text-center">
                                        <i class="bi bi-person-circle text-primary"></i>
                                        Data Diri.
                                    </td>
                                </tr>
                                <tr>
                                    <td>Nama</td>
                                    <td id="preview_name"></td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td id="preview_email"></td>
                                </tr>
                                <tr>
                                    <td>No WA</td>
                                    <td id="preview_phone"></td>
                                </tr>
                                <tr>
                                    <td>Alamat</td>
                                    <td id="preview_address"></td>
                                </tr>
                                <tr>
                                    <td colspan="2" class="text-center">
                                        <i class="bi bi-journal-text text-primary"></i>
                                        Data Pendaftaran.
                                    </td>
                                </tr>
                                <tr>
                                    <td>Kursus</td>
                                    <td id="preview_training"></td>
                                </tr>
                                <tr>
                                    <td>Jadwal</td>
                                    <td id="preview_schedule"></td>
                                </tr>
                                <tr>
                                    <td>Harga</td>
                                    <td id="preview_price_training"></td>
                                </tr>
                                <tr>
                                    <td>Event</td>
                                    <td id="preview_event"></td>
                                </tr>
                                <tr>
                                    <td>Tanggal</td>
                                    <td id="preview_date"></td>
                                </tr>
                                {{-- <tr>
                                    <td>Harga</td>
                                    <td id="preview_price_event"></td>
                                </tr> --}}
                                <tr>
                                    <td>Total</td>
                                    <td id="preview_total"></td>
                                </tr>
                            </tbody>
                        </table>

                        <div class="card">
                            <div class="card-body bg-primary bg-opacity-10" style="border: 1px solid #3399CC; font-size: 10px">
                                <i class="bi bi-exclamation-square-fill text-warning"></i>   Pastikan data yang Anda masukkan sudah benar sebelum melanjutkan. Klik tombol "OK" untuk menyelesaikan pendaftaran.
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

    </div>


</section>


@endsection
@push('scripts')
<script>
    let modal = new bootstrap.Modal(document.getElementById('modalPreview'))

    document.getElementById('btnPreview').addEventListener('click', function() {

        let training = document.getElementById('training_id')
        let event = document.getElementById('event_id')

        let selectedTraining = training.options[training.selectedIndex]
        let selectedEvent = event.options[event.selectedIndex]

        if (training.value == "" && event.value == "") {
            alert("Pilih Kursus atau Event salah satu!");
            return;
        }

        document.getElementById('preview_name').innerHTML =
            document.getElementById('name').value ? document.getElementById('name').value : '-'

        document.getElementById('preview_email').innerHTML =
            document.getElementById('email').value ? document.getElementById('email').value : '-'

        document.getElementById('preview_phone').innerHTML =
            document.getElementById('phone').value ? document.getElementById('phone').value : '-'

        document.getElementById('preview_address').innerHTML =
            document.getElementById('address').value ? document.getElementById('address').value : '-'


        // TRAINING
        if (training.value != "") {
            document.getElementById('preview_training').innerHTML =
                selectedTraining.text

            document.getElementById('preview_schedule').innerHTML =
                selectedTraining.dataset.jadwal

            document.getElementById('preview_price_training').innerHTML =
                'Rp ' + selectedTraining.dataset.harga

            document.getElementById('preview_total').innerHTML =
                'Rp ' + selectedTraining.dataset.harga
        } else {
            document.getElementById('preview_training').innerHTML = '-'
            document.getElementById('preview_schedule').innerHTML = '-'
            document.getElementById('preview_price_training').innerHTML = '-'
        }


        // EVENT
        if (event.value != "") {
            document.getElementById('preview_event').innerHTML =
                selectedEvent.text

            document.getElementById('preview_date').innerHTML =
                selectedEvent.dataset.tanggal

            // document.getElementById('preview_price_event').innerHTML =
            //     'Rp ' + selectedEvent.dataset.harga

            // document.getElementById('preview_total').innerHTML =
            //     'Rp ' + selectedEvent.dataset.harga
        } else {
            document.getElementById('preview_event').innerHTML = '-'
            document.getElementById('preview_date').innerHTML = '-'
            // document.getElementById('preview_price_event').innerHTML = '-'
        }

        modal.show()
    })

    document.getElementById('btnSubmitReal').addEventListener('click', function() {
        document.querySelector('form').submit()
    })

</script>

@endpush
