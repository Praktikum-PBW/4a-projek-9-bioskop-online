<section class="home py-5">
    <div class="container row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between mb-3">
                <h4>Data Tiket</h4>
                <a href="index.php?page=user_create" class="btn btn-primary">Tambah</a>
            </div>
            <div class="table-responsive">
                <table class="table border">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>No. Kursi</th>
                            <th>Harga</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = mysqli_query($koneksi, "SELECT * FROM tiket");
                        $no = 1;
                        if (mysqli_num_rows($query) > 0) {
                            foreach ($query as $data) {
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data['no_kursi'] ?></td>
                            <td><?= $data['harga'] ?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="index.php?page=user_edit&id_user=<?= $data['id_tiket'] ?>"
                                        class="btn btn-sm btn-warning">Edit</a>
                                    <a href="index.php?page=user_delete&id_user=<?= $data['id_tiket'] ?>"
                                        class="btn btn-sm btn-danger"
                                        onclick="return confirm('Apakah anda yakin?')">Delete</a>
                                </div>
                            </td>
                        </tr>
                        <?php
                            }
                        } else {
                            ?>
                        <tr>
                            <td colspan="6">
                                <div class="alert alert-danger">Tidak ada data...</div>
                            </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>