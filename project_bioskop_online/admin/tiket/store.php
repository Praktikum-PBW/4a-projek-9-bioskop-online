<?php
if (isset($_POST['tambah'])) {
    $no_kursi = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['no_kursi']))));
    $harga = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['harga']))));
    //$id_jumlah = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['id_tiket']))));


    $query = mysqli_query(mysql: $koneksi, query: "INSERT INTO tiket VALUES (null,'$no_kursi','$harga')");

    if ($query) {
        header(header: "location: index.php?page=tiket");
    } else {
        echo "Gagal";
    }
}