<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tampil</title>
</head>
<body>
    <?php
    include("koneksi.php");
    $data = mysqli_query($koneksi,"SELECT * FROM tb_siswa");
    ?>
    <table border="1">
        <tr>
            <td>id</td>
            <td>nama</td>
            <td>kelas</td>
            <td>program keahlian</td>
            </tr>
            <?php while($dataSiswa = mysqli_fetch_assoc($data)){ ?>
            <tr>
               <td><?= $dataSiswa["id"];?></td>
               <td><?= $dataSiswa["nama"];?></td>
               <td><?= $dataSiswa["kelas"];?></td>
               <td><?= $dataSiswa["program_keahlian"];?></td>
            </tr>
            <?php } ?>
    </table>
</body>
</html>