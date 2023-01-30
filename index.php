<!DOCTYPE html>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webberita";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//Perintah ambil data
$sql1 = "SELECT * FROM databerita";
$hasil1 = $conn->query($sql1);
$hasil3 = $conn->query($sql1);
$hasil4 = $conn->query($sql1);
$hasil5 = $conn->query($sql1);

//Perintah ambil data
$sql2 = "SELECT * FROM akun";
$hasil2 = $conn->query($sql2);

$sql3 = "SELECT * FROM databest";
$hasil11 = $conn->query($sql3);
$hasil12 = $conn->query($sql3);
?>

<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<meta name="description" content="Magz is a HTML5 & CSS3 magazine template is based on Bootstrap 3.">
		<meta name="author" content="Kodinger">
		<meta name="keyword" content="magz, html5, css3, template, magazine template">
		<!-- Shareable -->
		<meta property="og:title" content="HTML5 & CSS3 magazine template is based on Bootstrap 3" />
		<meta property="og:type" content="article" />
		<meta property="og:url" content="http://github.com/nauvalazhar/Magz" />
		<meta property="og:image" content="https://raw.githubusercontent.com/nauvalazhar/Magz/master/images/preview.png" />
		<title>NERDZ &mdash; Responsive HTML5 &amp; CSS3 Magazine Template</title>
		<!-- Bootstrap -->
		<link rel="stylesheet" href="scripts/bootstrap/bootstrap.min.css">
		<!-- IonIcons -->
		<link rel="stylesheet" href="scripts/ionicons/css/ionicons.min.css">
		<!-- Toast -->
		<link rel="stylesheet" href="scripts/toast/jquery.toast.min.css">
		<!-- OwlCarousel -->
		<link rel="stylesheet" href="scripts/owlcarousel/dist/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="scripts/owlcarousel/dist/assets/owl.theme.default.min.css">
		<!-- Magnific Popup -->
		<link rel="stylesheet" href="scripts/magnific-popup/dist/magnific-popup.css">
		<link rel="stylesheet" href="scripts/sweetalert/dist/sweetalert.css">
		<!-- Custom style -->
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/skins/all.css">
		<link rel="stylesheet" href="css/demo.css">
	</head>

	<body class="skin-orange">
		<header class="primary">
			<div class="firstbar">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-10">
							<div class="brand">
								<a href="index.php">
									<img src="images/logo1.png" alt="Magz Logo">
								</a>
							</div>						
						</div>
						<div class="col-md-6 col-sm-10">
							<form class="search" autocomplete="off">
								<div class="form-group">
									<div class="input-group">
										<input type="text" name="q" class="form-control" placeholder="Type something here">									
										<div class="input-group-btn">
											<button class="btn btn-primary"><i class="ion-search"></i></button>
										</div>
									</div>
								</div>
							</form>								
						</div>
						<div class="col-md-3 col-sm-12 text-right">
							<ul class="nav-icons">
								<li><a href="login.php"><i class="ion-person"></i><div>Login</div></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<!-- Start nav -->
			<nav class="menu">
				<div class="container">
					<div class="brand">
						<a href="#">
							<img src="images/logo1.png" alt="Nerdz Logo">
						</a>
					</div>
					<div class="mobile-toggle">
						<a href="#" data-toggle="menu" data-target="#menu-list"><i class="ion-navicon-round"></i></a>
					</div>
					<div class="mobile-toggle">
						<a href="#" data-toggle="sidebar" data-target="#sidebar"><i class="ion-ios-arrow-left"></i></a>
					</div>
					<div id="menu-list">
						<ul class="nav-list">
							<li class="for-tablet nav-title"><a>Menu</a></li>
							<li class="for-tablet"><a href="login.php">Login</a></li>
							<li><a href="index.php">Home</a></li>
							<li class="dropdown magz-dropdown">
								<a href="#">Categories <i class="ion-ios-arrow-right"></i></a>
								<ul class="dropdown-menu">
									<li><a href="catech.php">Teknologi</a></li>
									<li><a href="#">Bussiness</a></li>
									<li><a href="#">Goverment</a></li>
									<li><a href="#">Law & Crime</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- End nav -->
		</header>

		<section class="home">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-sm-12 col-xs-12">
						<div class="headline">
							<div class="nav" id="headline-nav">
								<a class="left carousel-control" role="button" data-slide="prev">
									<span class="ion-ios-arrow-left" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="right carousel-control" role="button" data-slide="next">
									<span class="ion-ios-arrow-right" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
							<?php 
							if($hasil5->num_rows>0){
								while($row = $hasil5->fetch_all(MYSQLI_ASSOC)){
									// $arr = array($row);
									// $tet = array_column($arr, 'judul');
								// print_r($row);
								// while(){
								echo'
							<div class="owl-carousel owl-theme" id="headline">							
								<div class="item">
									<a href="single1.php?judul='.$row[0]['judul'].'"><div class="badge">Hot!</div> '.$row[0]['judul'].'</a>
								</div>
								<div class="item">
									<a href="single1.php?judul='.$row[1]['judul'].'">'.$row[1]['judul'].'</a>
								</div>
							</div>';}}
							else{
								echo "tidak ada hasil";
							}
							?>
						</div>
						<div class="owl-carousel owl-theme slide" id="featured">
							<?php
							if($hasil1->num_rows>0){
								while($row = $hasil1->fetch_assoc()){
								$phpdate = strtotime( $row['tanggal'] );
								$mysqldate = date( 'j F Y', $phpdate );
								echo'
								<div class="item">
									<article class="featured">
										<div class="overlay"></div>
										<figure>
											<img src="images/'.$row['gambar'].'" alt="Sample Article">
										</figure>
										<div class="details">
											<div class="category"><a href="catech.php?kategori='.$row['jenis'].'">'.$row['jenis'].'</a></div>
											<h1><a href="single1.php?judul='.$row['judul'].'">'.$row['judul'].'</a></h1>
											<div class="time">'.$mysqldate.'</div>
										</div>
									</article>
								</div>';
							}
								}else{
								echo "tidak ada hasil";
							}
							?>
						</div>
						<div class="line">
							<div>Latest News</div>
						</div>
						<div class="row">
						<?php
							if($hasil3->num_rows>0){
								while($row = $hasil3->fetch_assoc()){
								$phpdate = strtotime( $row['tanggal'] );
								$mysqldate = date( 'j F Y', $phpdate );
								echo'
								<article class="col-md-12 article-list">
									<div class="inner">
										<figure>
											<a href="single1.php?judul='.$row['judul'].'">
												<img src="images/'.$row['gambar'].'" alt="Sample Article">
											</a>
										</figure>
										<div class="details">
											<div class="detail">
												<div class="category">
													<a href="catech.php?kategori='.$row['jenis'].'">'.$row['jenis'].'</a>
												</div>
												<div class="time">'.$mysqldate.'</div>
											</div>
											<h1><a href="single1.php?judul='.$row['judul'].'">'.$row['judul'].'</a></h1>
											<p>
											'.substr($row['isi'],0,100).'...
											</p>
											<footer>
												<a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>273</div></a>
												<a class="btn btn-primary more" href="single1.php?judul='.$row['judul'].'">
													<div>More</div>
													<div><i class="ion-ios-arrow-thin-right"></i></div>
												</a>
											</footer>
										</div>
									</div>
								</article>';
							}
								}else{
								echo "tidak ada hasil";
							}
							?>
							<!-- <article class="col-md-12 article-list">
								<div class="inner">
									<div class="badge">
										Sponsored
									</div>
									<figure>
										<a href="single.php">
											<img src="images/news/img02.jpg" alt="Sample Article">
										</a>
									</figure>
									<div class="details">
										<div class="detail">
											<div class="category">
												<a href="#">Travel</a>
											</div>
											<div class="time">December 18, 2016</div>
										</div>
										<h1><a href="single.php">Maecenas accumsan tortor ut velit pharetra mollis</a></h1>
										<p>
											Maecenas accumsan tortor ut velit pharetra mollis. Proin eu nisl et arcu iaculis placerat sollicitudin ut est. In fringilla dui.
										</p>
										<footer>
											<a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>4209</div></a>
											<a class="btn btn-primary more" href="single.php">
												<div>More</div>
												<div><i class="ion-ios-arrow-thin-right"></i></div>
											</a>
										</footer>
									</div>
								</div>
							</article>
							<article class="col-md-12 article-list">
								<div class="inner">
									<figure>
										<a href="single.php">
											<img src="images/news/img03.jpg" alt="Sample Article">
										</a>
									</figure>
									<div class="details">
										<div class="detail">
											<div class="category">
											<a href="#">Travel</a>
											</div>
											<div class="time">December 16, 2016</div>
										</div>
										<h1><a href="single.php">Nulla facilisis odio quis gravida vestibulum Proin venenatis pellentesque arcu</a></h1>
										<p>
											Nulla facilisis odio quis gravida vestibulum. Proin venenatis pellentesque arcu, ut mattis nulla placerat et.
										</p>
										<footer>
											<a href="#" class="love active"><i class="ion-android-favorite"></i> <div>302</div></a>
											<a class="btn btn-primary more" href="single.php">
												<div>More</div>
												<div><i class="ion-ios-arrow-thin-right"></i></div>
											</a>
										</footer>
									</div>
								</div>
							</article>
							<article class="col-md-12 article-list">
								<div class="inner">
									<figure>
										<a href="single.php">
											<img src="images/news/img09.jpg" alt="Sample Article">
										</a>
									</figure>
									<div class="details">
										<div class="detail">
											<div class="category">
												<a href="#">Healthy</a>
											</div>
											<div class="time">December 16, 2016</div>
										</div>
										<h1><a href="single.php">Maecenas blandit ultricies lorem id tempor enim pulvinar at</a></h1>
										<p>
											Maecenas blandit ultricies lorem, id tempor enim pulvinar at. Curabitur sit amet tortor eu ipsum lacinia malesuada.
										</p>
										<footer>
											<a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>783</div></a>
											<a class="btn btn-primary more" href="single.php">
												<div>More</div>
												<div><i class="ion-ios-arrow-thin-right"></i></div>
											</a>
										</footer>
									</div>
								</div>
							</article> -->
						</div>
					</div>
					<div class="col-xs-6 col-md-4 sidebar" id="sidebar">
						<div class="sidebar-title for-tablet">Sidebar</div>
						<aside>
							<h1 class="aside-title">Popular <a href="#" class="all">See All <i class="ion-ios-arrow-right"></i></a></h1>
							<div class="aside-body">
								<?php
									if($hasil11->num_rows>0){
										while($row = $hasil11->fetch_assoc()){
										echo'
										<article class="article-mini">
											<div class="inner">
												<figure>
													<a href="single1.php?judul='.$row['judul'].'">
														<img src="images/'.$row['gambar'].'" alt="Sample Article">
													</a>
												</figure>
												<div class="padding">
													<h1><a href="single1.php?judul='.$row['judul'].'">'.$row['judul'].'</a></h1>
												</div>
											</div>
										</article>';
									}
										}else{
										echo "tidak ada hasil";
									}
								?>
								<!-- <article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.php">
												<img src="images/news/img14.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.php">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.php">
												<img src="images/news/img09.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.php">Aliquam et metus convallis tincidunt velit ut rhoncus dolor</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.php">
												<img src="images/news/img11.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.php">dui augue facilisis lacus fringilla pulvinar massa felis quis velit</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.php">
												<img src="images/news/img06.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.php">neque est semper nulla, ac elementum risus quam a enim</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.php">
												<img src="images/news/img03.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.php">Morbi vitae nisl ac mi luctus aliquet a vitae libero</a></h1>
										</div>
									</div>
								</article> -->
							</div>
						</aside>
					</div>
				</div>
			</div>
		</section>

		<section class="best-of-the-week">
			<div class="container">
				<h1><div class="text">Best Of The Week</div>
					<div class="carousel-nav" id="best-of-the-week-nav">
						<div class="prev">
							<i class="ion-ios-arrow-left"></i>
						</div>
						<div class="next">
							<i class="ion-ios-arrow-right"></i>
						</div>
					</div>
				</h1>
				<div class="owl-carousel owl-theme carousel-1">
					<?php
						if($hasil12->num_rows>0){
							while($row = $hasil12->fetch_assoc()){
							$phpdate = strtotime( $row['tanggal'] );
							$mysqldate = date( 'j F Y', $phpdate );
							echo'
							<article class="article">
								<div class="inner">
									<figure>
										<a href="single1.php?judul='.$row['judul'].'">
											<img src="images/'.$row['gambar'].'" alt="Sample Article">
										</a>
									</figure>
									<div class="padding">
										<div class="detail">
												<div class="time">'.$mysqldate.'</div>
												<div class="category"><a href="catech.php?kategori='.$row['jenis'].'">'.$row['jenis'].'</a></div>
										</div>
										<h2><a href="single1.php?judul='.$row['judul'].'">'.$row['judul'].'</a></h2>
										<p>'.substr($row['isi'],0,50).'...</p>
									</div>
								</div>
							</article>';
						}
							}else{
							echo "tidak ada hasil";
						}
					?>
					<!-- <article class="article">
						<div class="inner">
							<figure>
								<a href="single.php">
									<img src="images/news/img16.jpg" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
									<div class="time">December 09, 2016</div>
									<div class="category"><a href="catech.php?kategori='.$row['jenis'].'">Sport</a></div>
								</div>
								<h2><a href="single.php">Maecenas porttitor sit amet turpis a semper</a></h2>
								<p> Proin vulputate, urna id porttitor luctus, dui augue facilisis lacus.</p>
							</div>
						</div>
					</article>
					<article class="article">
						<div class="inner">
							<figure>
								<a href="single.php">
									<img src="images/news/img15.jpg" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
									<div class="time">December 26, 2016</div>
									<div class="category"><a href="catech.php?kategori='.$row['jenis'].'">Lifestyle</a></div>
								</div>
								<h2><a href="single.php">Fusce ac odio eu ex volutpat pellentesque</a></h2>
								<p>Vestibulum ante ipsum primis in faucibus orci luctus</p>
							</div>
						</div>
					</article>
					<article class="article">
						<div class="inner">
							<figure>
								<a href="single.php">
									<img src="images/news/img14.jpg" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
									<div class="time">December 26, 2016</div>
									<div class="category"><a href="catech.php?kategori='.$row['jenis'].'">Travel</a></div>
								</div>
								<h2><a href="single.php">Nulla facilisis odio quis gravida vestibulum</a></h2>
								<p>Proin venenatis pellentesque arcu, ut mattis nulla placerat et.</p>
							</div>
						</div>
					</article> -->
					<article class="article">
						<div class="inner">
							<figure>
								<a href="single.php">
									<img src="images/news/img01.jpg" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
									<div class="time">December 26, 2016</div>
									<div class="category"><a href="catech.php?kategori='.$row['jenis'].'">Travel</a></div>
								</div>
								<h2><a href="single.php">Fusce Ullamcorper Elit At Felis Cursus Suscipit</a></h2>
								<p>Proin venenatis pellentesque arcu, ut mattis nulla placerat et.</p>
							</div>
						</div>
					</article>
					<article class="article">
						<div class="inner">
							<figure>
								<a href="single.php">
									<img src="images/news/img11.jpg" alt="Sample Article">
								</a>
							</figure>
							<div class="padding">
								<div class="detail">
									<div class="time">December 26, 2016</div>
									<div class="category"><a href="catech.php?kategori='.$row['jenis'].'">Travel</a></div>
								</div>
								<h2><a href="single.php">Donec consequat arcu at ultrices sodales</a></h2>
								<p>Proin venenatis pellentesque arcu, ut mattis nulla placerat et.</p>
							</div>
						</div>
					</article>
				</div>
			</div>
		</section>

		<!-- Start footer -->
		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="block">
							<h1 class="block-title">Company Info</h1>
							<div class="block-body">
								<figure class="foot-logo">
									<img src="images/NewsLogo.png" class="img-responsive" alt="Logo">
								</figure>
								<p class="brand-description">
									NERDZ is a HTML5 &amp; CSS3 magazine template based on Bootstrap 3.
								</p>
								<a href="page.php" class="btn btn-magz white">About Us <i class="ion-ios-arrow-thin-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="block">
							<h1 class="block-title">Popular Tags <div class="right"><a href="#">See All <i class="ion-ios-arrow-thin-right"></i></a></div></h1>
							<div class="block-body">
								<ul class="tags">
									<li><a href="#">HTML5</a></li>
									<li><a href="#">CSS3</a></li>
									<li><a href="#">Bootstrap 3</a></li>
									<li><a href="#">Web Design</a></li>
									<li><a href="#">Creative Mind</a></li>
									<li><a href="#">Standing On The Train</a></li>
									<li><a href="#">at 6.00PM</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="block">
							<h1 class="block-title">Latest News</h1>
							<div class="block-body">
								<?php
									if($hasil4->num_rows>0){
										while($row = $hasil4->fetch_assoc()){
										echo'
										<article class="article-mini">
											<div class="inner">
												<figure>
													<a href="single.php">
														<img src="images/'.$row['gambar'].'" alt="">
													</a>
												</figure>
												<div class="padding">
													<h1><a href="single.php">'.$row['judul'].'</a></h1>
												</div>
											</div>
										</article>';
									}
										}else{
										echo "tidak ada hasil";
									}
								?>
								<!-- <article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.php">
												<img src="images/news/img14.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.php">eu dapibus risus aliquam etiam ut venenatis</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.php">
												<img src="images/news/img15.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.php">Nulla facilisis odio quis gravida vestibulum </a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.php">
												<img src="images/news/img16.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.php">Proin venenatis pellentesque arcu vitae </a></h1>
										</div>
									</div>
								</article> -->
								<a href="#" class="btn btn-magz white btn-block">See All <i class="ion-ios-arrow-thin-right"></i></a>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-xs-12 col-sm-6">
						<div class="block">
							<h1 class="block-title">Follow Us</h1>
							<div class="block-body">
								<p>Follow us and stay in touch to get the latest news</p>
								<ul class="social trp">
									<li>
										<a href="#" class="facebook">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-facebook"></i>
										</a>
									</li>
									<li>
										<a href="#" class="twitter">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-twitter-outline"></i>
										</a>
									</li>
									<li>
										<a href="#" class="youtube">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-youtube-outline"></i>
										</a>
									</li>
									<li>
										<a href="#" class="googleplus">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-googleplus"></i>
										</a>
									</li>
									<li>
										<a href="#" class="instagram">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-instagram-outline"></i>
										</a>
									</li>
									<li>
										<a href="#" class="tumblr">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-tumblr"></i>
										</a>
									</li>
									<li>
										<a href="#" class="dribbble">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-dribbble"></i>
										</a>
									</li>
									<li>
										<a href="#" class="linkedin">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-linkedin"></i>
										</a>
									</li>
									<li>
										<a href="#" class="skype">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-skype"></i>
										</a>
									</li>
									<li>
										<a href="#" class="rss">
											<svg><rect width="0" height="0"/></svg>
											<i class="ion-social-rss"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="line"></div>
						<div class="block">
							<div class="block-body no-margin">
								<ul class="footer-nav-horizontal">
									<li><a href="index.php">Home</a></li>
									<li><a href="#">Partner</a></li>
									<li><a href="contact.php">Contact</a></li>
									<li><a href="page.php">About</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="copyright">
							COPYRIGHT &copy; NERDZ 2022. ALL RIGHT RESERVED.
							<div>
								Made with <i class="ion-heart"></i> by <a href="https://athariq55.github.io/portofolio01.github.io/">athariq55</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- End Footer -->

		<!-- JS -->
		<script src="js/jquery.js"></script>
		<script src="js/jquery.migrate.js"></script>
		<script src="scripts/bootstrap/bootstrap.min.js"></script>
		<script>var $target_end=$(".best-of-the-week");</script>
		<script src="scripts/jquery-number/jquery.number.min.js"></script>
		<script src="scripts/owlcarousel/dist/owl.carousel.min.js"></script>
		<script src="scripts/magnific-popup/dist/jquery.magnific-popup.min.js"></script>
		<script src="scripts/easescroll/jquery.easeScroll.js"></script>
		<script src="scripts/sweetalert/dist/sweetalert.min.js"></script>
		<script src="scripts/toast/jquery.toast.min.js"></script>
		<script src="js/demo.js"></script>
		<script src="js/e-magz.js"></script>
	</body>
</html>