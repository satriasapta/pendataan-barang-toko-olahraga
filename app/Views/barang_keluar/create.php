<?= $this->extend('templates'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Barang Keluar</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="body">
                    <form method="POST" action="/barang_keluar/save" enctype="multipart/form-data">
                        <label for="">Kode Transaksi</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="kode_transaksi" class="form-control" id="kode_transaksi" value="<?= ($last_transaksi === null) ? 'TRXK-1' : 'TRXK-' . ($last_transaksi->id_transaksi + 1); ?>" required readonly />
                            </div>
                        </div>
                        <label for="">Tanggal Keluar</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="date" name="tanggal_keluar" class="form-control" id="tanggal_keluar" required />
                            </div>
                        </div>
                        <label for="">Barang</label>
                        <div class="form-group">
                            <div class="form-line">
                                <select name="id_barang" class="form-control" required>
                                    <?php foreach ($barang as $b) : ?>
                                        <option value="<?= $b['id_barang'] ?>"><?= $b['nama_barang'] ?></option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                        </div>
                        <label for="">Jumlah</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="number" name="jumlah_keluar" id="jumlah_keluar" class="form-control" required />
                            </div>
                        </div>
                        <label for="">Tujuan</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="tujuan" class="form-control" id="tujuan" required />
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