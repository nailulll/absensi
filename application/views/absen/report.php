<div class="container" style="margin-top: 100px">
    <div class="row">
        <div class="col-lg-6">
            <h6><?= $subtitle; ?></h6>
            <a href="<?= base_url('absensi') ?>" class="my-3 btn btn-dark">Kembali</a>
            <table class="table" id="absen">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Waktu</th>
                        <th scope="col">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1;
                    foreach ($report as $data) : ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $data['tanggalAbsensi']; ?></td>
                            <td><?= $data['waktu']; ?></td>
                            <td><?= $data['keterangan']; ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>