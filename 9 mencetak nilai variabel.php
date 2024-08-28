<?php

// membuat variabel baru
$nama_barang = "Mukenah";
$harga = 120000;
$tempat = "Karang Baru";

// menampilkan isi variabel
echo "Dara membeli $nama_barang seharga Rp $harga di $tempat<br><br>";
 
//Jika kita menggunakan tanda petik ganda (") dalam echo, maka kita bisa menuliskan langsung nama variabelnya seperti ini:
$judul = "Belajar PHP dari nol sampai expert";
echo "Judul artikel: $judul<br><br>";
//Apabila kita menggunakan tanda petik tunggal ('), maka kita harus menggunakan titik untuk menggabungkan teks dengan variabelnya.
Contoh:
$judul = "Tutorial PHP untuk Pemula";
echo 'Judul artikel: '.$judul;

//Fungsi echo() adalah fungsi untuk menampilkan teks layar. Fungsi ini dapat digunakan dengan tanda kurung maupun tanpa tanda kurung
echo "<h2>Belajar Matematika itu agak mudah tapi agak sulit<br>";
echo ("Hello Word Saya Dara!<br>");
echo "Saya sedang belajar Matematika!<br>";
echo "Saya" , "Suka" , "Nonton" , "Film<br>";
echo "Nama:Dara Maulida";
