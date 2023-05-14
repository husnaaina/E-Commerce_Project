<?php 
require_once 'dbkoneksi.php';
// tangkap iddel dari url
$delete = $_GET['iddel'];
// bikin query hapus data
$sql = "DELETE FROM pelanggan WHERE id=?";
$st = $dbh->prepare($sql);
$st->execute([$delete]);

header('location:../backend/data_produk.php');
?>