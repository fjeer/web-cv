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
                        <h5 class="poppins-semibold mb-0">Jadwal Kursus</h5>
                    </div>

                    <div id="filterForm" class="d-flex gap-3">
                        <input type="text" id="searchInput" class="form-control rounded-pill" style="max-width: 220px" placeholder="Cari kursus..." value="{{ request('search') }}">

                        <div class="custom-select-wrapper">
                            <select id="statusFilter" class="custom-select rounded-pill">
                                <option value="">Semua Status</option>
                                <option value="1" {{ request('status') == '1' ? 'selected' : '' }}>Tersedia</option>
                                <option value="0" {{ request('status') == '0' ? 'selected' : '' }}>Ditutup</option>
                            </select>
                            <i class="bi bi-chevron-down select-icon"></i>
                        </div>

                        <div class="custom-select-wrapper">
                            <select id="kelasFilter" class="custom-select rounded-pill">
                                <option value="">Semua kelas</option>
                                @foreach ($kelas as $k )
                                <option value="{{ $k->id }}" {{ request('kelas') == $k->id ? 'selected' : ''}}>{{ $k->nama_kelas }}</option>
                                @endforeach
                            </select>
                            <i class="bi bi-chevron-down select-icon"></i>
                        </div>

                        <button id="resetFilter" class="btn btn-warning" style="border-radius: 15px">
                            <i class="bi bi-arrow-clockwise"></i>
                        </button>

                    </div>
                </div>

                {{-- ================= TABLE / EMPTY STATE ================= --}}
                <div class="card bg-primary bg-opacity-10 p-3">
                    {{-- Loading Spinner --}}
                    <div id="loadingSpinner" class="text-center py-5 d-none">
                        <div class="spinner-border text-primary" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>
                        <p class="mt-2">Memuat data...</p>
                    </div>

                    {{-- Table Container --}}
                    <div id="tableContainer">
                        @include('pages.kursus.partials.table')
                    </div>
                </div>

                {{-- ================= PAGINATION ================= --}}
                <div id="paginationContainer" class="mt-3">
                    {{ $training->links() }}
                </div>
            </div>
        </div>
    </div>
</section>

<style>
    .custom-select-wrapper {
        position: relative;
        width: 180px;
    }

    .custom-select {
        width: 100%;
        padding: 8px 35px 8px 15px;
        border: 1px solid #ced4da;
        border-radius: 4px;
        background-color: white;
        appearance: none;
        cursor: pointer;
    }

    .select-icon {
        position: absolute;
        right: 12px;
        top: 50%;
        transform: translateY(-50%);
        pointer-events: none;
        color: #6c757d;
    }

    .button-biru {
        background-color: #0d6efd;
        color: white;
        border: none;
        padding: 8px 20px;
        border-radius: 4px;
    }

    .button-biru:hover {
        background-color: #0b5ed7;
        color: white;
    }

</style>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        let filterTimeout;

        // Fungsi untuk memuat data dengan AJAX
        function loadData(page = 1) {
            const search = $('#searchInput').val();
            const status = $('#statusFilter').val();
            const kelas = $('#kelasFilter').val();

            // Tampilkan loading spinner
            $('#loadingSpinner').removeClass('d-none');
            $('#tableContainer').addClass('opacity-50');

            $.ajax({
                url: '{{ route('training.index') }}'
                , type: 'GET'
                , data: {
                    search: search
                    , status: status
                    , kelas: kelas
                    , page: page
                }
                , success: function(response) {
                    // Update table
                    $('#tableContainer').html(response.html);
                    $('#tableContainer').removeClass('opacity-50');

                    // Update pagination
                    $('#paginationContainer').html(response.pagination);

                    // Sembunyikan loading spinner
                    $('#loadingSpinner').addClass('d-none');
                }
                , error: function(xhr) {
                    console.log(xhr);
                    $('#loadingSpinner').addClass('d-none');
                    $('#tableContainer').removeClass('opacity-50');
                    alert('Terjadi kesalahan saat memuat data');
                }
            });
        }

        // Event untuk input search (dengan debounce)
        $('#searchInput').on('keyup', function() {
            clearTimeout(filterTimeout);
            filterTimeout = setTimeout(function() {
                loadData();
            }, 500);
        });

        // Event untuk select filter
        $('#statusFilter, #kelasFilter').on('change', function() {
            loadData();
        });

        // Reset filter
        $('#resetFilter').on('click', function() {
        $('#searchInput').val('');
        $('#statusFilter').val('');
        $('#kelasFilter').val('');
        loadData();
        });


        // Event delegation untuk pagination
        $(document).on('click', '.pagination a', function(e) {
            e.preventDefault();
            const page = $(this).attr('href').split('page=')[1];
            loadData(page);
        });

        // Event untuk enter pada input search
        $('#searchInput').on('keypress', function(e) {
            if (e.which === 13) {
                loadData();
            }
        });
    });

</script>
@endsection
