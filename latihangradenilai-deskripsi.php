<?php // kode blok php
$nilai = 86; // mendefinisikan variabel nilai

if (($nilai >= 85) && ($nilai <=100)) // Jika nilai $nilai berada di antara 85 dan 100 (inklusif), maka blok kode dalam if ini akan dieksekusi.

{
 $grade = "A"; // Jika kondisi pada baris sebelumnya terpenuhi, maka variabel $grade akan diisi dengan string "A".
 $info = "Good, pertahankan nilai kamu"; // Jika kondisi pada baris sebelumnya terpenuhi, maka variabel $info akan diisi dengan string "Good, pertahankan nilai kamu".
}

elseif (($nilai >= 75) && ($nilai <85)) // Jika kondisi pada baris sebelumnya tidak terpenuhi, maka blok kode ini akan diperiksa. Jika nilai $nilai berada di antara 75 dan 84 (inklusif), maka blok kode dalam elseif ini akan dieksekusi.

{
 $grade = "B"; // Jika kondisi pada baris sebelumnya terpenuhi, maka variabel $grade akan diisi dengan string "B".
 $info ="Nilai kamu bagus, bisa ditingkatkan lagi"; //  Jika kondisi pada baris sebelumnya terpenuhi, maka variabel $info akan diisi dengan string "Nilai kamu bagus, bisa ditingkatkan lagi". 
}
elseif (($nilai >= 60) && ($nilai <75)) // Jika kondisi pada baris sebelumnya tidak terpenuhi, maka blok kode ini akan diperiksa. Jika nilai $nilai berada di antara 60 dan 74 (inklusif), maka blok kode dalam elseif ini akan dieksekusi.
{
 $grade = "C"; // Jika kondisi pada baris sebelumnya terpenuhi, maka variabel $grade akan diisi dengan string "C".
 $info ="Nilai kamu cukup, harus ditingkatkan lagi"; // Jika kondisi pada baris sebelumnya terpenuhi, maka variabel $info akan diisi dengan string "Nilai kamu cukup, harus ditingkatkan lagi".
}
elseif (($nilai >= 46) && ($nilai <59)) // Jika kondisi pada baris sebelumnya tidak terpenuhi, maka blok kode ini akan diperiksa. Jika nilai $nilai berada di antara 46 dan 59 (inklusif), maka blok kode dalam elseif ini akan dieksekusi.
{
 $grade = "D"; //  Jika kondisi pada baris sebelumnya terpenuhi, maka variabel $grade akan diisi dengan string "D".
 $info ="Nila kamu kurang, kamu tidak lulus. Silahkan mengulang di semester depan"; // ika kondisi pada baris sebelumnya terpenuhi, maka variabel $info akan diisi dengan stri
}
else // Jika tidak ada kondisi sebelumnya yang terpenuhi, maka blok kode dalam else ini akan dieksekusi.
{
 $grade = "E"; // Jika kondisi pada baris sebelumnya terpenuhi, maka variabel $grade akan diisi dengan string "E".
 $info ="Sangat kurang. Wajib mengulang di semester depan"; // ika kondisi pada baris sebelumnya terpenuhi, maka variabel $info akan diisi dengan string "Sangat kurang. Wajib mengulang di semester depan".
}
echo "Kamu mendapatkan : $nilai, dengan grade '$grade' ";

// echo : Mencetak teks "Kamu mendapatkan : " diikuti oleh nilai dari variabel $nilai, diikuti oleh teks ", dengan grade '", diikuti oleh nilai dari variabel $grade, diikuti oleh teks "' ".

echo "<br>";
// Mencetak sebuah tag HTML <br> untuk membuat baris baru.
echo $info;
// Mencetak nilai dari variabel $info.

// akhir blok php 
?> 
