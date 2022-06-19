<div class="container" style="margin-top: 100px">
    <?= $this->session->flashdata('message') ?>
    <?php if ($this->session->userdata('role') == 'admin') : ?>
        <div class="row">
            <div class="col-lg-6">
                <h2><?= $subtitle ?> Tanggal: <?= date('d-m-Y') ?> </h2>
                <table class="table" id="id">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($karyawan as $data) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $data['nama']; ?></td>
                                <td>
                                    <a href="<?= base_url('absensi/ket/hadir/' . $data['id']) ?>" class="btn btn-dark" <?= cekAbsen($data['id']) ?>>Hadir</a>
                                    <a href="<?= base_url('absensi/ket/izin/' . $data['id']) ?>" class="btn btn-primary" <?= cekAbsen($data['id']) ?>>Izin</a>
                                    <a href="<?= base_url('absensi/ket/alpha/' . $data['id']) ?>" class="btn btn-danger" <?= cekAbsen($data['id']) ?>>Alpha</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-6">
                <h2>Keterangan</h2>
                <table class="table" id="absen">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Waktu</th>
                            <th scope="col">Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($absen as $data) : ?>
                            <tr>
                                <th scope="row"><?= $i++; ?></th>
                                <td><?= $data['nama']; ?></td>
                                <td><?= $data['waktu']; ?></td>
                                <td><?= $data['keterangan']; ?></td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    <?php else : ?>
        <div class="row">
            <div class="col-lg-6">
                <h2>Laporan Absen</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Hadir</th>
                            <th scope="col">Izin</th>
                            <th scope="col">Alpha</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?= $hadir; ?></td>
                            <td><?= $izin; ?></td>
                            <td><?= $alpha; ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-lg-6">
                <h2>Berdasarkan tanggal</h2>
                <form action="<?= base_url('absensi/report') ?>" method="post">
                    <div class="form-group">
                        <label for="tanggalAwal">Tanggal Awal</label>
                        <input type="date" class="form-control" id="tanggalAwal" name="tanggalAwal" required>
                    </div>
                    <div class="form-group">
                        <label for="tanggalAkhir">Tanggal Akhir</label>
                        <input type="date" class="form-control" id="tanggalAkhir" name="tanggalAkhir" required>
                    </div>
                    <div class="form-group">
                        <button class="btn btn-dark mt-2" type="submit">Lihat</button>
                    </div>
                </form>
            </div>
        </div>
    <?php endif; ?>
</div>