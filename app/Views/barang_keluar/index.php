<?php $index = 1 ?>
<?= $this->extend('templates'); ?>

<?= $this->section('content'); ?>
<div class="container-fluid">
    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <?php if (session()->getFlashdata('pesan')) : ?>
            <div class="alert <?= (session()->getFlashdata('pesan') === 'Gagal menambahkan data transaksi karena stok tidak memenuhi. Silakan cek stok barang pada menu Data Barang !' ? 'alert-danger' : 'alert-success') ?> m-3" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
            </div>
        <?php endif; ?>
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Barang Keluar</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr class="text-center">
                            <th>No</th>
                            <th>Id Transaksi</th>
                            <th>Tanggal Keluar</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Jumlah Keluar</th>
                            <th>Tujuan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($barangKeluar as $barang) : ?>
                            <tr class="text-center">
                                <td><?= $index ?></td>
                                <td><?= $barang['id_transaksi'] ?></td>
                                <td><?= $barang['tanggal_keluar'] ?></td>
                                <td><?= $barang['id_barang'] ?></td>
                                <td><?= $barang['nama_barang'] ?></td>
                                <td><?= $barang['jumlah_keluar'] ?></td>
                                <td><?= $barang['tujuan'] ?></td>
                                <td>
                                    <form action="/barang_keluar/delete/<?= $barang['id_transaksi'] ?>" method="post">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button data-bs-toggle="tooltip" data-bs-placement="top" title="Delete" type="submit" class="btn btn-danger btn-delete" onclick="return confirm('Apakah anda yakin ingin menghapus data ini?');">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            <?php $index++; ?>
                        <?php endforeach; ?>
                    </tbody>
                </table>
                <a href="/barang_keluar/create" class="btn btn-primary">Tambah</a>
                </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection(); ?>