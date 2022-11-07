<?php $index = 1; ?>

<?= $this->extend('templates'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Supplier</h6>
        </div>
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success ml-3 mr-3" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Id Supplier</th>
                            <th>Nama Supplier</th>
                            <th>Alamat Supplier</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($supplier as $sup) : ?>
                            <tr class="text-center">
                                <td><?= $index; ?></td>
                                <td><?= $sup['id_supplier']; ?></td>
                                <td><?= $sup['nama_supplier']; ?></td>
                                <td><?= $sup['alamat_supplier']; ?></td>
                                <td>
                                    <form action="/data_supplier/delete/<?= $sup['id_supplier'] ?>" method="post">
                                        <a href="/data_supplier/edit/<?= $sup['id_supplier'] ?>" class="btn btn-warning">Edit</a>
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="submit" class="btn btn-danger btn-delete" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            <?php $index++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <a href="/data_supplier/create" class="btn btn-primary">Tambah Data Supplier</a>
            </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>