<div class="container-fluid px-4">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-6"><a href="<?= base_url() ?>Alatberat/tambah" class="btn btn-info mb-2">Tambah Data</a></div>
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Merk</td>
                        <td>Tipe</td>
                        <td>Tahun</td>
                        <td>Kondisi</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($alatberat as $us) : ?>
                        <tr>
                            <td><?= $i; ?>.</td>
                            <td><?= $us['merk']; ?></td>
                            <td><?= $us['tipe']; ?></td>
                            <td><?= $us['tahun']; ?></td>
                            <td><?= $us['kondisi']; ?></td>
                            <td>
                                <a href="<?= base_url('Alatberat/hapus/') . $us['id']; ?>">Hapus</a>
                                <a href="<?= base_url('Alatberat/edit/') . $us['id']; ?>">Edit</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>