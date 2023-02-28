<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil NIlai Mahasiswa</title>
</head>
<body>
    
        <div class="container">
            <table class="table text-uppercase table-bordered">
                <tr class="table-primary">
                    <th>nama</th>
                    <th>mata kuliah</th>
                    <th>Tugas</th>
                    <th>UTS</th>
                    <th>UAS</th>
                    <th>total nilai</th>
                </tr>
                <?php require_once "proses_nilai.php";?>
                <tr>
                    <td><?= $nama;?></td>
                    <td><?= $matkul;?></td>
                    <td><?= $TUGAS;?></td>
                    <td><?= $UTS;?></td>
                    <td><?= $UAS;?></td>
                    <td><?= $total_nilai;?></td>
                </tr>
            </table>
        </div>
</body>
</html>