<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <div class="d-flex justify-content-between">
          <h4>Ubah Orang Tua</h4>
        </div>
      </div>
      <div class="card-body">
        <form action="" method="post">
          <div class="form-group">
            <label for="">Nama Ayah</label>
            <input type="text" 
              class="form-control" name="nama_ayah" aria-describedby="helpId" placeholder="nama">
          </div>
          <div class="form-group">
            <label for="">Nik Ayah</label>
            <input type="text" 
              class="form-control" name="nik_ayah" aria-describedby="helpId" placeholder="Input Kontak">
          </div>
          <div class="form-group">
            <label for="">Nama Ibu</label>
            <input type="text" 
              class="form-control" name="nama_ibu" aria-describedby="helpId" placeholder="input email">
          </div>
          <div class="form-group">
            <label for="">Nik Ibu</label>
            <input class="form-control" name="nik_ibu" aria-describedby="helpId" placeholder="Kode pos">
          </div>
          <button type="submit" class="btn btn-primary btn-sm" name="ubah">Simpan</button>
        </form>
      </div>
      <!-- /.panel-body -->
    </div>

  </div>
</div>
<?= $this->endSection() ?>