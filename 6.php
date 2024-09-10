<?php
//array asosiatif yang berisi daftar barang
$barang = [
    [
        'nama' => 'Pasta Gigi',
        'harga' => 18000,
        'jumlahBeli' => 2,
    ],
    [
        'nama' => 'Sabun Mandi',
        'harga' => 5000,
        'jumlahBeli' => 5,
    ],
    [
        'nama' => 'Aloe Vera Sheet Mask',
        'harga' => 15000,
        'jumlahBeli' => 10,
    ],
];

//Variabel ini menyimpan total harga dari seluruh barang yang dibeli. Inisialisasi dengan 0.
$totalHar = 0;

echo "Daftar belanjaan :";

//membuat daftar terurut
echo "<ol>";

//loop ini untuk iterasi melalui setiap elemen dalam array $barang. Di setiap iterasi, variabel $item adalah array asosiatif yang mewakili satu item belanjaan.
foreach ($barang as $item) {

    //variabel ini menyimpan subtotal untuk item saat ini, yaitu harga barang dikalikan dengan jumlah beli.
    $subTot = $item['harga'] * $item['jumlahBeli'];

    //Menambahkan subtotal ke total harga keseluruhan.
    $totalHar += $subTot;

    //Fungsi ini digunakan untuk memformat subtotal dengan pemisah ribuan menggunakan titik (.) dan tanpa desimal.
    $formatSub = number_format($subTot, 0, ',', '.');

    //Mencetak setiap item dalam daftar HTML. Formatnya adalah nama barang, jumlah beli, dan subtotal yang telah diformat.
    echo "<li>{$item['nama']} ({$item['jumlahBeli']}) : {$formatSub}</li>";
}
echo "</ol>";

//Variabel ini menyimpan total harga yang telah diformat dengan cara yang sama seperti subtotal.
$formatTot = number_format($totalHar, 0, ',', '.');

//output
echo "Total harga yang harus Anda bayar adalah Rp. {$formatTot}";
?>