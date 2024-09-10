<?php

//array ini berfungsi untuk menyimpan 10 soal jawaban benar
$jawabanBenar = ['a', 'b', 'c', 'a', 'c', 'b', 'a', 'a', 'a', 'a'];

//array ini berfungsi untuk menyimpan 10 soal jawaban siswa
$jawabanSiswa = ['d', 'b', 'c', 'a', 'b', 'b', 'a', 'a', 'a', 'a'];

//$namasiswa ini menyimpan nama siswa yang akan ditampilkan dalam hasil akhir, yaitu safa
$namaSiswa = 'Safa';

// kedua ini adalah menghitung jumlah benar dan jumlah salah dimulai dari awal yaitu 0
$jumlahBenar = 0; 
$jumlahSalah = 0; 

//$i = 0 itu dimulai dari 0 
//Loop ini bakal berjalan selama nilai $i lebih kecil dari jumlah elemen di $jawabanBenar 
//$i++ ini akan bertambah satu persatu
for ($i = 0; $i < count($jawabanBenar); $i++) {

    //$jawabanSiswa[$i] dibandingkan dengan nilai $jawabanBenar[$i].
    if ($jawabanSiswa[$i] == $jawabanBenar[$i]) {

        //Jika jawaban benar, maka nilai $jumlahBenar akan ditambah 1.
        $jumlahBenar++;

    } else {

        //jika jawaban salah, maka nilai $jumlahSalah akan ditambah 1
        $jumlahSalah++;
    }
}


echo "Nama: {$namaSiswa} <br> Jumlah Benar: {$jumlahBenar} <br> Jumlah Salah: {$jumlahSalah}";
?>
