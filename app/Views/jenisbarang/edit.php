<?= $this->extend('templates'); ?>
<?= $this->section('content'); ?>
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Jenis Barang</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">


                <div class="body">

                    <form action="<?= site_url('jenisbarang/' . $kategori->id_kategori); ?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name="_method" value="PUT">

                        <label for="">Jenis Barang</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="jenis_barang" value="<?= $kategori->jenis_barang; ?>" class="form-control" required />
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