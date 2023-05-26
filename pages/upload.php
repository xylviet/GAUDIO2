<?php
$nama_gambar = $_FILES['image']['name'];
$gambar_sementara = $_FILES['image']['tmp_name'];
$dir_gambar = '../public/img/';
$upload_gambar = move_uploaded_file($gambar_sementara, $dir_gambar . $nama_gambar);

$nama_musik = $_FILES['song']['name'];
$musik_sementara = $_FILES['song']['tmp_name'];
$dir_musik = '../public/music/';
$upload_musik = move_uploaded_file($musik_sementara, $dir_musik . $nama_musik);

require_once('./config/connection.php');

$nama = $_POST['name'];
$gambar = $nama_gambar;
$musik = $nama_musik;

mysqli_query($conn, "insert into music values (null, '$nama', '$gambar', '$musik')");

header('Location: menu-admin.php');
