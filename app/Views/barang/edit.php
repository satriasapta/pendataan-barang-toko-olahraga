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
                    <form method="POST" action="<?= site_url('barang/' . $barang->id_barang); ?>" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT">
                        <label for="">Nama Barang</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="nama_barang" class="form-control" value="<?= $barang->nama_barang; ?>" required />
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