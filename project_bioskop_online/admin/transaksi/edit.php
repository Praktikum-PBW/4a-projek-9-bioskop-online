<?php
if (isset($_GET['id_transaksi'])) {
    $id_user = $_GET['id_transaksi'];

    $query = mysqli_query($koneksi, "SELECT * FROM transaksi WHERE id_transaksi='$id_transaksi'");
    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) == 1) {
?>
<div class="row">
    <div class="col-md-12">
        <h4>Edit Tiket</h4>
        <form action="index.php?page=user_update" method="POST">
            <input type="hidden" name="id_transaksi" value="<?= $id_transaksi ?>">
            <div class="mb-2">
                <label for="tgl_transaksi" class="form-label">No. Kursi</label>
                <input type="text" name="tgltransaksi" id="tgltransaksi" class="form-control" placeholder="Masukan Tanggal Transaksi"
                    value="<?= $data['tgltransaksi'] ?>">
            </div>
            <div class="mb-2">
                <label for="jml_tiket" class="form-label">Jumlah Tiket</label>
                <input type="jml_tiket" name="jml_tiket" id="jml_tiket" class="form-control"
                    placeholder="Masukan Jumlah Tiket">
            </div>
            <div class="mb-2">
                <label for="jns_pembayaran" class="form-label">Jumlah Tiket</label>
                <input type="jns_pembayaran" name="jns_pembayaran" id="jns_pembayaran" class="form-control"
                    placeholder="Masukan Jumlah Tiket">
            </div>
            <div class="mb-2">
                <label for="level" class="form-label">Level</label>
                <select name="level" id="level" class="form-select">
                    <option value="Admin" <?php if ($data['level'] == "admin") echo "selected" ?>>Admin</option>
                    <option value="Customer" <?php if ($data['level'] == "customer") echo "selected" ?>>Customer
                    </option>
                </select>
            </div>
            <input type="submit" value="Edit" name="edit" class="btn btn-primary">
        </form>
    </div>
</div>
<?php
    } else {
        header("Location:index.php?page=user");
    }
} else {
    header("Location:index.php?page=user");
}
?>