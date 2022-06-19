<div class="container" style="margin: 100px auto;">
    <h2><?= $subtitle; ?></h2>
    <a href="<?= base_url('main') ?>" class="my-3 btn btn-dark">Kembali</a>
    <div class="row">
        <div class="col-lg-6">

            <form method="post" action="<?= base_url('main/editData') ?>">
                <input type="hidden" name="id" value="<?= $karyawan['id'] ?>">
                <div class="form-group">
                    <label for="nama">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="<?= $karyawan['nama'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="nama">Email</label>
                    <input type="text" class="form-control" id="email" name="email" value="<?= $karyawan['email'] ?>" readonly>
                </div>
                <div class="form-group">
                    <label for="jabatan">Jabatan</label>
                    <select name="jabatan" id="jabatan" class="form-control" required>
                        <?php foreach ($jabatan as $data) : ?>
                            <?php if ($data == $karyawan['jabatan']) : ?>
                                <option value="<?= $data; ?>" selected><?= $data; ?></option>
                            <?php else : ?>
                                <option value="<?= $data; ?>"><?= $data; ?></option>
                            <?php endif; ?>
                        <?php endforeach; ?>
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-dark mt-3">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>