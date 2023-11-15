<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4>Daftar Jurusan</h4>
                <a href="<?= base_url("jurusan/tambah") ?>" class="btn btn-info btn-sm">Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Jurusan</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($jurusan as $key => $item) : ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $item['jurusan'] ?></td>
                                    <td>
                                        <a href="<?= base_url("jurusan/ubah/") . $item['kode'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="<?= base_url("jurusan/hapus/") . $item['kode'] ?>" class="btn btn-danger btn-sm">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>