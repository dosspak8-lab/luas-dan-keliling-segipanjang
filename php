<?php
// Menggunakan fgets(STDIN) untuk membaca input dari pengguna
echo "=== MENU PERSEGI PANJANG ===\n";
echo "1. Hitung Luas\n2. Hitung Keliling\n";
echo "Pilih (1/2): ";
$pilihan = trim(fgets(STDIN));

echo "Masukkan Panjang: ";
$p = (float)trim(fgets(STDIN));

echo "Masukkan Lebar: ";
$l = (float)trim(fgets(STDIN));

// Struktur Pemilihan (Selection)
if ($pilihan == "1") {
    $luas = $p * $l;
    echo "Hasil Luas: " . $luas . "\n";
} elseif ($pilihan == "2") {
    $keliling = 2 * ($p + $l);
    echo "Hasil Keliling: " . $keliling . "\n";
} else {
    echo "Pilihan tidak valid!\n";
}
?>
