<?php
//memasukkan file config.php
include('connect.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>TUGAS PROYEK PBW</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="style.css">
</head>

<style type="text/css">
	@import url('https://fonts.googleapis.com/css?family=Poppins:400,600,700,700i');
	@import url('https://fonts.googleapis.com/css?family=Roboto+Slab:300,400');

	body{
		font-family: 'Poppins', sans-serif;
		margin: 0px;
	}

		/* background: #67bef991; */

	section.slider{
		background: linear-gradient(rgba(0,0,0,.5), rgba(0,0,0,.5)), url("UNSIA.png") fixed;
		background-position: center;
		background-size: 100%;
		height: 75vh;
	}
	.font-slider{
		margin-top: 17%;
		text-align: center;
	}
	.judulsejarah{

		color: #3498db;
		font-weight: bold;
		margin-bottom: 20px;
	}

	.paragraph{
		text-align: justify;
		border-left: 7px solid #3498db;
		padding-left: 30px;
	}
	.paragraph2{
		margin-top: 30%;
		text-align: justify;
		border-right: 7px solid #3498db;
		padding-right: 30px;
	}
	.komentest{
	    padding: 10px 0px;
	    border-top: 1px solid #ccc;
	    border-bottom: 1px solid #ccc;
	    font-family: poppins;
	    font-size: 11pt;
	    text-align: justify;
	}
	.mark{
		background: linear-gradient(to bottom right, #eaeaeab0, whitesmoke);
	    text-align: center;
	    padding: 20px;
	    box-shadow: 0px 4px #ccc;
	    border-radius: 11px;
	    margin: 50px 0px 0px 0px;
	    margin-bottom: 15px;
	}
	.sejarah{
		padding-top: 6%;
	}

	.informasi{
		background: #f9f9f9;
		padding-bottom: 15px;
	}
	.visi{
		padding: 20px;
	    background: linear-gradient(rgba(0,0,0,.2), rgba(0,0,0,.2)), url("UNSIA.png") fixed;
	    border-radius: 6px;
	    line-height: 1.5em;
	    box-shadow: 0 1px 10px 0 rgba(0,0,0,.12);
	}
	.misi{
		padding: 20px;
	    background: #fdf3e5;
	    border-radius: 6px;
	    line-height: 1.5em;
	    box-shadow: 0 1px 10px 0 rgba(0,0,0,.12);
	}

	.kontak-informasi{
		padding: 20px;
	    background: #d6e4fc;
	    border-radius: 6px;
	    line-height: 1.5em;
	    box-shadow: 0 1px 10px 0 rgba(0,0,0,.12);
	}
	.top{
		margin-top: 5px;
		padding: 10px;
		font-size: 14pt;
		background: #eee1b9;
	}
	.link{
		background: #4ca2e1;
		text-decoration: none;
		color: #ffffff;
	}
	.link2{
		background: #DDB538;
		text-decoration: none;
		color: white;
	}
	.link3{
		background: #e3875f;
		text-decoration: none;
		color: white;
	}
	.link4{
		background: #91d97b;
		text-decoration: none;
		color: white;
	}
	.link5{
		background: #06D8D3;
		text-decoration: none;
		color: white;
	}
	.link6{
		background: #CE95BD;
		text-decoration: none;
		color: white;
	}

	.footer{
		background: #333;
	    color: white;
	    text-align: center;
	    padding: 20px 0px;
	    margin-top: 30px;
	}

	.footer h6{
		margin: 0px;
	}
</style>
<body>
<?php 
include 'navbar.php';
?>
<section class="top">
	<marquee>Selamat Datang Di Perpustakaan Digital Kami Menyediakan Semua Ilmu Pengetahuan yang Anda Butuhkan</marquee>
</section>

<section class="slider">
	<div class="container">
		<div class="row">
			<div class="col">
				<h1 class="font-slider" style="color: #fff;">Perpustakaan<br> <span style="color: #EC6B00; font-weight: bold;">Universitas Cyber Asia</span></h1>
			</div>
		</div>
	</div>
</section>

<section class="about" id="about">
	<div class="container sejarah">
		<div class="row">
			<div class="col">
				<h5 class="judulsejarah">Sejarah</h5>
				<p class="paragraph">Perpustakaan Cyber Comunity Adalah Serambi Ilmu Pengetahuan&nbsp;Jakarta&nbsp;adalah Perpustakaan digital yang akan memberikan kemudahan bagi mahasiswa UNSIA.</p>
			</div>
			<div class="col text-center">
				<p class="paragraph2">Perpustakaan Cyber Comunity Adalah Buah Karya Mahasiswa Universitas Siber Asia tahun : 2023&nbsp;Jakarta&nbsp;Karya Anak Bangsa.</p>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="mark">
					<h5 style="margin: 0px">PERPUSTAKAAN <b>CYBER</b></h5>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="informasi" id="informasi">
	<div class="container">
		<div class="row">
			<div class="col">
				<h5 style="font-weight: bold; margin: 30px 0px;">INFORMASI</h5>
			</div>
		</div>
		<div class="row wow bounceIn" duration="2s" delay="5s">
			<div class="col">
				<div class="visi">
					<h3>Visi</h3>
					<div>
						<p>Menjadi perpustakaan Perguruan Tinggi  yang modern berbasis teknologi informasi dengan pelayanan yang cepat, tepat dan mudah.</p>
					</div>

				</div>
			</div>

			<div class="col">
				<div class="misi">
					<h3>Misi</h3>
					<div>
						<p>
							<ol>
								<li>Mendukung proses pendidikan, penelitian dan pengembangan berbagai bidang ilmu pengetahuan, serta pengabdian kepada masyarakat.</li>
								<li>Menyediakan informasi dalam rangka proses temu balik informasi.</li>
								<li>Mendorong kesadaran baca bagi lingkungan perguruan tinggi dan masyarakat luas</li>
								<li>Menunjang terwujudnya&nbsp;<em>academic atmosphere</em>&nbsp;dengan menyediakan layanan informasi yang terbaik</li>
							</ol>
						</p>
					</div>

				</div>
			</div>

			<div class="col">
				<div class="kontak-informasi">
					<h3>Kontak Informasi</h3>
					<div>
						<h4>No Telepon : 081256654386<br>Fax. (0274) 564604</h4>
					</div>

				</div>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="mark">
					<h5 style="margin: 0px">PERPUSTAKAAN <b>CYBER</b></h5>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="informasi" id="informasi">
	<div class="container">
		<div class="row">
			<div class="col">
				<h5 style="font-weight: bold; margin: 30px 0px;">INFORMASI</h5>
			</div>
		</div>
		<div class="row wow bounceIn" duration="2s" delay="5s">
			<div class="col">
				<div class="visi">
					<h3>Media Sosial</h3>
					<div>
						<a class="link" href=" https://unsia.ac.id">Web UNSIA</a>
						<a class="link2" href=" unsia@mailnesia.com">E-Mail Perpus CYBER</a>
						<a class="link3" href=" https://www.instagram.com/ppmb.unsia">IG Perpus CYBER</a>
						<a class="link4" href=" https://www.facebook.com/profile.php?id=100064054241654&mibextid=ZbWKwL">IG Perpus CYBER</a>
						<a class="link5" href=" https://teer.id/hunty">Twitter Perpus CYBER</a>
						<a class="link6" href=" https://github.com/BotHunting">Informasi Pelatihan</a>
					</div>

				</div>
			</div>

			<div class="col">
				<div class="misi">
					<h3>Alamat</h3>
					<div>
						<p>
							<ol>
								<b>Perpustakaan Kampus 1</b><br>
									Berlokasi di Kampus Menara Jakarta Selatan<br> 

							</ol>
						</p>
					</div>

				</div>
			</div>
		</div>
	</div>
</section>

<footer class="footer">
	<div class="container">
		<div class="row">
			<div class="col">
				<h6>Copyright &copy 2024 By Six Groub PBW Company Limited</h6>
			</div>
		</div>
	</div>
</footer>

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	
</body>
</html>