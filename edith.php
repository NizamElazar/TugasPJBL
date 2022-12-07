<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<?php
session_start();
include("koneksi.php");
$nis= $_GET['nis'];
$query="SELECT * FROM tb_siswa WHERE nis='$nis'";
$result=mysqli_query($con,$query);
$data=mysqli_fetch_array($result);
?>
<div class="container my-4 rounded">
<div class="card card-default rounded">
<div class="card card-body rounded">
<form action="editz.php" method="post">
    <table class="table">
        <tr>
            <td>NIS</td>
            <td>:</td>
            <td><input type="text" class="form-control" name="nis" value="<?php echo $data['nis']; ?>" readonly="readonly"></td>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>" ></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><select name="kelas" class="form-select">
            <option value="X">X</option><option value="XI">XI</option></select>
            </td>
            <td>TTL</td>
            <td>:</td>
            <td><input type="date" name="ttl" class="form-control" value="<?php echo $data['ttl']; ?>"></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat']; ?>"></td>
            <td>Kota</td>
            <td>:</td>
            <td><input type="text" name="kota" class="form-control" value="<?php echo $data['kota']; ?>"></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><select name="jk" class="form-select">
            <option value="1">Laki-laki</option><option value="2">Perempuan</option></select></td>
            <TD></TD><TD></TD><TD></TD>
        </tr>
        
        <tr>
            <td style="border: none;">
                <br>
                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                <a href="admin.php" class="btn btn-primary">Cancel</a>
            </td>
        </tr>
    </table>
</form>
</div>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>