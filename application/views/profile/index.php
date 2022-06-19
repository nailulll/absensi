<div class="container" style="margin-top: 100px;">
    <h2><?= $subtitle; ?></h2>
    <?= $this->session->flashdata('message'); ?>
    <div class="row">

        <div class="col-md-6">
            <div class="card">
                <div class="card-body text-center">
                    <img src="<?= base_url('assets/profile/' . cekLogin()['gambar']) ?>" class="img-fluid text-center rounded-circle" width="256">
                </div>
                <div class="card-footer mt-3">
                    <table class="table">
                        <tr>
                            <td>
                                <h4 class="card-title">Nama</h4>
                            </td>
                            <td>
                                <h4 class="card-title"><?= cekLogin()['nama'] ?></h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4 class="card-title">Email</h4>
                            </td>
                            <td>
                                <h4 class="card-title"><?= cekLogin()['email'] ?></h4>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <h4 class="card-title">Role</h4>
                            </td>
                            <td>
                                <h4 class="card-title"><?= cekLogin()['role'] ?></h4>
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Ubah Profile</h5>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('profile'); ?>" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <labe>Email</label>
                                <input type="email" class="form-control" value="<?= cekLogin()['email'] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <labe>Nama</label>
                                <input type="text" class="form-control" name="nama" value="<?= cekLogin()['nama'] ?>">
                                <?= form_error('nama', '<small class="text-danger">', '</small>') ?>
                        </div>
                        <div class="form-group">
                            <label>Peran</label>
                            <input type="text" class="form-control" value="<?= cekLogin()['role'] ?>" readonly>
                        </div>
                        <div class="form-group">
                            <label>Gambar</label>
                            <input type="file" class="form-control" name="image">
                        </div>
                        <div class="form-group mt-5">
                            <button class="btn btn-dark" type="submit">Ubah Profile</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>