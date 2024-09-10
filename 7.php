<?php
// Fungsi untuk memotong kalimat menjadi 50 karakter dan menambahkan tiga titik di akhir
function potongKalimat($kalimat) {

    // strlen Menghitung jumlah karakter dalam kalimat
    $jumlahKarakter = strlen($kalimat);
    
    // Memotong kalimat menjadi 50 karakter dan menambahkan tiga titik di akhir
    // substr mengambil bagian tertentu (memotong) dari sebuah string.
    $kalimat = substr($kalimat, 0, 50) . "...";
    
    // Mengembalikan kalimat yang telah dipotong
    return $kalimat;
};  


$kalimatPanjang = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. Ullam sequi alias veritatis distinctio rerum ducimus? Veritatis, reprehenderit, magnam, numquam harum minus velit commodi in vitae recusandae earum odio voluptas deleniti!.";

// Menampilkan kalimat awal dan kalimat yang telah dipotong
// <b> bold
echo "<b> Kalimat awal : </b>" . potongKalimat($kalimatPanjang);
?>