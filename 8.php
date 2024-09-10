<?php

//Variabel ini adalah array yang berisi daftar jurusan
$dataJurusan = ["PPLG", "HTL", "KLN", "PMN", "pplg", "htl"];

//array_unique digunakan untuk menghapus elemen-elemen yang duplikat dalam array.
//array map digunakan untuk menerapkan fungsi strtoupper ke setiap elemen dalam array $dataJurusan
//strtoupper mengubah setiap string menjadi huruf kapital
$uniqueJurusan = array_unique(array_map('strtoupper', $dataJurusan));

//digunakan akan memberikan output yang menunjukkan struktur dan nilai dari variabel
print_r($uniqueJurusan);
?>