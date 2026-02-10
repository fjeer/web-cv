@extends('layouts.app')

@section('title', 'news-detail')

@section('content')

<div class="container my-5" data-aos="fade-up">

    <!-- Back Button -->
    <a href="{{ route('berita.index') }}" class="mb-4 text-secondary text-decoration-none d-inline-block">
        ← Kembali
    </a>

    <!-- Title -->
    <h1 class="poppins-semibold mb-3">
        {{ $berita->title }}
    </h1>

    <!-- Meta Info -->
    <div class="d-flex justify-content-between align-items-center text-muted mb-4">
        <span class="poppins-semibold">{{ $berita->user->name }}</span>
        <span class="poppins-semibold">
            <i class="bi bi-calendar-event"></i> {{ $berita->tanggal_berita->format('d F Y') }}
        </span>
    </div>

    <!-- Thumbnail -->
    <img
        src="{{ asset('storage/' . $berita->gambar_berita) }}"
        alt="Cloudflare Gangguan"
        class="img-fluid rounded-4 mb-5"
    >

    <!-- Content -->
    <article class="content">        
        {!! $berita->detail_berita !!}
    </article>

</div>
@endsection
