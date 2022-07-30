<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Tambah Data Alatberat
                </div>

                <div class="card-body">
                    <form action="" method="POST">
                        <div class="form-group">
                            <label for="merk">Merk</label>
                            <select name="merk" id="merk" value="<?= set_value('merk') ?>" class="form-control">
                                <option value="">Pilih Merk</option>
                                <?php foreach ($merk as $p) : ?>
                                    <option value="<?= $p['id']; ?>"><?= $p['nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                            <?= form_error('merk', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tipe">Tipe</label>
                            <input type="text" name="tipe" value="<?= set_value('tipe') ?>" class="form-control" id="tipe" placeholder="Tipe">
                            <?= form_error('tipe', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tahun">Tahun</label>
                            <input type="text" name="tahun" value="<?= set_value('tahun') ?>" class="form-control" id="tahun" placeholder="Tahun">
                            <?= form_error('tahun', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kondisi">Kondisi</label>
                            <input type="text" name="kondisi" value="<?= set_value('kondisi') ?>" class="form-control" id="kondisi" placeholder="Kondisi">
                            <?= form_error('kondisi', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <br>
                        <a href="<?= base_url('Alatberat') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">
                            Tambah Alat Berat
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>