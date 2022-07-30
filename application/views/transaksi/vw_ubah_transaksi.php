<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Ubah Data Transaksi
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $transaksi['id']; ?>">
                        <div class="form-group">
                            <label for="customer">Customer</label>
                            <select name="customer" id="menu_id" class="form-control">
                                <?php foreach ($customer as $p) : ?>
                                    <option value="<?= $p['id']; ?>" <?php if ($transaksi['customer'] == $p['id']) { ?> selected <?php } ?>> <?= $p['nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="alatberat">Alat Berat</label>
                            <select name="alatberat" id="menu_id1" class="form-control">
                                <?php foreach ($alatberat as $p) : ?>
                                    <option value="<?= $p['id']; ?>" <?php if ($transaksi['alatberat'] == $p['id']) { ?> selected <?php } ?>> <?= $p['tipe']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tgl_pinjam">Tanggal Peminjaman</label>
                            <input type="date" name="tgl_pinjam" value="<?= $transaksi['tgl_pinjam']; ?>" class="form-control" id="tgl_pinjam" placeholder="Tanggal Peminjaman">
                            <?= form_error('tgl_pinjam', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tgl_kembali">Tanggal Pengembalian</label>
                            <input type="date" name="tgl_kembali" value="<?= $transaksi['tgl_kembali']; ?>" class="form-control" id="tgl_kembali" placeholder="Tanggal Pengembalian">
                            <?= form_error('tgl_kembali', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga Sewa</label>
                            <input type="text" name="harga" value="<?= $transaksi['harga']; ?>" class="form-control" id="harga" placeholder="Harga Sewa">
                            <?= form_error('harga', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="status">Jenis Kelamin</label>
                            <select name="status" id="status" class="form-control">
                                <option value="SUDAH LUNAS DAN SUDAH DIKEMBALIKAN" <?php if ($transaksi['status'] == "SUDAH LUNAS DAN SUDAH DIKEMBALIKAN") {
                                                                                        echo "selected";
                                                                                    } ?>>SUDAH LUNAS DAN SUDAH DIKEMBALIKAN</option>
                                <option value="SUDAH LUNAS DAN MASIH DALAM PEMINJAMAN" <?php if ($transaksi['status'] == "SUDAH LUNAS DAN MASIH DALAM PEMINJAMAN") {
                                                                                            echo "selected";
                                                                                        } ?>>SUDAH LUNAS DAN MASIH DALAM PEMINJAMAN</option>
                                <option value="SUDAH LUNAS DAN BELUM DIKEMBALIKAN" <?php if ($transaksi['status'] == "SUDAH LUNAS DAN BELUM DIKEMBALIKAN") {
                                                                                        echo "selected";
                                                                                    } ?>>SUDAH LUNAS DAN BELUM DIKEMBALIKAN</option>
                                <option value="BELUM LUNAS DAN SUDAH DIKEMBALIKAN" <?php if ($transaksi['status'] == "BELUM LUNAS DAN SUDAH DIKEMBALIKAN") {
                                                                                        echo "selected";
                                                                                    } ?>>BELUM LUNAS DAN SUDAH DIKEMBALIKAN</option>
                                <option value="BELUM LUNAS DAN MASIH DALAM PEMINJAMAN" <?php if ($transaksi['status'] == "BELUM LUNAS DAN MASIH DALAM PEMINJAMAN") {
                                                                                            echo "selected";
                                                                                        } ?>>BELUM LUNAS DAN MASIH DALAM PEMINJAMAN</option>
                                <option value="BELUM LUNAS DAN BELUM DIKEMBALIKAN" <?php if ($transaksi['status'] == "BELUM LUNAS DAN BELUM DIKEMBALIKAN") {
                                                                                        echo "selected";
                                                                                    } ?>>BELUM LUNAS DAN BELUM DIKEMBALIKAN</option>
                            </select>
                            <?= form_error('status', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <br>
                        <a href="<?= base_url('Transaksi') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data

                            Transaksi</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>