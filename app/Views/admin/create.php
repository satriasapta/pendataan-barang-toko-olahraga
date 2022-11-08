<?= $this->extend('templates'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Tambah User</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <div class="body">
                    <form method="POST" enctype="multipart/form-data" action="/data_admin/save">
                        <label for="">Nama</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="nama_admin" class="form-control" required />
                            </div>
                        </div>
                        <label for="">Username</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="text" name="username" class="form-control" required />
                            </div>
                        </div>
                        <label for="">Password</label>
                        <div class="form-group">
                            <div class="form-line">
                                <input type="password" name="password" class="form-control" required />
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