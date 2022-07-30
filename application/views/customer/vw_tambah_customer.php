<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Merk
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="nama">Customer</label>
                            <input type="text" name="nama" value="<?= set_value('nama') ?>" class="form-control" id="nama" placeholder="Customer">
                            <?= form_error('nama', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat Customer</label>
                            <input type="text" name="alamat" value="<?= set_value('alamat') ?>" class="form-control" id="alamat" placeholder="Alamat">
                            <?= form_error('alamat', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="telepon">No Telepon</label>
                            <input type="text" name="telepon" value="<?= set_value('telepon') ?>" class="form-control" id="telepon" placeholder="No Telepon">
                            <?= form_error('telepon', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <br>
                        <a href="<?= base_url('Customer') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Tambah Data</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>