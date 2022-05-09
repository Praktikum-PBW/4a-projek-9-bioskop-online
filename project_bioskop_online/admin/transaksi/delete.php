<?php
if (isset($_GET['id_transaksi'])) {
    $id_user = $_GET['id_transaksi'];

    $query = mysqli_query($koneksi, "DELETE FROM user WHERE id_user='$id_transaksi'");

    if ($query) {
        header("Location: index.php?page=tiket");
    } else {
        echo "Gagal";
    }
}