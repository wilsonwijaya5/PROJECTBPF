<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Transaksi
                </div>

                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="customer">Customer</label>
                            <select name="customer" id="customer" value="<?= set_value('customer') ?>" class="form-control">
                                <option value="">Pilih Customer</option>
                                <?php foreach ($customer as $p) : ?>
                                    <option value="<?= $p['id']; ?>"><?= $p['nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('customer', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="alatberat">Alat Berat</label>
                            <select name="alatberat" id="alatberat" value="<?= set_value('alatberat') ?>" class="form-control">
                                <option value="">Pilih Alat Berat</option>
                                <?php foreach ($alatberat as $p) : ?>
                                    <option value="<?= $p['id']; ?>"><?= $p['tipe']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('alatberat', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tgl_pinjam">Tanggal Peminjaman</label>
                            <input type="date" name="tgl_pinjam" value="<?= set_value('tgl_pinjam') ?>" class="form-control" id="tgl_pinjam" placeholder="Tanggal Peminjaman">
                            <?= form_error('tgl_pinjam', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tgl_kembali">Tanggal Pengembalian</label>
                            <input type="date" name="tgl_kembali" value="<?= set_value('tgl_kembali') ?>" class="form-control" id="tgl_kembali" placeholder="Tanggal Pengembalian">
                            <?= form_error('tgl_kembali', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="harga">Harga Sewa</label>
                            <input type="text" name="harga" value="<?= set_value('harga') ?>" class="form-control" id="harga" placeholder="Harga Sewa">
                            <?= form_error('harga', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="status">Status</label>
                            <select name="status" id="status" class="form-control">
                                <option value="">Pilih Status</option>
                                <option value="SUDAH LUNAS DAN SUDAH DIKEMBALIKAN">SUDAH LUNAS DAN SUDAH DIKEMBALIKAN</option>
                                <option value="SUDAH LUNAS DAN MASIH DALAM PEMINJAMAN">SUDAH LUNAS DAN MASIH DALAM PEMINJAMAN</option>
                                <option value="SUDAH LUNAS DAN BELUM DIKEMBALIKAN">SUDAH LUNAS DAN BELUM DIKEMBALIKAN</option>
                                <option value="BELUM LUNAS DAN SUDAH DIKEMBALIKAN">BELUM LUNAS DAN SUDAH DIKEMBALIKAN</option>
                                <option value="BELUM LUNAS DAN MASIH DALAM PEMINJAMAN">BELUM LUNAS DAN MASIH DALAM PEMINJAMAN</option>
                                <option value="BELUM LUNAS DAN BELUM DIKEMBALIKAN">BELUM LUNAS DAN BELUM DIKEMBALIKAN</option>
                            </select>
                        </div>
                        <br>
                        <a href="<?= base_url('Transaksi') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">
                            Tambah Transaksi
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>