<?php

require 'dbconnect.php';

$id = $_GET['id'];

$delete = mysqli_query($conn, "DELETE FROM daftar_konser WHERE konser_id=$id");

if ($delete) {
    header('Location: index.php');
} else {
    echo 'Gagal menghapus data';
}