<?php
include('koneksi.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>

<body>
    <h1>Selamat Datang</h1>

    <form action="simpan.php" method="post">
        <label for="">Nama</label><br>
        <input type="text" name="nama">
        <br>
        <label for="">Umur</label><br>
        <input type="text" name="umur">
        <br>
        <br>
        <button type="submit">Simpan</button>
    </form>
</body>

</html>