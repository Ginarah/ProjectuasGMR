<!DOCTYPE html>
<html lang="en">
<head>
<title>SD Negeri 014 Terantang</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Course Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/contact_styles.css">
<link rel="stylesheet" type="text/css" href="styles/contact_responsive.css">
</head>
<body>

<div class="super_container">

	<!-- Header -->

	<header class="header d-flex flex-row">
		<div class="header_content d-flex flex-row align-items-center">
			<!-- Logo -->
			<div class="logo_container">
				<div class="logo">
					<img src="images/sd.png" alt="">
					<span>SDN 014 Terantang</span>
				</div>
			</div>

			<!-- Main Navigation -->
			<nav class="main_nav_container">
				<div class="main_nav">
					<ul class="main_nav_list">
						<li class="main_nav_item"><a href="index.php">home</a></li>
						<li class="main_nav_item"><a href="form-daftar.php">Daftar</a></li>
						<li class="main_nav_item"><a href="GMR/index.php">Koperasi Amanah</a></li>
						
						<li class="main_nav_item"><a href="grafik/index.php">Grafik</a></li>
						<li class="main_nav_item"><a href="loginadmin/login.php">login admin</a></li>
					</ul>
				</div>
			</nav>
		</div>
		<div class="header_side d-flex flex-row justify-content-center align-items-center">
			<img src="images/phone-call.svg" alt="">
			<span>+62 85271698835</span>
		</div>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<i class="fas fa-bars trans_200"></i>
		</div>

	</header>
	
	<!-- Menu -->
	<div class="menu_container menu_mm">

		<!-- Menu Close Button -->
		<div class="menu_close_container">
			<div class="menu_close"></div>
		</div>

		<!-- Menu Items -->
		<div class="menu_inner menu_mm">
			<div class="menu menu_mm">
			
				<!-- Menu Social -->
				
				<div class="menu_social_container menu_mm">
					
				</div>

				
			</div>

		</div>

	</div>
	
	<!-- Home -->

	<div class="home">
		<div class="home_background_container prlx_parent">
			<div class="home_background prlx" style="background-image:url(images/contact_background.jpg)"></div>
		</div>
		<div class="home_content">
			<h1>Daftar</h1>
		</div>
	</div>

	<!-- Contact -->

	<div class="contact">
		<div class="container">
			<div class="row">
				<div class="col-lg-8"><div class="contact_form">
						<div class="contact_title">Pendaftaran siswa</div>

						<div class="contact_form_container">
							

		
	
	<form action="../projek/proses-pendaftaran.php" method="POST">
							
	
		
		<p>
			<label for="nama">Nama: </label>
			<input type="text" name="nama" class="input_field contact_form_name" placeholder="nama lengkap" />
		</p>
		<p>
			<label for="alamat">Alamat: </label>
		<input type="text" name="alamat" class="input_field contact_form_name" placeholder="alamat" />
		</p>
		<p>
			<label for="jenis_kelamin">Jenis Kelamin: </label>
			<label><input type="radio" name="jenis_kelamin" value="laki-laki"> Laki-laki</label>
			<label><input type="radio" name="jenis_kelamin" value="perempuan"> Perempuan</label>
		</p>
		<p>
			<label for="agama">Agama: </label>
			<select name="agama">
				<option>Islam</option>
				<option>Kristen</option>
				<option>Hindu</option>
				<option>Budha</option>
				
			</select>
		</p>
		<p>
			<label for="sekolah_asal">Sekolah Asal/TK/pendidkan sebelumnya: </label>
			<input type="text" name="sekolah_asal"class="input_field contact_form_name" placeholder="nama sekolah" />
		</p>
		<p>
			<input type="submit" class="contact_send_btn trans_200" value="Daftar" name="daftar" />
		</p>
		

	
	</form>
	

	</div>
					</div>
						
				</div>

			<!-- Google Map -->

			<div class="row">
				<div class="col">
					<div id="google_map">
						<div class="map_container">
							<div id="map"></div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			
			

			<!-- Footer Content -->

			<div class="footer_content">
				<div class="row">

					<!-- Footer Column - About -->
					<div class="col-lg-3 footer_col">

						<!-- Logo -->
						<div class="logo_container">
							<div class="logo">
								<a href="index.html"><img src="images/sd.png" alt=""></a>
								<span>SDN 014 Terantang</span>
							</div>
						</div>

						<div class="footer_column_title">Operator Sekolah</div> <br>
						Nama  : YULIANA TARTILA, S.PD <br>
						NoHP  : 082383228167<br>
						Email : yulianatartilaa@gmail.com</p>

					</div>

					<!-- Footer Column - Menu -->

					<div class="col-lg-3 footer_col">
						<div class="footer_column_title">Menu</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_list_item"><a href="index.html">Home</a></li>
							
								<li class="footer_list_item"><a href="daftar.html">Daftar</a></li>
								<li class="footer_list_item"><a href="tentangsekolah.html">Tentang Sekolah</a></li>
								<li class="footer_list_item"><a href="guru.html">Tenaga Pengajar</a></li>
							</ul>
						</div>
					</div>


					<!-- Footer Column - Contact -->

					<div class="col-lg-6 footer_col">
						<div class="footer_column_title">Kontak Sekolah</div>
						<div class="footer_column_content">
							<ul>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/placeholder.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									Jl. Danau Bingkuang - Terantang KM. 12 DUSUN I TERANTANG KEC. TAMBANG
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/smartphone.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>
									085271698835
								</li>
								<li class="footer_contact_item">
									<div class="footer_contact_icon">
										<img src="images/envelope.svg" alt="https://www.flaticon.com/authors/lucy-g">
									</div>sdn014terantang@gmail.com
								</li>
								
							</ul>
						</div>
					</div>

				</div>
			</div>

			<!-- Footer Copyright -->

			<div class="footer_bar d-flex flex-column flex-sm-row align-items-center">
				<div class="footer_copyright">
					<span><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> website Sekolah Dasar Negeri 014 Terantang <i class="fa fa-heart" aria-hidden="true"></i> Oleh <target="_blank">GMRProject Politeknik Caltex Riau</target>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></span>
				</div>
				
			</div>

		</div>
	</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/greensock/TweenMax.min.js"></script>
<script src="plugins/greensock/TimelineMax.min.js"></script>
<script src="plugins/scrollmagic/ScrollMagic.min.js"></script>
<script src="plugins/greensock/animation.gsap.min.js"></script>
<script src="plugins/greensock/ScrollToPlugin.min.js"></script>
<script src="plugins/scrollTo/jquery.scrollTo.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/contact_custom.js"></script>

</body>
</html>