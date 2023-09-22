<?php include 'header.php'; ?>
      <div class="text-box">
        <h1>Selamat Datang di MTS Raudlatul Ulum 3</h1>
        <p>MADRASAH HEBAT BERMARTABAT</p>
      </div>
    </section>

    <!-- Bagian Sambutan -->
    <section class="sambutan">
		<h1>Sambutan Kepala Sekolah</h1>
		<img src="uploads/identitas/<?= $d->foto_kepsek ?>" width="100px">
		<h4><?= $d->nama_kepsek ?></h4>
		<p><?= $d->sambutan_kepsek ?></p>
	</section>

	<!-- Galeri -->
    <div class="galeri">
	
		<div class="container text-center">
			<h1>Galeri</h1>

			<?php
				$galeri = mysqli_query($conn, "SELECT * FROM galeri ORDER BY id DESC LIMIT 8");
				if(mysqli_num_rows($galeri) > 0){
					while($p = mysqli_fetch_array($galeri)){	
			?>

				<div class="col-4">
					<a href="uploads/galeri/<?= $p['foto'] ?>" target="_blank" class="thumbnail-link">
						<div class="thumbnail-box">
							<div class="thumbnail-img" style=" background-image: url('uploads/galeri/<?= $p['foto'] ?>');"></div>

							<div class="thumbnail-text">
								<?= substr($p['keterangan'], 0, 50)  ?>
							</div>
							
						</div>
        		  </a>
				</div>

			<?php }}else{ ?>

				tidak ada data

			<?php } ?>

		</div>
	</div>

	<!-- Informasi -->
  <div class="informasi">
	
		<div class="container text-center">
			<h1>Informasi</h1>

			<?php
				$informasi = mysqli_query($conn, "SELECT * FROM informasi ORDER BY id DESC LIMIT 8");
				if(mysqli_num_rows($informasi) > 0){
					while($p = mysqli_fetch_array($informasi)){	
			?>

				<div class="col-4">
					<a href="detail-informasi.php?id=<?= $p['id'] ?>" target="_blank" class="thumbnail-link"> 
						<div class="thumbnail-box">
							<div class="thumbnail-img" style=" background-image: url('uploads/informasi/<?= $p['gambar'] ?>');"></div>

							<div class="thumbnail-text">
								<?= substr($p['judul'], 0, 50)  ?>
							</div>
							
						</div>
       			  	</a>
				</div>

			<?php }}else{ ?>

				tidak ada data

			<?php } ?>

		</div>
	</div>
	
<?php include 'footer.php'; ?>



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