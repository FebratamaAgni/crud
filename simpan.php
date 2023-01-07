<?php

include('koneksi.php');

$nama = $_POST['nama'];
$umur = $_POST['umur'];

$result = mysqli_query($mysqli, "INSERT INTO mahasiswa(nama,umur) VALUES('$nama','$umur')");

header('Location: index.php');
