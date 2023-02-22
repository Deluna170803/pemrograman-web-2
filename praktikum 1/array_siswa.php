<?php

//array ada 2 yaitu numerik dan asosiatif
$mhs1 = ['id' =>1, 'NIM' =>11022225, 'UTS' =>90, 'UAS' =>87, 'TUGAS' =>95];
$mhs2 = ['id' =>2, 'NIM' =>11022248, 'UTS' =>87, 'UAS' =>90, 'TUGAS' =>87];
$mhs3 = ['id' =>3, 'NIM' =>11022358, 'UTS' =>98, 'UAS' =>85, 'TUGAS' =>90];

$ar_nilai = [$mhs1, $mhs2, $mhs3];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas 1</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
    <h2> Data Mahasiswa STT NF </h2>
        <table class="table table-striped">
            <tr>
                <th>Nomor </th>
                <th>NIM</th>
                <th>UTS</th>
                <th>UAS</th>
                <th>TUGAS</th>
                <th>Nilai Akhir</th>
            </tr>
            <?php foreach($ar_nilai as $nilai){
                $nilai_akhir = ($nilai['UTS'] + $nilai['UAS'] + $nilai['TUGAS'])/3;
            ?>
            <tr>
                <td><?= $nilai['id'];?></td>
                <td><?= $nilai['NIM'];?></td>
                <td><?= $nilai['UTS'];?></td>
                <td><?= $nilai['UAS'];?></td>
                <td><?= $nilai['TUGAS'];?></td>
                <td><?= number_format ($nilai_akhir, 1, '.', '.');?></td>
            </tr>
            <?php } ?>
            </table>
    </body>
</html> 