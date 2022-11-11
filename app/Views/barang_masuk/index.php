<?php $index = 1 ?>
<?= $this->extend('templates'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success m-3" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
        <div class="row">
            <div class="col"></div>
            <div class="col text-right m-3">
                <a href="/export_barang_masuk" class="btn btn-primary">Export Laporan Transaksi</a>
            </div>
        </div>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Barang Masuk</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Kode Transaksi</th>
                            <th>Tanggal Masuk</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Supplier</th>
                            <th>Jumlah Masuk</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($barangMasuk as $barang) : ?>
                            <tr class="text-center">
                                <td><?= $index ?></td>
                                <td><?= $barang['kode_transaksi'] ?></td>
                                <td><?= $barang['tanggal_masuk'] ?></td>
                                <td><?= $barang['kode_barang'] ?></td>
                                <td><?= $barang['nama_barang'] ?></td>
                                <td><?= $barang['nama_supplier'] ?></td>
                                <td><?= $barang['jumlah_masuk'] ?></td>
                                <td>
                                    <form action="/barang_masuk/delete/<?= $barang['id_transaksi'] ?>" method="post">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="submit" class="btn btn-danger btn-delete" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            <?php $index++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <a href="/barang_masuk/create" class="btn btn-primary">Tambah</a>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>