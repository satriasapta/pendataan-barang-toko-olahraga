<?php

$index = 1;

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Laporan_Barang_Keluar.xls");
?>

<body>
    <center>
        <h2>Laporan Barang Keluar</h2>
    </center>

    <table border="1">
        <thead>
            <tr>
                <th>No</th>
                <th>Kode Transaksi</th>
                <th>Tanggal Keluar</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Jumlah Keluar</th>
                <th>Tujuan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($barangKeluar as $barang) : ?>
                <tr>
                    <td><?= $index ?></td>
                    <td><?= $barang['kode_transaksi'] ?></td>
                    <td><?= $barang['tanggal_keluar'] ?></td>
                    <td><?= $barang['id_barang'] ?></td>
                    <td><?= $barang['nama_barang'] ?></td>
                    <td><?= $barang['jumlah_keluar'] ?></td>
                    <td><?= $barang['tujuan'] ?></td>
                </tr>
                <?php $index++; ?>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>