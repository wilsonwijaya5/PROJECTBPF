<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Ubah Data Alatberat
                </div>
                <div class="card-body">
                    <form action="" method="POST">
                        <input type="hidden" name="id" value="<?= $alatberat['id']; ?>">
                        <div class="form-group">
                            <label for="merk">Merk</label>
                            <select name="merk" id="menu_id" class="form-control">
                                <?php foreach ($merk as $p) : ?>
                                    <option value="<?= $p['id']; ?>" <?php if ($alatberat['merk'] == $p['id']) { ?> selected <?php } ?>> <?= $p['nama']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="tipe">Tipe</label>
                            <input type="text" name="tipe" value="<?= $alatberat['tipe']; ?>" class="form-control" id="tipe" placeholder="Tipe">
                            <?= form_error('tipe', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tahun">Tahun</label>
                            <input type="text" name="tahun" value="<?= $alatberat['tahun']; ?>" class="form-control" id="tahun" placeholder="Tahun">
                            <?= form_error('tahun', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="kondisi">Kondisi</label>
                            <input type="text" name="kondisi" value="<?= $alatberat['kondisi']; ?>" class="form-control" id="kondisi" placeholder="Kondisi">
                            <?= form_error('kondisi', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <br>
                        <a href="<?= base_url('Alatberat') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data

                            Alat Berat</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>