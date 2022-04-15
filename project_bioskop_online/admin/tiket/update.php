<?php
if (isset($_POST['edit'])) {
    $id_tiket = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['id_tiket']))));
    $id_film = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['id_film']))));
    $id_studio = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['id_studio']))));
    $id_jadwal = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['id_jadwal']))));
    $no_kursi = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['no_kursi']))));
    $harga = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['harga']))));


    if (empty($id_studio)) {
        $query = mysqli_query($koneksi, "UPDATE user SET id_tiket= '$id_tiket', id_film = '$id_film', id_jadwal='$id_jadwal', no_kursi='$no_kursi', harga='$harga' WHERE id_tiket='$id_tiket'");
    } else {
        //$id_studio = sha1($id_studio);
        $query = mysqli_query($koneksi, "UPDATE user SET id_tiket='$id_tiket', id_film = '$id_film', password = '$password', id_jadwal='$id_jadwal', no_kursi='$no_kursi',  harga='$harga' WHERE id_tiket='$id_tiket'");
    }


    if ($query) {
        echo "Update Berhasil";
        header("Location: index.php?page=user");
    } else {
        echo "Mohon Maaf Update Gagal Dilakukan";
    }
}