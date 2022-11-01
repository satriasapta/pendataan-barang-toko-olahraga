<form action="/barang/save" method="post">
    <label for="">Nama : </label>
    <input type="text" name="nama_barang" id="">
    <br><br>
    <label for="">Jenis Barang : </label>
    <select name="id_kategori" id="">
        <?php foreach ($dataKategori as $kategori) : ?>
            <option value="<?= $kategori['id_kategori']; ?>"><?= $kategori['jenis_barang']; ?></option>
        <?php endforeach; ?>
    </select>
    <br><br>
    <label for="">Jumlah : </label>
    <input type="number" name="jumlah_barang" id="" readonly value=0>
    <br><br>
    <button type="submit">Simpan</button>
</form>