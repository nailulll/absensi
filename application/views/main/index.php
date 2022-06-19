<div class="container" style="margin-top: 100px">
	<h2><?= $subtitle; ?></h2>
	<?= $this->session->flashdata('message') ?>
	<a href="<?= base_url('main/add') ?>" class="my-3 btn btn-dark">Tambah Karyawan</a>
	<table class="table" id="id">
		<thead>
			<tr>
				<th scope="col">#</th>
				<th scope="col">Nama</th>
				<th scope="col">Email</th>
				<th scope="col">Jabatan</th>
				<th scope="col">Aksi</th>
			</tr>
		</thead>
		<tbody>
			<?php $i = 1;
			foreach ($karyawan as $data) : ?>
				<tr>
					<th scope="row"><?= $i++; ?></th>
					<td><?= $data['nama']; ?></td>
					<td><?= $data['email']; ?></td>
					<td><?= $data['jabatan']; ?></td>
					<td>
						<a href="<?= base_url('main/edit/' . $data['id']) ?>" class="btn btn-dark">Edit</a>
						<a href="<?= base_url('main/see/' . $data['id']) ?>" class="btn btn-primary">Lihat</a>
						<a href="<?= base_url('main/delete/' . $data['id']) ?>" onclick="return confirm('Apakah anda ingin menghapus?');" class="btn btn-danger">Hapus</a>
					</td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>