<?php

$index = 1;

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan_Barang_Masuk.xls");
?>

<body>
    <center>
        <h2>Laporan Barang Masuk</h2>
    </center>
    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Transaksi</th>
                <th>Tanggal Masuk</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Supplier</th>
                <th>Jumlah Masuk</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($barangMasuk as $barang) : ?>
                <tr>
                    <td><?= $index ?></td>
                    <td><?= $barang['kode_transaksi'] ?></td>
                    <td><?= $barang['tanggal_masuk'] ?></td>
                    <td><?= $barang['kode_barang'] ?></td>
                    <td><?= $barang['nama_barang'] ?></td>
                    <td><?= $barang['nama_supplier'] ?></td>
                    <td><?= $barang['jumlah_masuk'] ?></td>
                </tr>
                <?php $index++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>