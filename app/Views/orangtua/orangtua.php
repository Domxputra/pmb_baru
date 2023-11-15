<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4>Daftar Orang Tua</h4>
                <a href="<?= base_url("orangtua/tambah") ?>" class="btn btn-info btn-sm">Tambah</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Ayah</th>
                                <th>NIk Ayah</th>
                                <th>Nama Ibu</th>
                                <th>Nik Ibu</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($orangtua as $key => $item) : ?>
                                <tr>
                                    <td><?= $key + 1 ?></td>
                                    <td><?= $item['nama_ayah'] ?></td>
                                    <td><?= $item['nik_ayah'] ?></td>
                                    <td><?= $item['nama_ibu'] ?></td>
                                    <td><?= $item['nik_ibu'] ?></td>
                                    <td>
                                        <a href="<?= base_url("orangtua/ubah/") . $item['kode'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                        <a href="<?= base_url("orangtua/hapus/") . $item['kode'] ?>" class="btn btn-danger btn-sm">Hapus</a>
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