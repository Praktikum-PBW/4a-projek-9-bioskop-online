<?php
if (isset($_POST['tambah'])) {
    $jml_tiket = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['jml_tiket']))));
    $jns_pembayaran = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['jns_pembayaran']))));
    $status = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['status']))));
    //$id_jumlah = htmlentities(string: htmlspecialchars(string: strip_tags(string: trim(string: $_POST['id_transaksi']))));


    $query = mysqli_query(mysql: $koneksi, query: "INSERT INTO transaksi VALUES (null,'$jml_tiket','$jns_pembayaran','$status)");

    if ($query) {
        header(header: "location: index.php?page=transaksi");
    } else {
        echo "Gagal";
    }
}