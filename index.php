
<?php 
	include './assets/configuration/konek.php';
?>
<html>
<head>
	<title>Kiosioner Tracer Study</title>
	<link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">
</head>
<body>	
	<div class="container">
		<div class="modal-dialog">
	        <div class="modal-content">
	          <div class="modal-header">
	          	<?php
					if (isset($_POST['submit'])) {
						$nama_lengkap = $_POST['nama'];
						$jenis_kelamin = $_POST['jns_kelamin'];
						$asal_sekolah = $_POST['asalschool'];
						$kabupaten = $_POST['kab'];
						$provinsi = $_POST['prov'];
						$tempat_lahir = $_POST['tempatlahir'];
						$tgl_lahir = $_POST['tgllahir'];
						$no_hp = $_POST['nohp'];
						$email = $_POST['email'];
						$thn_lulus = $_POST['thnlulus'];
						$progstudi = $_POST['progstudi'];
						$wherestudi = $_POST['wherestudi'];
						$alasanstudi = $_POST['alasanstudi'];
						$wherekerjastudi = $_POST['wherekerjastudi'];
						$nameinstansi = $_POST['nameinstansi'];
						$alamatperusahaan = $_POST['alamatperusahaan'];
						$jabatan = $_POST['jabatan'];
						$whereinformasi = $_POST['whereinformasi'];
						$sesuai = $_POST['sesuai'];
						$puas = $_POST['puas'];
						$berhubungan = $_POST['berhubungan'];
						$check = $_POST['after'];
						$selected_after = "";
						foreach ($check as $afterLulus) 
						{
						  $selected_after .= $afterLulus . ", ";
						}

						$selected_afterLulus = substr($selected_after, 0, -2);

						$check1 = $_POST['check2'];
						$selected_after1 = "";
						foreach ($check1 as $afterLulus1) 
						{
						  $selected_after1 .= $afterLulus1 . ", ";
						}

						$selected_afterLulus1 = substr($selected_after1, 0, -2);
						

						$data = "insert into form(nama_lengkap, jenis_kelamin, asal_sekolah, provinsi, kabupaten, tempat_lahir, tgl_lahir, no_hp, alamat_email, tahun_lulus, prog_study, where_study, alasan_study, where_study_work, nama_instansi, alamat_perusahaan, jabatan, where_you_get, sesuai, puas, berhubungan, after_lulus, sudah_bekerja)values('$nama_lengkap', '$jenis_kelamin', '$asal_sekolah', '$provinsi', '$kabupaten', '$tempat_lahir', '$tgl_lahir', '$no_hp', '$email', '$thn_lulus', '$progstudi', '$wherestudi', '$alasanstudi', '$wherekerjastudi', '$nameinstansi', '$alamatperusahaan', '$jabatan', '$whereinformasi', '$sesuai', '$puas', '$berhubungan', '$selected_afterLulus', '$selected_afterLulus1')";

						$sendData = $konek->query($data);

						if ($sendData == true) {
						  ?>
						  	<font class="alert alert-success">Berhasil Input Data</font>
		                  <?php
						}else{
						   ?>
							<font class="alert alert-danger">Gagal Input Data!!</font>
		                  <?php
						}
					}
				?>
	          </div>
	          <div class="modal-body">
	          	<form method="post" action="">
					<div class="form-group">
						<label>Nama Lengkap</label>
						<input class="form-control" type="text" name="nama">
						<br>
						<label>Jenis Kelamin</label><br>
						<select class="form-control" name="jns_kelamin">
			              <option>Laki-Laki</option>
			              <option>Perempuan</option>
			            </select>
						<br>
						<label>Asal sma/smk</label>
						<input class="form-control" type="text" name="asalschool">
						<br>
						<label>Alamat</label>
						<input class="form-control" type="text" name="kab" placeholder="kabupaten"><br>
						<input class="form-control" type="text" name="prov" placeholder="provinsi"><br>
						<input class="form-control" type="text" name="tempatlahir" placeholder="tempat lahir"><br>
						<input class="form-control" type="date" name="tgllahir" placeholder="tanggal lahir">
						<br>
						<label>No hp</label>
						<input class="form-control" type="number" name="nohp">
						<br>
						<label>Alamat Email</label>
						<input class="form-control" type="email" name="email">
						<br>
						<label>Tahun Lulus</label>
						<input class="form-control" type="number" name="thnlulus" placeholder="tahun lulus">
						<br>
						<label>Prog Studi</label>
						<input class="form-control" type="text" name="progstudi">
						<br>
						<label>Question</label><br>
						<b>1. setelah lulus apakah saudara ingin ber sekolah lagi</b><br>
						<input type="checkbox" id="selectQuest1" name="after[]" onclick="getSelect()" value="yes"> <b>yes</b><br>
						<input type="checkbox" id="selectQuest2" name="after[]" onclick="getSelect()" value="no"> <b>no</b><br>
						<div id="answer" style="display: none">
							<br>
							<label>Dimana anda akan melanjutkan studi</label>
							<input class="form-control" type="text" name="wherestudi">
							<br>
							<label>Apa alasan anda melanjutkan studi</label>
							<input class="form-control" type="text" name="alasanstudi">
							<br>
							<label>Dimana anda ingin bekerja pada saat lulus</label>
							<input class="form-control" type="text" name="wherekerjastudi">
						</div>
						<br>
						<b>2. Sudah Bekerja</b><br>
						<input type="checkbox" id="selectWorkQuest" name="check2[]" onclick="selectWork()" value="yes"> <b>yes</b><br>
						<input type="checkbox" id="selectWorkQuest" name="check2[]" onclick="selectWork()" value="no"> <b>no</b><br>
						<div id="answerWork" style="display: none">
							<br>
							<label>Nama Instansi / Perusahaan</label>
							<input class="form-control" type="text" name="nameinstansi">
							<br>
							<label>Alamat Perusahaan</label>
							<input class="form-control" type="text" name="alamatperusahaan">
							<br>
							<label>Jabatan</label>
							<input class="form-control" type="text" name="jabatan">
							<br>
							<label>Darimana mendapatkan informasi pekerjaan</label>
							<input class="form-control" type="text" name="whereinformasi">
							<br>
							<label>apakah pekerjaan anda sesuai dng pekerjaan yang anda dapatkan di stikes graha medika</label>
							<select name="sesuai" class="form-control">
								<option>ya</option>
								<option>tidak</option>
							</select>
							<br>
							<label>apakah saudara sudah puas dengan kerjaan sekarang</label>
							<select name="puas" class="form-control">
								<option>ya</option>
								<option>tidak</option>
							</select>
							<br>
							<label>apakah pekerjaan saudara ini berhubungan dengan bidang ilmu saudara pelajari</label>
							<select name="berhubungan" class="form-control">
								<option>ya</option>
								<option>tidak</option>
							</select>
						</div>
					</div>
	          	</div>
	          	<div class="modal-footer">
	          		<button class="btn btn-success" name="submit">Submit</button>
	          		</form>
	          	</div>
	        </div>
    	</div>
	</div>
</body>
<script type="text/javascript">
	function getSelect(){
		var quest1 = document.getElementById("selectQuest1");
		var answer = document.getElementById("answer");

		if (quest1.checked == true) {
			answer.style.display = "block";
		}else{
			answer.style.display = "none";
		}
	}

	function selectWork(){
		var quest2 = document.getElementById("selectWorkQuest");
		var answer1 = document.getElementById("answerWork");

		if (quest2.checked == true) {
			answer1.style.display = "block";
		}else{
			answer1.style.display = "none";
		}
	}


</script>
</html>