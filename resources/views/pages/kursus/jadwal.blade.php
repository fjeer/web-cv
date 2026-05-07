@extends('layouts.app')

@section('title', 'Jadwal Kursus')

@section('content')
<section class="py-5 mt-5" style="background-color: var(--color-bg);">
    <div class="container" data-aos="fade-up">
        <div class="mb-5 text-center">
            <h6 class="section-title">Program Pelatihan</h6>
            <h2 class="poppins-bold text-dark display-6">Jadwal Kursus Terbaru</h2>
            <p class="text-muted">Pilih jadwal yang sesuai dengan waktu Anda dan mulailah belajar bersama kami.</p>
        </div>

        <div class="card-premium p-4 p-md-5 border-0 shadow-sm mb-5">
            <div class="card-body bg-primary-light rounded-4 p-4 border border-primary border-opacity-25">
                <div class="d-flex align-items-start gap-4">
                    <div class="bg-primary text-white p-3 rounded-circle d-flex align-items-center justify-content-center shadow-sm">
                        <i class="ph-fill ph-info fs-3"></i>
                    </div>
                    <div>
                        <h5 class="poppins-semibold text-dark mb-2">Informasi Penting</h5>
                        <ul class="mb-0 text-muted poppins-medium small" style="line-height: 1.8;">
                            <li>Jika <strong>tidak menemukan jadwal</strong> kursus yang diinginkan, hubungi admin via <a href="https://wa.me/6282144356926" target="_blank" class="text-primary text-decoration-none fw-bold">WhatsApp (0821-4435-6926)</a>.</li>
                            <li>Pendaftaran kursus <strong>ditutup pada hari H</strong>. Disarankan mendaftar lebih awal.</li>
                            <li>Pastikan sudah <strong>melakukan pembayaran</strong> dan simpan bukti pembayarannya.</li>
                            <li>Tunggu konfirmasi dari admin dalam waktu 24 jam setelah mendaftar.</li>
                            <li>Kami melayani <strong>private / inhouse</strong> training dengan jadwal fleksibel.</li>
                        </ul>
                    </div>
                </div>
            </div>

            {{-- Filter Section --}}
            <div class="d-flex flex-wrap justify-content-between align-items-center mb-5 gap-3">
                <div class="d-flex align-items-center gap-2">
                    <div class="bg-primary-light p-2 rounded-circle text-primary">
                        <i class="ph-bold ph-calendar-check fs-4"></i>
                    </div>
                    <h5 class="poppins-semibold mb-0 text-dark">Daftar Jadwal</h5>
                </div>

                <div id="filterForm" class="d-flex flex-wrap gap-3">
                    <div class="search-wrapper w-100 w-md-auto">
                        <div class="input-group shadow-sm" style="border-radius: var(--radius-full);">
                            <span class="input-group-text bg-white border-end-0 ps-3" style="border-radius: var(--radius-full) 0 0 var(--radius-full)">
                                <i class="ph-bold ph-magnifying-glass text-muted"></i>
                            </span>
                            <input type="text" id="searchInput" class="form-control border-start-0 ps-0" placeholder="Cari kursus..." value="{{ request('search') }}" style="border-radius: 0 var(--radius-full) var(--radius-full) 0; box-shadow: none;">
                        </div>
                    </div>

                    <div class="custom-select-wrapper">
                        <select id="statusFilter" class="form-select shadow-sm ps-3" style="border-radius: var(--radius-full);">
                            <option value="">Semua Status</option>
                            <option value="1" {{ request('status') == '1' ? 'selected' : '' }}>Tersedia</option>
                            <option value="0" {{ request('status') == '0' ? 'selected' : '' }}>Ditutup</option>
                        </select>
                    </div>

                    <div class="custom-select-wrapper">
                        <select id="kelasFilter" class="form-select shadow-sm ps-3" style="border-radius: var(--radius-full);">
                            <option value="">Semua Kelas</option>
                            @foreach ($kelas as $k)
                            <option value="{{ $k->id }}" {{ request('kelas') == $k->id ? 'selected' : ''}}>{{ $k->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>

                    <button id="resetFilter" class="btn btn-outline-premium shadow-sm px-4">
                        <i class="ph-bold ph-arrows-clockwise me-1"></i> Reset
                    </button>
                </div>
            </div>

            {{-- Table Container --}}
            <div class="p-0 overflow-hidden rounded-4 border">
                <div id="loadingSpinner" class="text-center py-5 d-none">
                    <div class="spinner-border text-primary" role="status">
                        <span class="visually-hidden">Loading...</span>
                    </div>
                    <p class="mt-2 text-muted">Memuat data...</p>
                </div>

                <div id="tableContainer">
                    @include('pages.kursus.partials.table')
                </div>
            </div>

            {{-- Pagination --}}
            <div id="paginationContainer" class="mt-4 d-flex justify-content-center">
                {{ $training->links() }}
            </div>
        </div>
    </div>
</section>

<style>
    .custom-select-wrapper {
        position: relative;
        min-width: 160px;
    }

    .form-select:focus, .form-control:focus {
        border-color: var(--color-primary);
        box-shadow: 0 0 0 0.25rem rgba(50, 153, 205, 0.25);
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
