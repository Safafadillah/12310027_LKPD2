<?php

//Function ini menerima parameter $jumlahUang yang berisi jumlah uang yang ingin dicari pecahannya.
function cariJenisKoin($jumlahUang) {

    //array kosong yang nantinya akan digunakan untuk menyimpan jenis koin yang dipilih berdasarkan nilai $jumlahUang
    $jenisKoin = [];

    // buat meriksa apakah $jumlahUang lebih besar atau sama dengan nilai nominal koin
    if ($jumlahUang >= 1000) {
        $jenisKoin[] = '1.000';
        $jumlahUang -= 1000; 
    }
    if ($jumlahUang >= 500) {
        $jenisKoin[] = '500';
        $jumlahUang -= 500;
    }
    if ($jumlahUang >= 200) {
        $jenisKoin[] = '200';
        $jumlahUang -= 200;
    }
    if ($jumlahUang >= 100) {
        $jenisKoin[] = '100';
        $jumlahUang -= 100;
    }

    //mengembalikan sebagai hasil fungsi
    return $jenisKoin; 
}

$uang = 1750; 

//cariJenisKoin dipanggil dengan parameter $uang, dan hasilnya disimpan di $hasil
$hasil = cariJenisKoin($uang);

echo "Jenis koin yang bisa digunakan untuk Rp{$uang}:";

//foreach untuk me looping aray
foreach ($hasil as $koin) {
    echo "<ul>";
    echo "<li>Rp. {$koin} </li>";
    echo "</ul>";
}
?>  