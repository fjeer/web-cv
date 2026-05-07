<?php

namespace App\Support;

use Intervention\Image\ImageManager;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

/**
 * Helper untuk konversi file upload ke WebP menggunakan GD native PHP.
 * Tidak memerlukan library tambahan.
 */
class WebpUploadHelper
{
    /**
     * Simpan file upload sebagai WebP ke storage.
     *
     * @param  TemporaryUploadedFile  $file
     * @param  string  $directory  contoh: 'kursus-images'
     * @param  int     $quality    0–100
     * @return string  path relatif dari root disk
     */
    public static function saveAsWebp(
        TemporaryUploadedFile $file,
        string $directory,
        int $quality = 85
    ): string {
        $tmpPath = $file->getRealPath();
        $ext     = strtolower($file->getClientOriginalExtension());

        // Buat GD resource dari sumber
        $img = match ($ext) {
            'jpg', 'jpeg' => imagecreatefromjpeg($tmpPath),
            'png'         => self::loadPng($tmpPath),
            'gif'         => imagecreatefromgif($tmpPath),
            'webp'        => imagecreatefromwebp($tmpPath),
            default       => imagecreatefromstring(file_get_contents($tmpPath)),
        };

        if (!$img) {
            // Fallback: simpan file aslinya
            $filename = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME)
                . '.' . $ext;
            $path = $directory . '/' . uniqid() . '_' . $filename;
            $file->storeAs('', $path, 'public');
            return $path;
        }

        // Nama file output .webp
        $baseName = pathinfo($file->getClientOriginalName(), PATHINFO_FILENAME);
        $filename = $directory . '/' . uniqid() . '_' . $baseName . '.webp';
        $fullPath = storage_path('app/public/' . $filename);

        // Pastikan direktori ada
        @mkdir(dirname($fullPath), 0775, true);

        imagewebp($img, $fullPath, $quality);
        imagedestroy($img);

        return $filename;
    }

    private static function loadPng(string $path): \GdImage|false
    {
        $img = imagecreatefrompng($path);
        if ($img) {
            imagepalettetotruecolor($img);
            imagealphablending($img, true);
            imagesavealpha($img, true);
        }
        return $img;
    }
}
