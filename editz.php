<?php
session_start();
include("koneksi.php");
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
$ttl = $_POST['ttl'];
$alamat = $_POST['alamat'];
$kota = $_POST['kota'];
$jk = $_POST['jk'];
$hobi = $_POST['hobi'];
$color = $_POST['eskul'];
foreach ($color as $a) {
     $color=$a;
    }
$query="UPDATE tb_siswa SET nama='$nama', kelas='$kelas', ttl='$ttl', alamat='$alamat', kota='$kota', jk='$jk', hobi='$hobi', eskul='$a' WHERE nis='$nis';";
$result=mysqli_query($con,$query);
if ($result) {
    header('location:admin.php');
}else{
    echo "Gagal update data";
}
?>