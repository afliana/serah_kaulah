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
    <section class="sub-header">
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
	  <h1>Kontak</h1>
    </section>

			
	<section class="lokasi">
		
		<iframe src="<?= $d->google_maps ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

	</section>

	<section class="kontak">
	<div class="row">
		<div class="kontak-col"> 
			<div>
			 <i class="fa fa-home"></i>
           		 <span>
					<h5>Desa mekar baru dusun bunut jaya</h5>
           		  	<p>Gg. H. Halim <?= $d->alamat ?></p>
         		 </span>
			</div>

			<div>
            <i class="fa fa-phone"></i>
				<span>
					<h5>081345117891</h5>
					<p>Senin s/d Sabtu, 07.00 s/d 15.00 <?= $d->telepon ?></p>
				</span>
          </div>

			<div>
            <i class="fa fa-envelope-o"></i>
				<span>
					<h5>mts.raudlatulum3@yahoo.com</h5>
					<p>Hubungi Email Kami Jika Ingin Bertanya <?= $d->email ?></p>
				</span>
          </div>
			
		</div>
	
		</div>	
	</section>


    <!-- JavaScript Menu -->
    <script>
      var navLinks = document.getElementById("navLinks");

      function showMenu() {
        navLinks.style.right = "0";
      }

      function hideMenu() {
        navLinks.style.right = "-200px";
      }
    </script>

<?php include 'footer.php'; ?>


