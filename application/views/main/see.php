<div class="container" style="margin-top: 100px ;">
    <h2><?= $subtitle; ?></h2>
    <a href="<?= base_url('main') ?>" class="my-3 btn btn-dark">Kembali</a>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body text-center">
                <img src="<?= base_url('assets/profile/' . $karyawan['gambar']); ?>" class="img-fluid text-center rounded-circle" width="256">
            </div>
            <div class="card-footer mt-3">
                <table class="table">
                    <tr>
                        <td>
                            <h4 class="card-title">Nama</h4>
                        </td>
                        <td>
                            <h4 class="card-title"><?= $karyawan['nama']; ?></h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4 class="card-title">Email</h4>
                        </td>
                        <td>
                            <h4 class="card-title"><?= $karyawan['email']; ?></h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4 class="card-title">Status</h4>
                        </td>
                        <td>
                            <h4 class="card-title"><?= $karyawan['jabatan']; ?></h4>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <h4 class="card-title">Jenis Kelamin</h4>
                        </td>
                        <td>
                            <h4 class="card-title"><?= $karyawan['jenisKelamin'] ?></h4>
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>