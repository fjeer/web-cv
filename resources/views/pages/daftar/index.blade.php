@extends('layouts.app')

@section('title', 'Daftar')

@section('content')

<div class="container-fluid px-4">
    {{-- ========================= SECTION FORM DAFTAR ========================= --}}
    <section class="py-5">
        <div class="row justify-content-center">
            <div class="col-md-6">

                <div class="card shadow-sm p-4 custom-card">

                    <h3 class="text-center fw-bold mb-4">Form Daftar</h3>

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
                    <form action="" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Konfirmasi Password</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                        </div>

                        <button type="submit" class="btn button-biru w-100">Daftar Sekarang →</button>
                    </form>


                </div>

            </div>
        </div>
    </section>

</div>

@endsection
