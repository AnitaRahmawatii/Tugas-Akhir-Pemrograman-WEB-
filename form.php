<!DOCTYPE html>
<html>
<head>
    <title>PEMROGRAMAN WEB</title>
    
    <!-- Menampilkan javascript sebelum masuk ke website -->
	<script>
		alert('Selamat Datang ');
		var nama= prompt('Masukan Nama Anda :');
		alert('Selamat mengisi form ini '+ nama);

	</script>
	
	
    
    <!-- Memanggil fungsi javascript -->
	<script src="script.js"></script>
</head>
<body>

    <!-- Memanggil fungsi css -->
	<link rel="stylesheet" href="data.css">

    
		<div class="header">
			<marquee><h1>WELCOME TO MY WEBSITE</h1></marquee>
			
		</div>

		<div class="menu">
				<a href="home.html">HOME</a>
				<a href="form.php">FORM</a>
				<a href="proses.php">PORTOFOLIO</a>
				<a href="tugas.php">CONTACT US</a>
			</div>

			<div class="form">
	<fieldset> 
			<legend align="center"><b>FORMULIR LAMARAN PEKERJAAN </b></legend>
				<table align="center">


		<!-- Mengirim data ke proses.php -->			
  			<form action="proses.php" method="post" enctype="multipart/form-data">
   						<tr>
							   <td>Nama</td> 
							   <td>:</td>
								<td><input type="text" name="Nama" placeholder="Masukkan Nama Anda"></td>
						</tr>
						
						<tr>
								<td>Tanggal Lahir</td>
								<td>:</td> 
								<td><input type="date" name="Tanggal Lahir"></td>
						</tr>

						<tr>
								<td>Jenis Kelamin</td>
								<td>:</td>
    						<td>
                          
                            <input type="radio" name="Jenis Kelamin" value="Laki-Laki" checked />Laki-Laki
			                <input type="radio" name="Jenis Kelamin" value="Perempuan">Perempuan</td>
						</tr>
						
						<tr>
								<td>Agama</td>
								<td>:</td>
							<td>			
                            <select name="Agama">
        							<option value="Islam">Islam</option>
        							<option value="Kristen">Kristen</option>
        							<option value="Hindu">Hindu</option>
        							<option value="Budha">Budha</option>
        							<option value="Konghucu">Konghucu</option>
								</select>
							</td>	
						</tr>

						<tr>
								<td>Riwayat Pendidikan</td>
								<td>:</td>
							<td>
								<input type="text" name="Riwayat Pendidikan" placeholder="Masukkan Riwayat Pendidikan Anda"></td>
						</tr>

						<tr>
								<td>Alamat</td>
								<td>:</td> 
							<td>	
								<input type="text" name="Alamat" placeholder="Masukkan Alamat Anda"></td>
						</tr>

						<tr>
								<td>No. Handphone</td>
								<td>:</td>
							<td>
								<input type="number" name="No Handphone"></td>
						</tr>

						<tr>
								<td>Email</td>
								<td>:</td>
							<td> 
								<input type="text" name="Email"></td>
						</tr>

						<tr>
							<td>
								<input type="reset" name="Reset">
								<input type="submit" name="Submit"></td>
								
                        </tr>
                        
                        <tr>
                            

                    <!-- Untuk melihat hasilnya di index.php -->
                            <p>Klik Link dibawah untuk melihat Data</p>
                            <a href = "index.php" color="black">Lihat Data</a>
                        </tr>

			</form>
	</fieldset>
				</table>
			</div>

		<!-- Akhir sidebar -->
		<div class="footer">
			<marquee>
				<p>&copy COPYRIGHT BY ANITA RAHMAWATI</p>
			</marquee>
		</div>

</body>
</html>