<div class="container" style="margin: 100px auto;">
    <h2><?= $subtitle; ?></h2>
    <a href="<?= base_url('main') ?>" class="my-3 btn btn-dark">Kembali</a>
    <div class="row">
        <div class="col-lg-6">

            <form method="post" action="<?= base_url('main/add') ?>" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= set_value('nama') ?>">
                    <?= form_error('nama', '<small class="text text-danger">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="nama">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?= set_value('email') ?>">
                    <?= form_error('email', '<small class="text text-danger">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="jenisKelamin">Jenis Kelamin</label>
                    <select name="jenisKelamin" id="jenisKelamin" class="form-control" required>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <select name="jabatan" id="jabatan" class="form-control" required>
                        <?php foreach ($jabatan as $data) : ?>
                            <option value="<?= $data; ?>"><?= $data; ?></option>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <label for="nama">Password</label>
                    <input type="password" class="form-control" id="password" name="password">
                    <?= form_error('password', '<small class="text text-danger">', '</small>') ?>
                </div>
                <div class="form-group">
                    <label for="nama">Konfirmasi Password</label>
                    <input type="password" class="form-control" id="confirmPassword" name="confirmPassword">
                </div>
                <div class="form-group">
                    <label for="nama">Gambar</label>
                    <input type="file" class="form-control" id="gambar" name="gambar" value="<?= set_value('gambar') ?>">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark mt-3">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>