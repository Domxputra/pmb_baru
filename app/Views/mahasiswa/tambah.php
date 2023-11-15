<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Mahasiswa</h4>
            </div>
            <form action="" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Nama Lengkap</label>
                        <input type="text" class="form-control" name="nama_lengkap" placeholder="masukkan Nama Lengkap">
                    </div>
                    <div class="form-group">
                        <label for="">Tangga Lahir</label>
                        <input type="text" class="form-control" name="tanggal_lahir" placeholder="masukkan Tanggal Lahir">
                    </div>
                    <div class="form-group">
                        <label for="">Jenis Kelamin</label>
                        <input type="text" class="form-control" name="jenis_kelamin" placeholder="masukkan Jenis Kelamin">
                    </div>
                    <div class="form-group">
                        <label for="">Asal SMA/SMK/STM</label>
                        <input type="text" class="form-control" name="asal_sma" placeholder="Masukan Asal Sekolah">
                    </div>
                    <div class="form-group">
                        <label for="">Email</label>
                        <input type="text" class="form-control" name="email_mhs_baru" placeholder="Masukan Email">
                    </div>
                    <div class="form-group">
                        <label for="">No Telepon</label>
                        <input type="text" class="form-control" name="no_tlp" placeholder="No Telepon">
                    </div>
                    <div class="form-group">
                        <label for="">Sumber Biaya</label>
                        <input type="text" class="form-control" name="sumber_biaya" placeholder="Sumber Biaya">
                    </div>
                    <div class="form-group">
                        <label for="">Informasi</label>
                        <input type="text" class="form-control" name="informasi" placeholder="Informasi">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>

<?= $this->endSection() ?>
