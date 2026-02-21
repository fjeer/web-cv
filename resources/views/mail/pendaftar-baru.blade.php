{{-- <x-mail::message>
# Introduction

The body of your message.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message> --}}

@component('mail::message')

# 📩 Pendaftaran Baru Masuk

Sistem menerima **pendaftaran baru** dengan rincian berikut:

@component('mail::panel')
### Informasi Peserta
| Keterangan | Detail |
|:-----------|:-------|
| No. Daftar | {{ $data->no_daftar }} |
| Nama | {{ $data->name }} |
| Email | {{ $data->email }} |
| WhatsApp | {{ $data->phone }} |
@endcomponent

@component('mail::panel')
### Rincian Pendaftaran
| Keterangan | Detail |
|:-----------|:-------|
| Kategori | {{ $jenisDaftar }} |
| Item | {{ $detailDaftar }} |
| Jadwal | {{ $data->training?->tanggal_mulai?->translatedFormat('d F Y') . ' - ' . $data->training?->tanggal_selesai?->translatedFormat('d F Y') }} |
| Event | {{ $data->event?->tanggal_event?->translatedFormat('d F Y') ?? '-' }} |
| Total Harga | {{ 'Rp. ' . number_format($data->training?->kursus?->harga_kursus ?? 0) }} |
| Waktu | {{ now()->translatedFormat('d F Y, H:i') }} WIB |
@endcomponent

@component('mail::button', ['url' => url('/admin/daftar-data/'.$data->id.'/edit')])
Verifikasi di Dashboard
@endcomponent

Terima kasih,<br>
**Sistem {{ config('app.name') }}**.
<br>
<img src="{{ asset('images/email-footer.png') }}" alt="sigmatech logo" style="height: 50px">

@endcomponent
