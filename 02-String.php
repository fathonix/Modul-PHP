<?php
echo "Nama: ";
// newline atau baris baru seperti enter (\n)
// dua string bisa digabung dengan titik
echo "Aldo Adirajasa Fathoni" . "\n";

// tab (\t)
echo "\tIni adalah tab\n";

// backslash (\) untuk memasukkan karakter \
// atau " ke dalam string
echo "Karakter \\ dan \"\n";

// multiline string (teks beberapa baris)
// menggunakan heredoc
echo <<<akhir
Ini adalah teks beberapa baris yang
ditulis menggunakan heredoc tanpa
perlu menggunakan tanda petik dua.
akhir;
// menggunakan nowdoc
echo <<<'akhir'
Ini adalah teks beberapa baris yang
ditulis menggunakan nowdoc tanpa
perlu menggunakan tanda petik dua.
akhir;
?>