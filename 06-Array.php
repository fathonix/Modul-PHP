<?php
// Array memungkinkan kita untuk menyimpan
// beberapa data pada satu tempat.
$values = ["Beberapa", "nilai", "String"];
var_dump($values);

// Bisa dilihat pada output var_dump() bahwa
// masing-masing nilai memiliki key atau kata
// kunci atau urutan atau indeks untuk
// memanggil nilai tersebut.
// Perhatikan bahwa key tersebut dimulai dari
// angka nol, bukan dari satu.
// Kita dapat memanggil suatu data pada array
// dengan penulisan $variable[index]
echo $values[0] . "\n";

// Kita dapat pula mengubah data tersebut
// seperti halnya sebuah variabel.
$values[1] = "data";
var_dump($values);

// Kita dapat menghapus data tersebut
// menggunakan fungsi unset(), namun perlu
// diperhatikan bahwa urutan pada data lain
// tetap sama, tidak maju menempati urutan
// data yang dihapus.
unset($values[1]);
var_dump($values);

// Terdapat fungsi count($array) untuk
// menghitung jumlah nilai pada array.
echo "Jumlah data pada array: " . count($values) . "\n";
?>