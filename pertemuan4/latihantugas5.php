<?php
// Variabel sisi kubus
$sisi = 15;

// Menghitung volume kubus dengan operator aritmatika
$volume = $sisi * $sisi * $sisi;

// Variabel teks
$teks1 = "Belajar Menghitung ";
$teks2 = "Volume Kubus";

// Menggabungkan teks menggunakan operator string (.)
$gabung = $teks1 . $teks2;

// Menampilkan hasil
echo $gabung . "<br>";
echo "Sisi kubus = " . $sisi . " cm<br>";
echo "Volume kubus = " . $volume . " cm³";
