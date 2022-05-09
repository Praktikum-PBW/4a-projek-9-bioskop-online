<?php
if (isset($_POST['edit'])) {
    $id_transaksi = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['id_transaksi']))));
    $id_user = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['id_user']))));
    $id_tiket = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['id_tiket']))));
    $tgl_transaksi = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['tgl_transaksi']))));
    $jml_tiket = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['jml_tiket']))));
    $jns_pemabayaran = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['jns_pemabayaran']))));
    $status = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['statusjns_pemabayaran']))));


    if (empty($id_tiket)) {
        $query = mysqli_query($koneksi, "UPDATE user SET id_transaksi= '$id_transaksi', id_user = '$id_user', tgl_transaksi='$tgl_transaksi', jml_tiket='$jml_tiket', jns_pemabayaran='$jns_pemabayaran' WHERE id_transaksi='$id_transaksi', status='$status");
    } else {
        //$id_tiket = sha1($id_tiket);
        $query = mysqli_query($koneksi, "UPDATE user SET id_transaksi='$id_transaksi', id_user = '$id_user', password = '$password', tgl_transaksi='$tgl_transaksi', jml_tiket='$jml_tiket',  jns_pemabayaran='$jns_pemabayaran' WHERE id_transaksi='$id_transaksi', status='$status");
    }


    if ($query) {
        echo "Update Berhasil";
        header("Location: index.php?page=user");
    } else {
        echo "Mohon Maaf Update Gagal Dilakukan";
    }
}