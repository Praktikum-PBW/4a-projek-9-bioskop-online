<section class="home py-5">
    <div class="container row">
        <div class="col-md-12">
            <div class="d-flex justify-content-between mb-3">
                <h4>Data Transaksi</h4>
                <a href="index.php?page=studio_create" class="btn btn-primary">Tambah</a>
            </div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Tanggal Transaksi</th>
                            <th>Jumlah Tiket</th>
                            <th>Jenis Pembayaran</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $query = mysqli_query($koneksi, "SELECT * FROM transaksi");
                        $no = 1;
                        if (mysqli_num_rows($query) > 0) {
                            foreach ($query as $data) {
                        ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= $data['tgl_transaksi'] ?></td>
                            <td><?= $data['jml_tiket'] ?></td>
                            <td><?= $data['jns_pemnbayaran'] ?></td>
                            <td><?= $data['status'] ?></td>
                            <td>
                                <div class="btn-group">
                                    <a href="index.php?page=studio_edit&id_studio=<?= $data['id_transaksi'] ?>"
                                        class="btn btn-sm btn-warning">Edit</a>
                                    <a href="index.php?page=studio_delete&id_studio=<?= $data['id_transaksi'] ?>"
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