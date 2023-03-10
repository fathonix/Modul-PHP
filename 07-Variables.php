<?php
// Variables
// Variable atau Variabel adalah tempat
// menyimpan data agar dapat digunakan
// pada baris kode selanjutnya.
// Variabel dideklarasikan menggunakan simbol
// dolar diikuti dengan nama variabel.
// Nama tersebut tidak boleh mengandung
// spasi, diawali atau hanya berupa angka.
// Disarankan untuk diawali dengan huruf kecil.
$name = "Aldo";
var_dump($name);

// Data yang telah disimpan pada sebuah
// variabel dapat diubah.
$name = "Hilmi";
var_dump($name);

// Constants
// Constant atau Konstanta mirip dengan
// variabel, namun data di dalamnya tidak
// dapat diubah. Mengubahnya menyebabkan
// terjadi error saat menjalankan kode.
// Constant pada PHP dideklarasikan dengan
// menggunakan fungsi
// define("NAMA_CONSTANT", value)
// Disarankan untuk menggunakan huruf besar
// (Uppercase) pada penamaan constant.
define("AUTHOR", "Aldo");
define("EDITOR", "Hilmi");

// Memanggil constant seperti halnya sebuah
// variabel, namun tanpa simbol dolar.
echo AUTHOR . "\n" . EDITOR . "\n";
?>