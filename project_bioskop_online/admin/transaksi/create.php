<section class="home py-5">
    <div class="container row">
        <div class="col-md-12">
            <h4>Tambah Transaksi</h4>
            <form action="index.php?page=film_store" method="POST" enctype="multipart/form-data">
                <div class="mb-2">
                    <label for="tgl_transaksi" class="form-label">Tanggal Transaksi</label>
                    <input type="text" name="judul" id="judul" class="form-control" placeholder="Masukan Tanggal Transaksi">
                </div>
                <div class="mb-2">
                    <label for="jml_tiket" class="form-label">Jumlah Tiket</label><br>
                    <input type="text" name="jml_tiket" id="jml_tiket" class="form-control">
                </div>
                <div class="mb-2">
                    <label for="jns_pembayaran" class="form-label">Jenis Pembayaran</label>
                    <select name="jns_pembayaran" id="jns_pembayaran" class="form-select">
                        <option value="Transfer">Transfer</option>
                        <option value="Cash">Cash</option>
                        <option value="M-Banking">M-Banking</option>
                    </select>
                </div>
                <div class="mb-2">
                    <label for="status" class="form-label">Status</label>
                    <select name="status" id="status" class="form-select">
                        <option value="Paid">Paid</option>
                        <option value="Unpaid">Unpaid</option>
                    </select>
                </div>
                <input type="submit" value="Tambah" name="tambah" class="btn btn-primary">
            </form>
        </div>
    </div>
</section>