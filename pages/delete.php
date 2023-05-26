<?php
require_once('./config/connection.php');

$id = $_GET['id'];

mysqli_query($conn, "delete from music where id = $id");

header('Location: menu-admin.php');
