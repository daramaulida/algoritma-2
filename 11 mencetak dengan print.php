<?php
print "<h2>Belajar PHP dari Nol!</h2>";
print "Hello world!<br>";
print "Belajar mecetak teks di PHP!<br>";

$cetak = print("Hello World!");
echo "Ini ", "teks ", "yang ", "dibuat ", "terpisah.<br>";

echo "1" + "1"; // akan menghasilkan 2
echo "1" . "1"; // akan menghasilkan 11
//Contoh:

$txt1 = "Tutorial PHP";
$txt2 = "ahmadimuslim.com<br>";
$x = 5;
$y = 4;

echo "<h2>" . $txt1 . "</h2>";
echo "Saya belajar pemrograman PHP di " . $txt2 . "<br>";
echo $x + $y;
?>
