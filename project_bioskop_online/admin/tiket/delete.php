<?php
if (isset($_GET['id_tiket'])) {
    $id_user = $_GET['id_tiket'];

    $query = mysqli_query($koneksi, "DELETE FROM user WHERE id_user='$id_tiket'");

    if ($query) {
        header("Location: index.php?page=tiket");
    } else {
        echo "Gagal";
    }
}