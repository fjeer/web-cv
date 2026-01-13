@extends('layouts.app')

@section('title', 'news-detail')

@section('content')
<div class="container my-5">

    <!-- Back Button -->
    <a href="{{ route('berita.index') }}" class="btn mb-4">
        ← Kembali
    </a>

    <!-- Title -->
    <h1 class="fw-bold mb-3">
        {{ $berita->title }}
    </h1>

    <!-- Meta Info -->
    <div class="d-flex justify-content-between align-items-center text-muted mb-4">
        <span>{{ $berita->user->name }}</span>
        <span>
            <i class="bi bi-calendar-event"></i> {{ $berita->tanggal_berita->format('d F Y') }}
        </span>
    </div>

    <!-- Thumbnail -->
    <img
        src="{{ asset('images/image1.png') }}"
        alt="Cloudflare Gangguan"
        class="img-fluid rounded-4 mb-5"
    >

    <!-- Content -->
    <article class="content">        
        {!! $berita->detail_berita !!}
    </article>

</div>
@endsection
