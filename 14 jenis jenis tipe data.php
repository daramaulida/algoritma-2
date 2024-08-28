<?php

// Char adalah tipe data yang terdiri dari karakter. Penulisannya diapit dengan tanda petik satu.
$huruf = 'P';
echo "huruf $huruf<br><br>";

// String adalah tipe data yang terdiri dari kumpulan karakter. Penulisannya diapit dengan tanda petik ganda.
$alamat = "Tenggulun";
echo "Alamat Saya Di $alamat<br><br>";

// Tipe Data Integer di PHP
// Contoh:
$nilai = 98; // angka positif
$poin = -31; // angka negatif
echo "Nilai $nilai<br>";
echo "Poin $poin<br><br>";

// Tipe Data Float di PHP
// Float adalah tipe data bilangan pecahan. Sama seperti integer, tipe data ini ditulis tanpa tanda petik.
// Contoh:
$panjang = 333.20;
$kapasitas = 15323.34;
echo "Panjang $panjang<br>";
echo "kapasitas $kapasitas<br><br>";

// Kada juga tipe data float ditulis dalam notasi seperti ini:
$jarak = 1.2E-5;
echo "Jarak $jarak<br><br>";

// E-5 artinya eksponen dari 10.
// Contoh di atas akan sama dengan 1.2 x 10-5. Kalau kita jabarkan akan menjadi 0.000012.
// Agar format float tidak tercetak dalam notasi E, kita bisa gunakan fungsi sprintf().
// Contoh:
$a= 10;
echo sprintf('%f', $a);
echo "<p>";
// batasi angka di belakang koma
echo sprintf('%.3f', $a);
echo "<p>";


// Tipe data boolean adalah tipe data yang hanya bernilai true dan false.

$isActive = false;
$menikah = true;
echo "isAchtive $isActive<br>";
echo "Menikah $menikah<br>";

// Array adalah tipe data yang berisi sekumpulan data.
$minuman = array("Poci", "Teh", "Jus Alpukat");
array("Poci");
array("Teh");
array("Jus Alpukat");
echo $minuman ="<p>Poci";
echo $minuman ="<p>Teh";
echo $minuman ="<p>Jus Alpukat";

// Tipe data NULL adalah tipe data yang menyatakan kosong.
$nama = NULL;
echo "Nama $nama<br>";