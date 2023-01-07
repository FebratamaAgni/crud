<?php

include('koneksi.php');

$nama = $_POST['nama'];
$umur = $_POST['umur'];
$id = $_POST['id'] ?? null;

if ($id) {
    $result = mysqli_query($mysqli, "UPDATE mahasiswa SET nama='$nama',umur='$umur' WHERE id=$id");
} else {
    $result = mysqli_query($mysqli, "INSERT INTO mahasiswa(nama,umur) VALUES('$nama','$umur')");
}

header('Location: index.php');
