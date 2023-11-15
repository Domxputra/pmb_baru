<?= $this->extend('layout') ?>
  <?= $this->section('content') ?>
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <div class="d-flex justify-content-between">
            <h4>Daftar Alamat Tinggal</h4>
            <a href="<?= base_url('alamat/tambah') ?>" class="btn btn-primary btn-sm"><i class="fa fa-plus" aria-hidden="true"></i> Tambah</a>
          </div>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-striped table-bordered table-hover">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Jalan</th>
                  <th>Kelurahan</th>
                  <th>RT/RW</th>
                  <th>Kode Pos</th>
                  <th><i class="fa fa-cog" aria-hidden="true"></i></th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($alamat_tinggal as $key => $item) : ?>
                  <tr>
                    <td>
                      <?= $key + 1 ?></td>
                    <td><?= $item['jalan'] ?></td>
                    <td><?= $item['kelurahan'] ?></td>
                    <td><?= $item['rt_rw'] ?></td>
                    <td><?= $item['kode_pos'] ?></td>
                    <td>
                    <a href="<?= base_url('alamat/ubah') . $item['kode'] ?>" class="btn btn-warning btn-sm"><i class="fas fa-edit" aria-hidden="true"></i></a>
                    <a href="<?= base_url('alamat/hapus') . $item['kode'] ?> class="btn btn-danger btn-sm"><i class="fas fa-trash" aria-hidden="true"></i></a>
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
  