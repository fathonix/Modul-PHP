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


// Associative Array atau Map
// Jikalau tadi array memiliki key berupa angka
// dari nol, maka pada Associative Array kita
// dapat mengatur key untuk setiap nilai. Key
// tersebut bisa berupa angka atau String.
// Penulisannya adalah
// array( key1 => value1, key2 => value2, ... )
$data = array(
    "firstname" => "Aldo",
    "middlename" => "Adirajasa",
    "lastname" => "Fathoni"
);

// Bisa dilihat hasilnya dengan var_dump()
var_dump($data);

// Maka sekarang pemanggilan dan perubahan nilai
// dilakukan menggunakan indeks yang telah diatur
// sebelumnya.
$data["firstname"] = "Abu Abdillah";
$data["middlename"] = "Aldo Adirajasa";

// Dapat ditambahkan pula nilai baru dengan key baru
$data["nickname"] = "Aldo";
var_dump($data);


// Array di dalam Array
// Karena sebuah Array juga adalah sebuah nilai, kita
// dapat Array sebagai salah satu nilai (atau lebih)
// di dalam Array.
$datas=[
    ["Aldo", "Adirajasa", "Fathoni"],
    ["Ahmad", "Hilmi", "Tamaam"]
];
var_dump($datas);
?>