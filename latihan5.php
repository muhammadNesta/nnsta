<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Ruang</title>
    <style>
        form {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<h2>Tambah Data Ruang</h2>
<form method="post" action="hasil2.php">
    <label for="nama_gedung">Nama Gedung:</label>
    <select id="nama_gedung" name="nama_gedung" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
    <br><br>
    <label for="nama_lantai">Nama Lantai:</label>
    <select id="nama_lantai" name="nama_lantai" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
    <br><br>
    <label for="kode_ruang">Kode Ruang:</label>
    <input type="text" id="kode_ruang" name="kode_ruang" required>
    <br><br>
    <label for="nama_ruang">Nama Ruang:</label>
    <input type="text" id="nama_ruang" name="nama_ruang" required>
    <br><br>
    <label for="kapasitas_jalur">Kapasitas Jalur:</label>
    <input type="number" id="kapasitas_jalur" name="kapasitas_jalur" required>
    <br><br>
    <label for="keterangan">Keterangan:</label>
    <textarea id="keterangan" name="keterangan"></textarea>
    <br><br>
    <button type="submit">Simpan</button>
    <button type="reset">Tutup</button>
</form>

</body>
</html>