<?php

namespace App\Filament\Resources\Daftars\Pages;

use App\Filament\Resources\Daftars\DaftarResource;
use App\Models\Daftar;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Str;

class CreateDaftar extends CreateRecord
{
    protected static string $resource = DaftarResource::class;
    protected static ?string $title = 'Tambah Data Pendaftaran';
    protected static ?string $breadcrumb = 'Tambah Data';

    public function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    /**
     * Susun kolom 'address' dan generate 'no_daftar' sebelum disimpan.
     */
    protected function mutateFormDataBeforeCreate(array $data): array
    {
        // sanitize structured wilayah inputs
        $data['alamat_detail'] = isset($data['alamat_detail']) ? strip_tags($data['alamat_detail']) : null;
        $data['desa'] = isset($data['desa']) ? strip_tags($data['desa']) : null;
        $data['kecamatan'] = isset($data['kecamatan']) ? strip_tags($data['kecamatan']) : null;
        $data['kabkota'] = isset($data['kabkota']) ? strip_tags($data['kabkota']) : null;
        $data['provinsi'] = isset($data['provinsi']) ? strip_tags($data['provinsi']) : null;
        $data['kodepos'] = isset($data['kodepos']) ? preg_replace('/[^0-9]/', '', $data['kodepos']) : null;

        $data['address'] = implode(', ', array_filter([
            $data['alamat_detail'] ?? null,
            $data['desa']          ?? null,
            $data['kecamatan']     ?? null,
            $data['kabkota']       ?? null,
            $data['provinsi']      ?? null,
            $data['kodepos']       ?? null,
        ]));

        // Generate no_daftar jika belum ada
        if (empty($data['no_daftar'])) {
            $refId = $data['training_id'] ?? $data['event_id'] ?? '0';
            do {
                $noDaftar = date('y') . strtoupper(Str::random(2)) . $refId;
            } while (Daftar::where('no_daftar', $noDaftar)->exists());
            $data['no_daftar'] = $noDaftar;
        }

        return $data;
    }
}
