<?= $this->extend('templates'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Barang</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="body">
                    <form method="POST" action="/barang/save" enctype="multipart/form-data">
                        <label for="">Kode Barang</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="kode_barang" class="form-control" value="<?= ($last_barang === null) ? 'BAR-1' : 'BAR-' . ($last_barang->id_barang + 1); ?>" required readonly />
                            </div>
                        </div>
                        <label for="">Nama Barang</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="nama_barang" class="form-control" required />
                            </div>
                        </div>
                        <label for="">Jenis Barang</label>
                        <div class="form-group">
                            <div class="form-line">
                                <select name="id_kategori" class="form-control" required>
                                    <?php foreach ($dataKategori as $kategori) : ?>
                                        <option value="<?= $kategori['id_kategori']; ?>"><?= $kategori['jenis_barang']; ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <label for="">Jumlah</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="jumlah_barang" class="form-control" id="jumlah" readonly value=0 required />
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