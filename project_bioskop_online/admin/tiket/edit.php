<?php
if (isset($_GET['id_tiket'])) {
    $id_user = $_GET['id_tiket'];

    $query = mysqli_query($koneksi, "SELECT * FROM tiket WHERE id_tiketr='$id_tiket'");
    $data = mysqli_fetch_array($query);

    if (mysqli_num_rows($query) == 1) {
?>
<div class="row">
    <div class="col-md-12">
        <h4>Edit Tiket</h4>
        <form action="index.php?page=user_update" method="POST">
            <input type="hidden" name="id_tiket" value="<?= $id_tiket ?>">
            <div class="mb-2">
                <label for="nokursi" class="form-label">No. Kursi</label>
                <input type="text" name="nokursi" id="noKursi" class="form-control" placeholder="Masukan No.Kursi"
                    value="<?= $data['nokursi'] ?>">
            </div>
            <div class="mb-2">
                <label for="harga" class="form-label">Harga</label>
                <input type="harga" name="harga" id="harga" class="form-control"
                    placeholder="Masukan Harga">
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