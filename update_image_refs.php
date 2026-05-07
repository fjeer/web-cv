<?php
/**
 * Script ganti ekstensi gambar ke .webp di semua file Blade & PHP
 * Jalankan: php update_image_refs.php
 */

$rootDir = __DIR__;
$scanDirs = [
    $rootDir . '/resources/views',
    $rootDir . '/resources/css',
    $rootDir . '/resources/js',
];
$fileExts    = ['php', 'blade.php', 'html', 'css', 'js'];
$imageExts   = ['png', 'jpg', 'jpeg', 'gif'];

// Pola yang akan diganti: hanya path yang mengandung /images/ (static)
// Bukan path storage/ (upload dinamis — ditangani Filament)
$pattern = '/\bimages\/([^\'"\s\)]+)\.(png|jpg|jpeg|gif)\b/i';

$totalFiles   = 0;
$totalReplaced = 0;

function scanFiles(string $dir, array $exts): array {
    $result = [];
    $it = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($dir));
    foreach ($it as $file) {
        if (!$file->isFile()) continue;
        $ext = strtolower($file->getExtension());
        if (in_array($ext, $exts) || str_contains($file->getFilename(), '.blade.')) {
            $result[] = $file->getRealPath();
        }
    }
    return $result;
}

foreach ($scanDirs as $dir) {
    if (!is_dir($dir)) continue;
    $files = scanFiles($dir, $fileExts);
    foreach ($files as $filepath) {
        $original = file_get_contents($filepath);
        $updated  = preg_replace_callback($pattern, function ($m) {
            return 'images/' . $m[1] . '.webp';
        }, $original);

        if ($updated !== $original) {
            file_put_contents($filepath, $updated);
            $count = preg_match_all($pattern, $original);
            echo "[UPDATED] " . str_replace($rootDir . DIRECTORY_SEPARATOR, '', $filepath) . " ({$count} penggantian)\n";
            $totalReplaced++;
        }
        $totalFiles++;
    }
}

echo "\n==========================\n";
echo "Total file dipindai : {$totalFiles}\n";
echo "Total file diupdate : {$totalReplaced}\n";
