<?php
$domisili = ["Jakarta", "Bogor", "Depok", "Tangerang", "Bekasi"];

$program_studi= [
    "SI"=>"Sistem Informasi",
    "TI"=>"Teknik Informatika",
    "BD"=>"Bisnis Digital"
];

$skills = [
    "HTML" =>10,
    "CSS"=>10,
    "Javascript"=>20,
    "RWD Bootsrap"=>20,
    "PHP"=>30,
    "Python"=>30,
    "Java"=>50
];

if(isset($_POST['submit'])){
    $skor= 0;
    if(isset($_POST['skill'])){
        foreach ($_POST['skill'] as $key){
            $skor += $skills[$key];
        }
    }

    if ($skor == 0){
        $keterangan = "TIDAK TERPENUHI";
    }
    elseif($skor > 0 && $skor <= 40){
        $keterangan = "KURANG";
    }
    elseif($skor > 40 && $skor <= 60){
        $keterangan = "CUKUP";
    }
    elseif($skor > 60 && $skor <=100){
        $keterangan = "BAIK";
    }
    else{
        $keterangan = "SANGAT BAIK";
    }
    
}
?>