<?php include_once 'header.php'; ?>
<?php include_once './assets/configuration/konek.php' ?>

    <!-- Custom style for this template -->
    <link rel="stylesheet" href="dashboard.css">
    <!-- Custom styles for this template -->
  <link href="carousel.css" rel="stylesheet">

  </head>
  <body>
    <?php include_once 'navbar.php'; ?>


    <div class="container-fluid">
        <div class="row">            

            <div class="col-sm-12">
                <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                    
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="images/header.jpg" alt="...">
                    </div>
                    <marquee>SELAMAT DATANG DI APLIKASI PENCARIAN DATA ALUMNI STIKES GRAHA MEDIKA KOTAMOBAGU</marquee>
                </div>

                </div>

                <!-- <h1 class="page-header">Dashboard</h1> -->

          <div id="loginbox" style="margin-top: ;" class="mainbox col-md-12">
            
                </form>
                <!-- <a class="btn btn-success" href="?module=siswa_input">> </a> -->

              </div>
              <div style="padding-top: 10px" class="panel-body">
                <br>

                <center>
<table  border='1' Width='800'>  
<tr>
    <th> Nama </th>
    <th> Jenis Kelamin </th>
    <th> No Hp </th>
    <th> Email </th>
    <th> Prog Study </th>
    <th> Asal Sekolah </th>
    <th> Tahun Lulus </th>
    <th> Melanjutkan Study </th>
    <th> Sudah Bekerja </th>
    
</tr>
</center>
<?php  
// Perintah untuk menampilkan data

$hasil = $konek -> query("SELECT * FROM form") ;

// perintah untuk membaca dan mengambil data dalam bentuk array
while ($data = mysqli_fetch_array($hasil)){
 echo "    
        <tr>
        <td>".$data['nama_lengkap']."</td>
        <td>".$data['jenis_kelamin']."</td>
        <td>".$data['no_hp']."</td>
        <td>".$data['alamat_email']."</td>
        <td>".$data['prog_study']."</td>
        <td>".$data['asal_sekolah']."</td>
        <td>".$data['tahun_lulus']."</td>
        <td>".$data['after_lulus']."</td>
        <td>".$data['sudah_bekerja']."</td>
        </tr> 
        ";
        
}

?>
</table>
                  

              </div>
            </div>
          </div>

            </div>

        </div>
    </div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>