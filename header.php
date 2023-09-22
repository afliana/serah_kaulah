<?php
	include 'koneksi.php';
	date_default_timezone_set("Asia/Jakarta");

	$identitas = mysqli_query($conn, "SELECT * FROM pengaturan ORDER BY id DESC LIMIT 1");
	$d = mysqli_fetch_object($identitas);

?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="icon" href="uploads/identitas/<?= $d->favicon ?>">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Website <?= $d->nama ?></title>
    <link rel="stylesheet" href="index.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <section class="header">
      <nav>
		<a href="index.php"><img src="image/lo.png" /></a>
         <div class="nav-links" id="navLinks">
          <i class="fa fa-times" onclick="hideMenu()"></i>
          <ul>
            <li><a href="index.php">BERANDA</a></li>
            <li><a href="tentang-sekolah.php">TENTANG SEKOLAH</a></li>
            <li><a href="galeri.php">GALERI</a></li>
            <li><a href="informasi.php">INFORMASI</a></li>
            <li><a href="kontak.php">KONTAK</a></li>
          </ul>
        </div>
        <i class="fa fa-bars" onclick="showMenu()"></i>
      </nav>