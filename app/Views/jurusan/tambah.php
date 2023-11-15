<?= $this->extend('layout') ?>
<?= $this->section('content') ?>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Tambah Jurusan</h4>
            </div>
            <form action="" method="post">
                <div class="card-body">
                    <div class="form-group">
                        <label for="">Jurusan</label>
                        <input type="text" class="form-control" name="jurusan" placeholder="masukkan jurusan">
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                </div>
            </form>
        </div>
    </div>

<?= $this->endSection() ?>