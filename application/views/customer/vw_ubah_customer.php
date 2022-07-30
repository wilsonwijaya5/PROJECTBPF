<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Ubah Data Customer
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $customer['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Customer</label>
                            <input type="text" name="nama" value="<?= $customer['nama']; ?>" class="form-control" id="nama" placeholder="Customer">
                            <?= form_error('nama', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="alamat">Alamat Customer</label>
                            <input type="text" name="alamat" value="<?= $customer['alamat']; ?>" class="form-control" id="alamat" placeholder="Alamat">
                            <?= form_error('alamat', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="telepon">No Telepon</label>
                            <input type="text" name="telepon" value="<?= $customer['telepon']; ?>" class="form-control" id="telepon" placeholder="No Telepon">
                            <?= form_error('telepon', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <br>
                        <a href="<?= base_url('Customer') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data
                            Customer</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>