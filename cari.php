<?php
include "./assets/configuration/konek.php";

?>
<!DOCTYPE html>
<html>
<head>
        <title>data</title>
        <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">
</head>
<body>
<div class="container">
<form action="" method="get">
    <input type="text" class="form-control" name="cari" placeholder="cari data berdasarkan Nama alumni">
</form>
<table class="table table-bordered">
        <thead>
                <tr>
                        <th>id</th>
                        <th>Nama Lengkap</th>
                        <th>Jenis Kelamin</th>
                        <th>No Hp</th>
                        <th>Email</th>
                        <th>Prog. Study</th>
                        <th>Asal Sekolah</th>
                        <th>Thn. Lulus</th>
                        <th>Setelah Sekolah</th>
                        <th>Sudah Kerja</th>
                </tr>
        </thead>
<?php
        if(isset($_GET['cari'])){
              $cari = $_GET['cari'];
              $data = "select * from form where nama_lengkap like '%".$cari."%'";
              $data1 = $konek->query($data);
              $p = mysqli_fetch_array($data1);
                if ($p == TRUE) {
                  ?>
                    <tbody>
                        <tr>
                          <td><?php echo $p['0']; ?></td>
                          <td><?php echo $p['1']; ?></td>
                          <td><?php echo $p['2']; ?></td>
                          <td><?php echo $p['3']; ?></td>
                          <td><?php echo $p['4']; ?></td>
                          <td><?php echo $p['5']; ?></td>
                          <td><?php echo $p['6']; ?></td>
                          <td><?php echo $p['7']; ?></td>
                          <td><?php echo $p['8']; ?></td>
                          <td><?php echo $p['9']; ?></td>
                          <td><?php echo $p['10']; ?></td>
                        </tr>
                      </tbody>
                  <?php
                }else{
                  ?>
                    <tr>
                      <td>Data tidak ditemukan.</td>
                    </tr>
                  <?php
                }
                  
        }else{
                $quer = "select * from form";
                $query = $konek->query($quer);
                while ($t = mysqli_fetch_array($query)) {
                ?>
                <tbody>
                        <td><?php echo $t['id']; ?></td>
                        <td><?php echo $t['nama_lengkap']; ?></td>
                        <td><?php echo $t['jenis_kelamin']; ?></td>
                        <td><?php echo $t['no_hp']; ?></td>
                        <td><?php echo $t['alamat_email']; ?></td>
                        <td><?php echo $t['prog_study']; ?></td>
                        <td><?php echo $t['asal_sekolah']; ?></td>
                        <td><?php echo $t['tahun_lulus']; ?></td>
                        <td><?php echo $t['after_lulus']; ?></td>
                        <td><?php echo $t['sudah_bekerja'];?></td>
                </tbody>
                <?php
                }
        }
 ?>
</table>
</div>
</body>
</html>