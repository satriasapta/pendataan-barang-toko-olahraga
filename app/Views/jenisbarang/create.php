<?= $this->extend('templates'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Jenis Barang</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="body">
                    <form action="<?= site_url('jenisbarang'); ?>" method="POST" enctype="multipart/form-data">
                        <label for="">Kode Jenis Barang</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="kode_jenis" class="form-control" value="<?= ($last_kategori === null) ? 'JEN-1' : 'JEN-' . ($last_kategori->id_kategori + 1); ?>" required readonly />
                            </div>
                        </div>
                        <label for="">Jenis Barang</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="jenis_barang" class="form-control" required />
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>