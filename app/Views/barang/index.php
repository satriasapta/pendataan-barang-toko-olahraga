<?= $this->extend('templates'); ?>
<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">


    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Stok Barang</h6>
        </div>
        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">x</button>
                    <b>Success !</b>
                    <?= session()->getFlashdata('success'); ?>
                </div>
            </div>
        <?php endif ?>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Barang</th>
                            <th>Jenis Barang</th>

                            <th>Jumlah Barang</th>
                            <th>Pengaturan</th>

                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($barang as $key => $value) : ?>
                            <tr>
                                <td><?= $key + 1; ?></td>
                                <td><?= $value['nama_barang']; ?></td>
                                <td><?= $value['jenis_barang']; ?></td>
                                <td><?= $value['jumlah_barang']; ?></td>
                                <td>
                                    <a href="<?= site_url('barang/edit/' . $value['id_barang']); ?>" class="btn btn-success">Ubah</a>
                                    <form action="<?= site_url('barang/' . $value['id_barang']); ?>" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin hapus data?')">
                                        <input type="hidden" name="_method" value="delete">
                                        <button class="btn btn-danger">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <a href="<?= site_url('barang/create'); ?>" class="btn btn-primary">Tambah Data Barang</a>
                </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>