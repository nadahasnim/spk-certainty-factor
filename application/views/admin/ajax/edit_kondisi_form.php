<input type="hidden" name="id_kondisi" value="<?= $kondisi['id_kondisi']; ?>">
<div class="form-group">
    <label for="namaKondisi">Nama Kondisi</label>
    <input id="namaKondisi" type="text" value="<?= $kondisi['nama_kondisi']; ?>" class="form-control" name="nama_kondisi" placeholder="Username" required>
</div>
<div class="form-group">
    <label for="bobot">Bobot</label>
    <input id="bobot" type="number" step="0.1" value="<?= $kondisi['bobot']; ?>" class="form-control" name="bobot" placeholder="bobot dalam decimal (contoh: 1.0, 0.4, dst)" required>
</div>