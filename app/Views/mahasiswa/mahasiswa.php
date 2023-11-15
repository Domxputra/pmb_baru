<?= $this->extend('layout') ?>
  <?= $this->section('content') ?>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="d-flex justify-content-between">
            <h4>Daftar Mahasiswa</h4>
            <a href="<?= base_url('mahasiswa/tambah') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</a>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Lengkap</th>
                  <th>Tanggal Lahir</th>
                  <th>Jenis Kelamin</th>
                  <th>Asal Sma/Smk/Stm</th>
                  <th>Email</th>
                  <th>No HP</th>
                  <th>Sumber Biaya</th>
                  <th>Informasi</th>
                  <th><i class="fa fa-cog" aria-hidden="true"></i></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($mahasiswa as $key => $item) : ?>
                  <tr>
                    <td>
                      <?= $key + 1 ?></td>
                    <td><?= $item['nama_lengkap'] ?></td>
                    <td><?= $item['tanggal_lahir'] ?></td>
                    <td><?= $item['jenis_kelamin'] ?></td>
                    <td><?= $item['asal_sma'] ?></td>
                    <td><?= $item['email_mhs_baru'] ?></td>
                    <td><?= $item['no_tlp'] ?></td>
                    <td><?= $item['sumber_biaya'] ?></td>
                    <td><?= $item['informasi'] ?></td>
                    <td>
                    <a href="<?= base_url("orangtua/ubah/") . $item['nik'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    <a href="<?= base_url("orangtua/ubah/") . $item['nik'] ?>" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                  </tr>
                <?php endforeach ?>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>

  </div>
  <?= $this->endSection() ?>