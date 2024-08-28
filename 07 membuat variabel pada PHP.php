<?php

$simbol = "dara";
$harga = 1000;
$nama_barang = "Kopi Cappuccino";
$harga = 5000;
$stok = 50;

// membuat variabel baru
$stok = 50;

// mengisi ulang variabel dengan nilai baru
$stok = 45;


//1)	Awal dari nama variabel tidak boleh menggunakan angka dan simbol , kecuali underscore
//Contoh: ✔️ Benar
$nama = "dara maulida";
$rosi46 = "dara";
//2)	Nama variabel yang terdiri dari dua suku kata, bisa dipisah dengan underscore (_) atau menggunakan style camelCase.
Contoh:
$namaBarang = "novel 3726 MDPL";
$namaPembeli = "dara";
$hargA = 50000; //  menggunakan camelCase

//3)	Variabel harus diisi saat pembuatannya. Bila kita tidak ingin mengisi, cukup isi dengan nilai kosong.
//Contoh:
$nama_Barang = "casing HP";
$namaPembeli = "dara";
$Harga = 25000;

//4)	Nama variabel bersifat Case Sensitive, artinya huruf besar dan huruf kecil dibedakan.
//Contoh: Tiga variabel ini akan dianggap berbeda.
$Belajar = "Bahasa Indonesia";
$BELAJAR = "Matematika";
$belajar = "Produktif";

//====== cara mencetak ======

echo
"<p>Nama Simbol: $simbol",
"<p>Harga Simbol: $harga",
"<p>Nama Barang: $nama_barang",
"<p>Harga Kopi: $harga",
"<p>Stok Kopi: $stok",
"<p>Nama: $nama",
"<p>Nama Pendek: $rosi46",
"<p>Novel Yang Dibeli: $namaBarang",
"<p>Nama Pembeli: $namaPembeli",
"<p>Harga Novel: $hargA",
"<p>Barang Yang Dibeli: $nama_Barang",
"<p>Nama Pembeli: $namaPembeli",
"<p>Harga Barang: $Harga",
"<p>Belajar: $Belajar",
"<p>Belajar: $BELAJAR",
"<P>Belajar: $belajar",
"<p><strong>Nama:Dara Maulida";
