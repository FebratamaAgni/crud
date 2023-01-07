<?php
include('koneksi.php');
$result = mysqli_query($mysqli, "SELECT * FROM mahasiswa ORDER BY id DESC");

$id = $_GET['id'] ?? null;
if ($id) {
    $result_edit = mysqli_query($mysqli, "SELECT * FROM mahasiswa WHERE id=$id");

    while ($user_data = mysqli_fetch_array($result_edit)) {
        $nama = $user_data['nama'];
        $umur = $user_data['umur'];
    }
}
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
        <input type="hidden" name="id" value="<?= $id ?? '' ?>">
        <label for="">Nama</label><br>
        <input type="text" name="nama" value="<?= $nama ?? '' ?>">
        <br>
        <label for="">Umur</label><br>
        <input type="text" name="umur" value="<?= $umur ?? '' ?>">
        <br>
        <br>
        <button type=" submit">Simpan</button>
    </form>
    <hr>
    <h2>Data</h2>
    <table border="1">
        <?php
        while ($user_data = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $user_data['nama'] . "</td>";
            echo "<td>" . $user_data['umur'] . "</td>";
            echo "<td><a href='index.php?id=$user_data[id]'>Edit</a> | <a href='delete.php?id=$user_data[id]'>Delete</a></td></tr>";
        }
        ?>
    </table>
</body>

</html>