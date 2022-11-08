<?php $index = 1; ?>


<?= $this->extend('templates'); ?>
<?= $this->section('content'); ?>

<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Admin</h6>
        </div>
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert alert-success m-3" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>ID Admin</th>
                            <th>Nama</th>
                            <th>Username</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($admin as $a) : ?>
                            <tr class="text-center">
                                <td><?= $index ?></td>
                                <td><?= $a['id_admin']; ?></td>
                                <td><?= $a['nama_admin']; ?></td>
                                <td><?= $a['username']; ?></td>
                                <td><?= $a['password']; ?></td>
                            </tr>
                            <?php $index++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <a href="<?= site_url('/data_admin/create'); ?>" class="btn btn-primary">Tambah Data Admin</a>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>