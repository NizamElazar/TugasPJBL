<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php session_start();?>
<style>
    .table td, .table th {
    border: none;
}
</style>
<body>
<div class="container my-4 bg-dark p-4 rounded">
<div class="card card-default bg-dark">
<div class="card card-body">
<form action="" method="post">
    <table class="table">
        <h2 style="text-align: center;">Formulir Pendataan siswa</h2>
        <hr>
        </div>
        <tr>
            <td class="fs-4">NIS</td>
            <td><input type="text" name="nis" required placeholder="Masukkan NIS..." maxlength="10" class="form-control"></td>
            <td></td>
        </tr>
        <tr>
            <td class="fs-4">Nama</td>
            <td><input type="text" name="nama" required placeholder="Masukkan Nama..." class="form-control"></td>
            <td></td>
        </tr>
        <tr>
            <td class="fs-4">Kelas</td>
            <td><select name="kelas" class="form-select">
            <option value="X">X</option><option value="XI">XI</option><option value="XII">XII</option></select></td>
            <td></td>
        </tr>
        <tr>
            <td class="fs-4">Jenis Kelamin</td>
            <td class="fs-5"><input type="radio" name="gen" value="1" class="form-check-input"> Laki-Laki</td>
            <td></td>
        </tr>
        <tr>
            <td>&emsp;</td><td class="fs-5"><input type="radio" name="gen" value="2" class="form-check-input"> Perempuan</td>
            <td></td>
        </tr>
        <tr>
            <td class="fs-4">Tanggal Lahir</td>
            <td><input type="date" name="tgl" class="form-control"></td>
            <td></td>
        </tr>
        <tr>
            <td class="fs-4">Alamat</td>
            <td><textarea name="alamat" id="" class="form-control"></textarea></td>
            <td>&emsp;</td>
        </tr>
        <tr>
            <td class="fs-4">Kota</td>
            <td><input type="text" name="kota" placeholder="Masukkan Nama Kota..." class="form-control"></td>
            <td>&emsp;</td>
        </tr>
        <tr>
            <td style="border: none;"><br>&ensp;<input type="submit" name="submit" value="Kirim" class="btn btn-md btn-primary">&emsp;
            <a href="hasil.php" class="btn btn-md btn-primary">Cancel</a><td></td><td></td>
        </tr>
        <tr>
            <td></td><td></td><td></td>
        </tr>
<?php
        error_reporting(0);
        ini_set('display_errors', 0);
        include("koneksi.php");
        $nis= $_POST['nis'];
        $nama= $_POST['nama'];
        $kelas = $_POST['kelas'];
        $tgl = $_POST['tgl'];
        $alamat = $_POST['alamat'];
        $kota = $_POST['kota'];
        $gen = $_POST['gen'];
        $kirim= $_POST['submit'];
        $query="INSERT INTO tb_siswa(nis,nama,kelas,ttl,alamat,kota,jk) VALUES ('$nis','$nama','$kelas','$tgl','$alamat','$kota','$gen')";
?>
    <tr>
        <td><?php if ($kirim) {
            $result = mysqli_query($con,$query);
            echo "Data Berhasil Disimpan ";
            echo "<a href='admin.php'>Lihat Data</a>";
        } ?></td><td></td><td></td>
    </tr>
    </table>
    </form>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>