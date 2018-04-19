<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Rental Mobil</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="./assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="./assets/css/font-awesome.min.css">
	</head>
	<body>
		<nav class="navbar navbar-inverse">
		  <div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle"
					data-toggle="collapse" data-target="#myNavbar">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="./">Rental Mobil</a>
			</div>
			<div class="collapse navbar-collapse" id="myNavbar">
				<ul class="nav navbar-nav">
					<li id="beranda" >
						<a href="./">Beranda</a>
					</li>
					<li id="mobil" >
						<a href="./index.php?halaman=mobil">Mobil</a>
					</li>
					<li id="pelanggan" >
						<a href="./index.php?halaman=pelanggan">Pelanggan</a>
					</li>
					<li id="peminjaman" >
						<a href="./index.php?halaman=peminjaman">Peminjaman</a>
					</li>
					<li id="pengembalian" >
						<a href="./index.php?halaman=pengembalian">Pengembalian</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a href="./keluar.php">
							<span class="fa fa-sign-out"></span> Keluar
						</a>
					</li>
				</ul>
			</div>
		  </div>
		</nav>

		<div class="container">
		<?php
			$halaman = isset($_GET['halaman']) ? $_GET['halaman'] : 'beranda';
			if(file_exists($halaman.".php")){
					/*Awal Perubahan*/

					//

							$subhalaman = isset($_GET['subhalaman']) ? $_GET['subhalaman'] : '';

							if ($subhalaman == ''){
								include $halaman.".php";
							}else{
								if(file_exists($subhalaman.".php")){
									include($subhalaman.".php");
								}
								else{
									echo '
										<div class="jumbotron">
										<img src="iki.jpg" width=40%>
										<h1 class="text-danger">EROR 404</h1>
										<p>Maaf halaman yang anda minta belum dibuat!</p>
										</div>
										';
								}
							}

					/*Akhir Perubahan*/
			}else{
				echo '
					<div class="jumbotron">
					<img src="iki.jpg" width=40%>
						<h1 class="text-danger">EROR 404</h1>
						<p>Maaf halaman yang anda minta belum dibuat!</p>
					</div>
				';}
		?>
		</div>

	</body>
	<script src="./assets/js/jquery.min.js"></script>
	<script src="./assets/js/bootstrap.min.js"></script>

	<script>
		$().ready(function(){
			$("#<?php echo $halaman; ?>").addClass('active');
		});
	</script>

</html>
