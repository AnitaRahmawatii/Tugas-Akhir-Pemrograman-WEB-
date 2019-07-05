<!DOCTYPE html>
<html>
<head>
	<title>PEMROGRAMAN WEB</title>
	<script>
		alert('Ini adalah biodata');
		var nama= prompt('Masukan Nama Anda :');
		alert('Terimakasih telah melihat biodata saya '+ nama);

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
				<a href="formulir.html">FORM</a>
				<a href="proses.php">PORTOFOLIO</a>
				<a href="tugas.php">CONTACT US</a>
			
			</div>

		<div class="content">
			<div class="main" align="center">
				<img src="aku.JPEG">
			</div>


			<div class="isi">
				<table>
					<tr>
						<td>Nama Lengkap</td>
						<td>:</td>
						<td>Anita Rahmawati</td>
					</tr>

					<tr>
						<td>Tempat, Tanggal Lahir</td>
						<td>:</td> 
						<td>Subang, 15 September 2000</td>
					</tr>

					<tr>
						<td>Jenis Kelamin</td>
						<td>:</td>
						<td>Perempuan</td>
					</tr>

					<tr>
						<td>Agama</td>
						<td>:</td>
						<td>Islam</td>
					</tr>

					<tr>
						<td>Pekerjaan</td>
						<td>:</td>
						<td>Mahasiswa</td>
					</tr>
				</table>
			</div>
			
		</div>


		<!-- Sidebar -->
		<div class="sidebar">
			<!-- Untuk menampilkan link instagram dan gmail di link terkait -->
			<h3>Link Terkait</h3>
			<a href="http://instagram.com/anitarhmwt15/"> <img src="instag.png" alt="instagram"></a>
			<a href="http://gmail.com"> <img src="gmail.jpg" alt="gmail"></a><br>

			<!-- Untuk menghitung banyaknya yang mengunjungi web ini -->
			<?php
	
                    $filecounter="post.txt";
                    $fl=fopen($filecounter,"r+");
                    $hit=fread($fl,filesize($filecounter));

                        echo("<table width=250 align=center border=1 cellspacing=0 cellpadding=0 bordercolor=#0000FF><tr>");
                        echo("<td width=250 valign=middle align=center>");
                        echo("<font face=verdana size=2 color=#FF0000><b>");
                        echo("Anda pengunjung yang ke:");
                        echo($hit);
                        echo("</b></font>");
                        echo("</td>");
                        echo("</tr></table>");
                        fclose($fl);

                    $fl=fopen($filecounter,"w+");
                    $hit=$hit+1;
                    fwrite($fl,$hit,strlen($hit));
                    fclose($fl);

            ?>
			<br>

			<!--- Untuk menampilkan hari, tanggal dan jam -->
			<script type="text/javascript">
   				 var currentTime = new Date();
   				 document.write(currentTime);
			</script><br>

			<!-- Menampilkan link pencarian tetapi harus di klik terlelbih dahulu -->
			<a href="http://www.google.com" onclick="cari()">GOOGLE</a><br>

			

			
		</div>
		<!-- Akhir sidebar -->
		<div class="footer">
			<marquee>
				<p>&copy COPYRIGHT BY ANITA RAHMAWATI</p>
			</marquee>
		</div>

</body>
</html>