@extends('layouts.app')

@section('title', 'news-detail')

@section('content')

<div class="container my-5 site-main" data-aos="fade-up">

    <!-- Back Button -->
    <div class="mb-4 d-flex align-items-center">
        <a href="{{ route('berita.index') }}" class="text-primary text-decoration-none bg-primary-light p-2 rounded-circle hover-scale d-inline-flex align-items-center justify-content-center me-3" style="width: 40px; height: 40px;">
            <i class="ph-bold ph-arrow-left"></i>
        </a>
        <span class="poppins-medium text-muted">Kembali ke Daftar Berita</span>
    </div>

    <!-- Title -->
    <h1 class="poppins-bold mb-4 display-5 text-dark" style="line-height: 1.3;">
        {{ $berita->title }}
    </h1>

    <!-- Meta Info -->
    <div class="d-flex align-items-center text-muted mb-4 gap-4 pb-3 border-bottom">
        <span class="poppins-medium d-flex align-items-center">
            <i class="ph-fill ph-user-circle text-primary fs-4 me-2"></i> {{ $berita->user->name }}
        </span>
        <span class="poppins-medium d-flex align-items-center">
            <i class="ph-fill ph-calendar-blank text-primary fs-4 me-2"></i> {{ $berita->tanggal_berita->translatedFormat('d F Y') }}
        </span>
    </div>

    <!-- Thumbnail -->
    <div class="position-relative mb-5 shadow-lg rounded-4 overflow-hidden">
        <img
            src="{{ asset('storage/' . $berita->gambar_berita) }}"
            alt="{{ $berita->title }}"
            class="img-fluid w-100"
            style="max-height: 500px; object-fit: cover;"
        >
    </div>

    <!-- Content -->
    <article class="content text-dark fs-5" style="line-height: 1.8;">
        {!! $berita->detail_berita !!}
    </article>

</div>
@endsection
