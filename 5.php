<?php

// dua array $bil1 dan $bil2 didefinisikan, masing-masing berisi serangkaian angka.
$bil1 = [80, 77, 65, 89, 55, 12, 90, 86]; //var int
$bil2 = [77, 99, 55, 81, 45, 90, 91, 98];

//disini fungsinya adalah menggabungkan dua array menjadi satu dan hasilnya adalah $bil1 diikuti $bil2
$gabung = array_merge($bil1, $bil2);

//menghapus angka yang serupa
$urutan = array_unique($gabung);

//mengurutkan angka dari yang terbesar-terkecil
sort($urutan);

//implode mengubah array menjadi kalimat
echo "Hasil : " . implode(", ", $urutan);
?>