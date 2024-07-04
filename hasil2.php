<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama_gedung = $_POST["nama_gedung"];
  $lantai = $_POST["nama_lantai"];
  $nama_ruang = $_POST["nama_ruang"];
  $kode_ruang = $_POST["kode_ruang"];
  $kapasitas_jalur = $_POST["kapasitas_jalur"];
  $keterangan = $_POST["keterangan"];

  echo "Nama Gedung: $nama_gedung<br>";
  echo "Lantai: $lantai<br>";
  echo "Nama Ruang: $nama_ruang<br>";
  echo "Kode Ruang: $kode_ruang<br>";
  echo "Kapasitasjalur: $kapasitas_jalur<br>";
  echo "keterangan: $keterangan<br>";
}
?>