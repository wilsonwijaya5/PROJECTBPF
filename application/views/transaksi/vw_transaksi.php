<div class="container-fluid px-4">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row">
        <div class="col-md-6"><a href="<?= base_url() ?>Transaksi/tambah" class="btn btn-info mb-2">Tambah Data</a></div>
        <div class="col-md-12">
            <table class="table">
                <thead>
                    <tr>
                        <td>No</td>
                        <td>Customer</td>
                        <td>Alat Berat</td>
                        <td>Tanggal Peminjaman</td>
                        <td>Tanggal Pengembalian</td>
                        <td>Harga Sewa</td>
                        <td>Status</td>
                        <td>Aksi</td>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($transaksi as $us) : ?>
                        <tr>
                            <td><?= $i; ?>.</td>
                            <td><?= $us['customer']; ?></td>
                            <td><?= $us['alatberat']; ?></td>
                            <td><?= $us['tgl_pinjam']; ?></td>
                            <td><?= $us['tgl_kembali']; ?></td>
                            <td><?= $us['harga']; ?></td>
                            <td><?= $us['status']; ?></td>
                            <td>
                                <a href="<?= base_url('Transaksi/hapus/') . $us['id']; ?>">Hapus</a>
                                <a href="<?= base_url('Transaksi/edit/') . $us['id']; ?>">Edit</a>
                            </td>
                        </tr>
                        <?php $i++; ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>