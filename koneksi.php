<?php
$host = 'sql.freedb.tech';
$nama_db = 'freedb_demo_user';
$pengguna = 'freedb_demo_app';
$sandi = 'Kontol00';

$koneksi = mysqli_connect($host, $pengguna, $sandi, $nama_db);

if (!$koneksi) {
  die("❌ Gagal: " . mysqli_connect_error());
}
echo "✅ BERHASIL TERHUBUNG KE DATABASE!";
?>