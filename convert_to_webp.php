<?php
/**
 * Script konversi gambar static ke WebP
 * Jalankan: php convert_to_webp.php
 */

$dir     = __DIR__ . '/public/images';
$quality = 85; // kualitas WebP 0-100
$exts    = ['jpg', 'jpeg', 'png', 'gif'];

$files = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
$converted = 0;
$skipped   = 0;
$errors    = [];

foreach ($files as $file) {
    if (!$file->isFile()) continue;

    $ext = strtolower($file->getExtension());
    if (!in_array($ext, $exts)) continue;

    $src  = $file->getRealPath();
    $dest = preg_replace('/\.(jpg|jpeg|png|gif)$/i', '.webp', $src);

    // Jika sudah ada .webp dan lebih baru, skip
    if (file_exists($dest) && filemtime($dest) >= filemtime($src)) {
        echo "[SKIP] " . $file->getFilename() . " (webp sudah ada)\n";
        $skipped++;
        continue;
    }

    try {
        switch ($ext) {
            case 'jpg':
            case 'jpeg':
                $img = imagecreatefromjpeg($src);
                break;
            case 'png':
                $img = imagecreatefrompng($src);
                // Pertahankan transparansi
                imagepalettetotruecolor($img);
                imagealphablending($img, true);
                imagesavealpha($img, true);
                break;
            case 'gif':
                $img = imagecreatefromgif($src);
                break;
            default:
                continue 2;
        }

        if (!$img) {
            $errors[] = "Gagal load: $src";
            continue;
        }

        $ok = imagewebp($img, $dest, $quality);
        imagedestroy($img);

        if ($ok) {
            $origSize = filesize($src);
            $newSize  = filesize($dest);
            $saved    = round((1 - $newSize / $origSize) * 100, 1);
            echo "[OK]   " . $file->getFilename() . " → " . basename($dest)
                . "  ({$origSize}b → {$newSize}b, hemat {$saved}%)\n";
            $converted++;
        } else {
            $errors[] = "Gagal tulis WebP: $dest";
        }
    } catch (Throwable $e) {
        $errors[] = $e->getMessage();
    }
}

echo "\n===========================\n";
echo "Selesai: {$converted} dikonversi, {$skipped} diskip.\n";
if ($errors) {
    echo "Error:\n";
    foreach ($errors as $err) echo "  - $err\n";
}
