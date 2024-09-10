<?php
// Mendapatkan hari ini dalam format nama hari (contoh: Monday, Tuesday, dll.)
$today = 'Tuesday';

// Menetapkan total pembelanjaan 
$total_pembelanjaan = 130000;

// Inisialisasi variabel diskon dengan nilai awal 0
$diskon = 0;

// Memeriksa apakah hari ini adalah hari Selasa
if ($today == 'Tuesday') {
    // Jika hari ini Selasa, berikan diskon 5% dari total pembelanjaan
    $diskon = 0.05 * $total_pembelanjaan;
} else if ($total_pembelanjaan > 100000) {
    // Jika total pembelanjaan lebih dari Rp. 100.000 dan hari ini bukan Selasa, berikan diskon 7%
    $diskon = 0.07 * $total_pembelanjaan;
}

// Menghitung total yang harus dibayar setelah diskon
$total_bayar = $total_pembelanjaan - $diskon;

// Menampilkan nama hari ini
echo "Hari ini hari : $today <br>";

// Menampilkan total pembelanjaan dalam format Rupiah dengan ribuan dipisahkan oleh titik
// number_format() digunakan untuk memformat angka menjadi string yang lebih mudah dibaca.
echo "Total pembelanjaan : Rp. " . number_format($total_pembelanjaan, 0, ',', '.') . "<br>";

// Menampilkan total yang harus dibayar setelah diskon dalam format Rupiah
echo "Total yang harus dibayar : Rp. " . number_format($total_bayar, 0, ',', '.') . "<br>";
?>