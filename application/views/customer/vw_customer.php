<div class="container-fluid px-4">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-6"><a href="<?= base_url() ?>Customer/tambah" class="btn btn-info mb-2">Tambah Data</a></div>
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Nama</td>
                        <td>Alamat</td>
                        <td>No Telp.</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($customer as $us) : ?>
                        <tr>
                            <td><?= $i; ?>.</td>
                            <td><?= $us['nama']; ?></td>
                            <td><?= $us['alamat']; ?></td>
                            <td><?= $us['telepon']; ?></td>
                            <td>
                                <a href="<?= base_url('Customer/hapus/') . $us['id']; ?>">Hapus</a>
                                <a href="<?= base_url('Customer/edit/') . $us['id']; ?>">Edit</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>