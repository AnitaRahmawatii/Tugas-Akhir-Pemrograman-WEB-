<!DOCTYPE html>
<html>
<head>
	<title>PEMROGRAMAN WEB</title>
	<script>
		alert('Terimakasih telah mengisi form ini');
		var nama= prompt('Masukan Nama Anda :');
        alert('Data anda telah tersimpan '+ nama);

    </script>

	<script src="script.js"></script>
</head>
<body>
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
        
        <h1 align="center">DATA TELAH TERSIMPAN</h1>

		<div class="content">
        <?php

         // Menangkap isi variabel dari file yang telah kita isi pada form.php
        if (!empty($_POST["Nama"])){

       
        $Nama = $_POST['Nama'];
        $Tanggal = $_POST['Tanggal_Lahir'];
        $Jenis = $_POST['Jenis_Kelamin'];
        $Agama = $_POST['Agama'];
        $Riwayat = $_POST['Riwayat_Pendidikan'];
        $Alamat = $_POST['Alamat'];
        $No = $_POST['No_Handphone'];
        $Email = $_POST['Email'];
    

        // Format data yang akan diparsing
        $data = "\n $Nama|$Tanggal|$Jenis|$Agama|$Riwayat|$Alamat|$No|$Email";

        // Buka file hasil.txt, kemudian tuliskan isi variabel di atas kedalam hasil.txt
        $fh = fopen("hasil.txt", "a");
        fwrite($fh, $data);

        // Tutup file hasil.txt
         fclose($fh);
        }
        // Keterangan bila data berhasil di input
         print "<a href='index.php'>Hasil Data</a>";

        ?>
		</div>


		<!-- Akhir sidebar -->
		<div class="footer">
			<marquee>
				<p>&copy COPYRIGHT BY ANITA RAHMAWATI</p>
			</marquee>
		</div>

</body>
</html>