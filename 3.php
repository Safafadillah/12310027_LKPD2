<?php
// adalah array index dengan satu elemen yaitu 90.
$angka1 = [90]; 

//adalah array dengan beberapa elemen: 1-18
$angka2 = [1, 2, 3, 5, 6, 9, 10, 15, 18,]; 

// loop1//$a2 adalah variabel yang akan menyimpan setiap nilai dari array $angka2 secara bergantian selama iterasi.
// Misalnya, pertama $a2 akan menjadi 1, lalu 2, dan seterusnya.
foreach ($angka2 as $a2) { 

    //loop2 //loop ini akan berjalan 1 kali karena $angka1 hanya memiliki satu elemen (90)
    foreach ($angka1 as $a1) { 

        //$hasil menyimpan hasil dari pembagian $a1 dengan $a2
        $hasil = $a1 / $a2;

        //outputnya akan 90 dibagi 1 dan seterusnya
        echo "$a1 : $a2 = $hasil";
       

    }
    echo "<br>";
}
?>