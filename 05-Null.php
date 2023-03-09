<?php
// NULL merupakan tipe data yang menandakan
// bahwa data tersebut kosong tidak bernilai.
// Disini kita membuat variabel berisi null.
// Variabel adalah tempat menyimpan data.
$name = null;
$age = null;

echo "Nama: " . $name . "\n";
echo "Umur: " . $age . "\n";

// Kita dapat mengecek apakah data tersebut
// bernilai NULL dengan menggunakan fungsi
// is_null($variable)
echo "Apakah name null? ";
var_dump(is_null($name));

// Sebaliknya, kita bisa mengecek apakah
// data tersebut tidak NULL menggunakan
// fungsi isset($variable)
echo "Apakah name tidak null? ";
var_dump(isset($name));
?>