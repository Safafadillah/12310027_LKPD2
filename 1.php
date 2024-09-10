<?php

//hbd adalah variable, isi dari variable itu adalah selamat ulang tahun
$hbd = "Selamat Ulang Tahun yang ke-17-??";


//preg untuk menampung simbol atau lainnya
//$hbd adalah input, // simbol disimpan di $simK, adalah match
preg_match_all('/[^ a-z A-Z 0-9]/', $hbd, $simK); 

// if !empty (jika ! di hilangkan maka berbalik)ini buat meriksa apakah $simk berisi elemen atau tidak, artinya ada simbol yang ditemukan 
if ($simK[0]) { 

    //Menyimpan elemen-elemen simbol yang ditemukan ke dalam variabel $simbolArray.
    $simbolArray = $simK[0];  

    //output
    echo "Teks: $hbd"; 
    echo "<br>"; 
    echo "Simbol yang ditemukan: ";

    //sistem looping $simbolArray // Setiap simbol akan dicetak satu per satu.
    foreach ($simbolArray as $simbol) { 
        echo "$simbol";
    }

    // tidak
} else { 
    echo "Teks: $hbd";
    echo "<br>";
    echo "Tidak terdapat simbol pada kalimat";
}

?>
