<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
  <div class="card-body">
        <form action="<?= base_url('mahasiswa/ubah').'/'.$item->nik?>" method="post">
          <div class="form-group">
            <label for="">Nama Lengkap</label>
            <input type="text" class="form-control" name="nama" aria-describedby="helpId" placeholder="nama">
          </div>
          <div class="form-group">
            <label for="">Kontak</label>
            <input type="text" class="form-control" name="kontak" aria-describedby="helpId" placeholder="Input Kontak">
          </div>
          <div class="form-group">
            <label for="">Email</label>
            <input type="email" class="form-control" name="email" aria-describedby="helpId" placeholder="input email">
          </div>
          <div class="form-group">
            <label for="">Alamat</label>
            <textarea class="form-control" name="alamat" rows="3"><?= $item->alamat?></textarea>
          </div>
          <button type="submit" class="btn btn-primary btn-sm" name="ubah">Simpan</button>
        </form>
      </div>
<?= $this->endSection() ?>