<!-- Begin Page Content -->
<div class="container-fluid">
    <h1 class="h3 mb-4 text-gray-800"><?php echo $judul; ?></h1>
    <div class="row justify-content-center">
        <div class="col-md-8 ">
            <div class="card">
                <div class="card-header justify-content-center">
                    Form Ubah Data User
                </div>
                <div class="card-body">
                    <form action="" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="id" value="<?= $datauser['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" value="<?= $datauser['nama']; ?>" class="form-control" id="nama" placeholder="Nama">
                            <?= form_error('nama', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" value="<?= $datauser['email']; ?>" class="form-control" id="email" placeholder="Email">
                            <?= form_error('email', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" name="password" value="<?= $datauser['password']; ?>" class="form-control" id="password" placeholder="Password">
                            <?= form_error('password', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <label for="role">Role</label>
                            <select name="role" id="role" class="form-control">
                                <option value="SuperAdmin" <?php if ($datauser['role'] == "SuperAdmin") {
                                                                echo "selected";
                                                            } ?>>SuperAdmin</option>
                                <option value="Admin" <?php if ($datauser['role'] == "Admin") {
                                                            echo "selected";
                                                        } ?>>Admin</option>
                            </select>
                            <?= form_error('role', '<small class="text-danger p1-3">', '</small>'); ?>
                        </div>
                        <br>
                        <a href="<?= base_url('User') ?>" class="btn btn-danger">Tutup</a>
                        <button type="submit" name="tambah" class="btn btn-primary float-right">Ubah Data
                            User</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>