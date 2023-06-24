<?php

// function perkenalan($nama){
//     echo "hallo nama saya $nama <br>";
// }

// perkenalan("gobles");
// perkenalan("wkwk");

// function tinggiBadan($tinggi = 170){
//     echo "Tinggi saya $tinggi <br>";
// }

// tinggiBadan(165);

// function penjumblahan(&$nilai){
//     return $nilai+=100;
// }

// $nilai = 30;
// penjumblahan($nilai);
// echo $nilai;

// quiz

function perhitunganLuasTanah($panjang, $lebar){
    return $panjang * $lebar;
}

$panjang = 220;
$lebar = 150;

if(perhitunganLuasTanah($panjang, $lebar) > 30000){
    echo "Bangunan Sangat Luass";
}

// jawaban = bangunan sangat luas

?>