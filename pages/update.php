<?php
include_once('./config/connection.php');

$id = $_POST['id'];
$nama = $_POST['name'];

// Ambil data gambar dan musik yang sudah ada di database
$result = mysqli_query($conn, "SELECT image, song FROM music WHERE id=$id");
$row = mysqli_fetch_assoc($result);
$gambar_lama = $row['image'];
$musik_lama = $row['song'];

// Periksa apakah ada file gambar yang diunggah
if (!empty($_FILES['image']['name'])) {
    $nama_gambar = $_FILES['image']['name'];
    $gambar_sementara = $_FILES['image']['tmp_name'];
    $dir_gambar = '../public/img/';
    $upload_gambar = move_uploaded_file($gambar_sementara, $dir_gambar . $nama_gambar);

    if ($upload_gambar) {
        $gambar = $nama_gambar;
    }
} else {
    // Jika tidak ada perubahan, gunakan gambar yang sudah ada sebelumnya
    $gambar = $gambar_lama;
}

// Periksa apakah ada file musik yang diunggah
if (!empty($_FILES['song']['name'])) {
    $nama_musik = $_FILES['song']['name'];
    $musik_sementara = $_FILES['song']['tmp_name'];
    $dir_musik = '../public/music/';
    $upload_musik = move_uploaded_file($musik_sementara, $dir_musik . $nama_musik);

    if ($upload_musik) {
        $musik = $nama_musik;
    }
} else {
    // Jika tidak ada perubahan, gunakan musik yang sudah ada sebelumnya
    $musik = $musik_lama;
}

// Perbarui data dalam database
mysqli_query($conn, "UPDATE music SET name='$nama', image='$gambar', song='$musik' WHERE id=$id");

header('Location: menu-admin.php');
