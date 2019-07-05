<!DOCTYPE HTML>
<html>
  <head>
    <title>PEMROGRAMAN WEB</title>

    <script>
		alert('Terimakasih sudah mengisi form ini');
		var nama= prompt('Masukan Nama Anda :');
		alert('Lihat data diri anda '+ nama);

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
        
        <h1 align="center">HASIL PENGISIAN FORMULIR LAMARAN KERJA</h1>'

<!-- Untuk menyimpan hasil form yang sudah di isi kedalam file hasil.txt -->
  <?php
  $txt_file    = file_get_contents('hasil.txt');
  $rows        = explode("\n", $txt_file);
  array_shift($rows);

  ;
  echo '<a href="form.php"></a></br></br>';
  $i=1;

  foreach($rows as $row => $data)
  {

        // Explode digunakan untuk memisahkan Item Data dari Pemisah |, array pada PHP dimulaipada index ke-0
        $row_data = explode('|', $data);

        $info[$row]['Nama']                 = $row_data[0];
        $info[$row]['Tanggal Lahir']        = $row_data[1];
        $info[$row]['Jenis Kelamin']        = $row_data[2];
        $info[$row]['Agama']                =$row_data[3];
        $info[$row]['Riwayat Pendidikan']   =$row_data[4];
        $info[$row]['Alamat']               =$row_data[5];
        $info[$row]['No. Handphone']        =$row_data[6];
        $info[$row]['Email']                =$row_data[7];


        // Menampilkan Data

        echo 'Baris ke              - ' . $i++ . '<br />';
        echo ' Nama                 : <b>' . $info[$row]['Nama'] . '</b><br />';
        echo ' Tanggal Lahir        : <b>' . $info[$row]['Tanggal Lahir'] . '</b><br />';
        echo ' Jenis Kelamin        : <b>' . $info[$row]['Jenis Kelamin'] . '</b><br />';
        echo ' Agama                : <b>' . $info[$row]['Agama'] . '</b><br />';
        echo ' Riwayat Pendidikan   : <b>' . $info[$row]['Riwayat Pendidikan'] . '</b><br />';
        echo ' Alamat               : <b>' . $info[$row]['Alamat'] . '</b><br />';
        echo ' No. Handphone        : <b>' . $info[$row]['No. Handphone'] . '</b><br />';
        echo ' Email                : <b>' . $info[$row]['Email'] . '</b><br />';
        echo "<hr>";

  }
  ?>



          <!-- Akhir sidebar -->
          
        <div class="footer">
			<marquee>
				<p>&copy COPYRIGHT BY ANITA RAHMAWATI</p>
			</marquee>
		</div>

</body>
</html>