<?= $this->extend('templates'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah Data Supplier</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="body">
                    <form method="POST" action="/data_supplier/save" enctype="multipart/form-data">
                        <label for="">Kode Supplier</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="kode_supplier" id="" class="form-control" value="<?= ($last_supplier === null) ? 'SUP-1' : 'SUP-' . ($last_supplier->id_supplier + 1) ?>" required readonly />
                            </div>
                        </div>
                        <label for="">Nama Supplier</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="nama_supplier" id="" class="form-control" required />
                            </div>
                        </div>
                        <label for="">Alamat</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="alamat_supplier" id="" class="form-control" required />
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>