<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h4>Tambah Vendor</h4>
        </div>
      </div>
      <div class="card-body">
        <form action="" method="post">
          <div class="form-group">
            <label for="">Jalan</label>
            <input type="text" 
              class="form-control" name="jalan" aria-describedby="helpId" placeholder="nama">
          </div>
          <div class="form-group">
            <label for="">Kelurahan</label>
            <input type="text" 
              class="form-control" name="kelurahan" aria-describedby="helpId" placeholder="Input Kontak">
          </div>
          <div class="form-group">
            <label for="">RT/Rw</label>
            <input type="email" 
              class="form-control" name="rt_rw" aria-describedby="helpId" placeholder="input email">
          </div>
          <div class="form-group">
            <label for="">kode Pos</label>
            <input class="form-control" name="kode_pos" aria-describedby="helpId" placeholder="Kode pos">
          </div>
          <button type="submit" class="btn btn-primary btn-sm" name="ubah">Simpan</button>
        </form>
      </div>
      <!-- /.panel-body -->
    </div>

  </div>
  <?= $this->endSection() ?>