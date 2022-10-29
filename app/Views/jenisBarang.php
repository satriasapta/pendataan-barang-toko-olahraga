<?= $this->extend('templates'); ?>
<?= $this->section('content'); ?>


<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Jenis Barang</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Jenis Barang</th>

                            <th>Pengaturan</th>

                        </tr>
                    </thead>


                    <tbody>

                        <?php foreach ($jenisbarang as $key => $value) : ?>

                            <tr>
                                <td><?= $key + 1; ?></td>
                                <td><?= $value->jenis_barang; ?></td>
                                <td>
                                    <a href="" class="btn btn-success">Ubah</a>
                                    <a onclick="return confirm('Apakah anda yakin akan menghapus data ini?')" href="" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>

                    </tbody>
                </table>
                <a href="?page=jenisbarang&aksi=tambahjenis" class="btn btn-primary">Tambah Jenis Barang</a>
                </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>