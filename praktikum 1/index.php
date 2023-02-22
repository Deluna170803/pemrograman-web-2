<?php

//ini adalah suatu komentar 
/*
ini sebuah komentar 
*/

echo "Hello World<br>";
print_r("Nama saya Deva Lubna Listya <br>");
var_dump("Kuliah di STT Terpadu Nurul Fikri<br>"); //nampilin tipe data apa

//Membuat Variabel Use
$nama = "Deva Lubna";
$umur = 19;
$berat = 45.0; //pakai titik untuk pengabungan (concat)
$mahasiswa = true;

echo "Nama saya adalah $nama<br>";
echo "Umur saya adalah $umur tahun <br>";
echo "Berat badan saya adalah $berat kg <br>";
echo "Apakah saya adalah Mahasiswa yaitu $mahasiswa <br>";

//membuat variabel root
// "Dokument root " . $_SERVER["DOCUMENT_ROOT"]; //NAMA FILE YANG DISIMPAN
// "Nama File " . $_SERVER['PHP_SELF']; //tempat yang disimpan

//Membuat Variabel KOnstanta
define("PHI", 3.14);
$jari = 8;
$luas =PHI * $jari;
$keliling = 2 * PHI * $jari;

echo "Luas lingkaran adalah = $jari =  $luas<br>";
echo "Keliling lingkaran adalah $keliling<br> ";

//Membuat Array
$programs = ["php", "javascript", "HTML", "CSS"];
// echo $programs[0];
// echo count($programs);
// $programs[] = "Mysql";
// echo count($programs);

// unset ($programs[0]); //menghapus data
// echo "<br>" . $programs[0];

// untuk html
echo "<ol>"; 
foreach($programs as $program){
    echo "<li> $program </li>";

}
echo "</ol>";
//untuk mengganti kata php echo menggunakan tanda ("=")

?>