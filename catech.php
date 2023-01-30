<!DOCTYPE html>

<?php

$jenis = $_GET['kategori'];

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
$sql1 = "SELECT * FROM databerita WHERE jenis = '$jenis'";
$hasil1 = $conn->query($sql1);

$sql2 = "SELECT * FROM databerita";
$hasil4 = $conn->query($sql2);

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

	<body>
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
							<img src="images/logo1.png" alt="Magz Logo">
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

		<section class="category">
		  <div class="container">
		    <div class="row">
		      <div class="col-md-8 text-left">
			  <?php
						if($hasil1->num_rows>0){
							while($row = $hasil1->fetch_assoc()){
							$phpdate = strtotime( $row['tanggal'] );
							$mysqldate = date( 'j F Y', $phpdate );
							echo'
		        <div class="row">
		          <div class="col-md-12">        
		            <ol class="breadcrumb">
		              <li><a href="#">Home</a></li>
		              <li class="active">'.$row['jenis'].'</li>
		            </ol>
		            <h1 class="page-title">Category: '.$row['jenis'].'</h1>
		            <p class="page-subtitle">Showing all posts with category <i>'.$row['jenis'].'</i></p>
		          </div>
		        </div>
		        <div class="line"></div>
		        <div class="row">
							<article class="col-md-12 article-list">
								<div class="inner">
								<figure>
									<a href="single.php">
										<img src="images/'.$row['gambar'].'">
									</a>
								</figure>
								<div class="details">
									<div class="detail">
									<div class="category">
									<a href="catech.php">'.$row['jenis'].'</a>
									</div>
									<div class="time">'.$mysqldate.'</div>
									</div>
									<h1><a href="single.php">'.$row['judul'].'</a></h1>
									<p>
									'.substr($row['isi'],0,120).'...
									</p>
									<footer>
									<a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>237</div></a>
									<a class="btn btn-primary more" href="single.php">
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
		              <figure>
			              <a href="single.php">
			                <img src="images/news/img11.jpg">
		                </a>
		              </figure>
		              <div class="details">
		                <div class="detail">
		                  <div class="category">
		                   <a href="category.php">Film</a>
		                  </div>
		                  <div class="time">December 26, 2016</div>
		                </div>
		                <h1><a href="single.php">Lorem Ipsum Dolor Sit Consectetur Adipisicing Elit</a></h1>
		                <p>
		                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		                  quis nostrud exercitat...
		                </p>
		                <footer>
		                  <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>78</div></a>
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
			                <img src="images/news/img08.jpg">
		                </a>
		              </figure>
		              <div class="details">
		                <div class="detail">
		                  <div class="category">
		                   <a href="category.php">Film</a>
		                  </div>
		                  <div class="time">December 26, 2016</div>
		                </div>
		                <h1><a href="single.php">Lorem Ipsum Dolor Sit Consectetur Adipisicing Elit</a></h1>
		                <p>
		                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		                  quis nostrud exercitat...
		                </p>
		                <footer>
		                  <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>10</div></a>
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
			                <img src="images/news/img13.jpg">
		                </a>
		              </figure>
		              <div class="details">
		                <div class="detail">
		                  <div class="category">
		                   <a href="category.php">Film</a>
		                  </div>
		                  <div class="time">December 26, 2016</div>
		                </div>
		                <h1><a href="single.php">Lorem Ipsum Dolor Sit Consectetur Adipisicing Elit</a></h1>
		                <p>
		                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		                  quis nostrud exercitat...
		                </p>
		                <footer>
		                  <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>1820</div></a>
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
			                <img src="images/news/img15.jpg">
		                </a>
		              </figure>
		              <div class="details">
		                <div class="detail">
		                  <div class="category">
		                   <a href="category.php">Film</a>
		                  </div>
		                  <div class="time">December 26, 2016</div>
		                </div>
		                <h1><a href="single.php">Lorem Ipsum Dolor Sit Consectetur Adipisicing Elit</a></h1>
		                <p>
		                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		                  quis nostrud exercitat...
		                </p>
		                <footer>
		                  <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>739</div></a>
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
			                <img src="images/news/img03.jpg">
		                </a>
		              </figure>
		              <div class="details">
		                <div class="detail">
		                  <div class="category">
		                   <a href="category.php">Film</a>
		                  </div>
		                  <div class="time">December 26, 2016</div>
		                </div>
		                <h1><a href="single.php">Lorem Ipsum Dolor Sit Consectetur Adipisicing Elit</a></h1>
		                <p>
		                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		                  quis nostrud exercitat...
		                </p>
		                <footer>
		                  <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>902</div></a>
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
			                <img src="images/news/img15.jpg">
		                </a>
		              </figure>
		              <div class="details">
		                <div class="detail">
		                  <div class="category">
		                   <a href="category.php">Film</a>
		                  </div>
		                  <div class="time">December 26, 2016</div>
		                </div>
		                <h1><a href="single.php">Lorem Ipsum Dolor Sit Consectetur Adipisicing Elit</a></h1>
		                <p>
		                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		                  quis nostrud exercitat...
		                </p>
		                <footer>
		                  <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>78</div></a>
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
			                <img src="images/news/img16.jpg">
		                </a>
		              </figure>
		              <div class="details">
		                <div class="detail">
		                  <div class="category">
		                   <a href="category.php">Film</a>
		                  </div>
		                  <div class="time">December 26, 2016</div>
		                </div>
		                <h1><a href="single.php">Lorem Ipsum Dolor Sit Consectetur Adipisicing Elit</a></h1>
		                <p>
		                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		                  quis nostrud exercitat...
		                </p>
		                <footer>
		                  <a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>198</div></a>
		                  <a class="btn btn-primary more" href="single.php">
		                    <div>More</div>
		                    <div><i class="ion-ios-arrow-thin-right"></i></div>
		                  </a>
		                </footer>
		              </div>
		            </div>
		          </article> -->
		          <!-- <div class="col-md-12 text-center">
		            <ul class="pagination">
		              <li class="prev"><a href="#"><i class="ion-ios-arrow-left"></i></a></li>
		              <li class="active"><a href="#">1</a></li>
		              <li><a href="#">2</a></li>
		              <li><a href="#">3</a></li>
		              <li><a href="#">...</a></li>
		              <li><a href="#">97</a></li>
		              <li class="next"><a href="#"><i class="ion-ios-arrow-right"></i></a></li>
		            </ul>
		            <div class="pagination-help-text">
		            	Showing 8 results of 776 &mdash; Page 1
		            </div>
		          </div> -->
		        </div>
		      </div>
		      <div class="col-md-4 sidebar">
		        <aside>
		          <h1 class="aside-title">Recent Post</h1>
		          <div class="aside-body">
		            <article class="article-fw">
		              <div class="inner">
		                <figure>
			                <a href="single.php">
			                  <img src="images/news/img12.jpg">
			                </a>
		                </figure>
		                <div class="details">
		                  <h1><a href="single.php">Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit</a></h1>
		                  <p>
		                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		                    tempor incididunt ut labore et dolore magna aliqua.
		                  </p>
		                  <div class="detail">
		                    <div class="time">December 26, 2016</div>
		                    <div class="category"><a href="category.php">Lifestyle</a></div>
		                  </div>
		                </div>
		              </div>
		            </article>
		            <div class="line"></div>
		            <article class="article-mini">
		              <div class="inner">
		              <figure>
			              <a href="single.php">
			                <img src="images/news/img05.jpg">
		                </a>
		              </figure>
		              <div class="padding">
		                <h1><a href="single.php">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
		                <div class="detail">
		                  <div class="category"><a href="category.php">Lifestyle</a></div>
		                  <div class="time">December 22, 2016</div>
		                </div>
		              </div>
		              </div>
		            </article>
		            <article class="article-mini">
		              <div class="inner">
		                <figure>
			                <a href="single.php">
			                  <img src="images/news/img02.jpg">
		                  </a>
		                </figure>
		                <div class="padding">
		                  <h1><a href="single.php">Fusce ullamcorper elit at felis cursus suscipit</a></h1>
		                  <div class="detail">
		                    <div class="category"><a href="category.php">Travel</a></div>
		                    <div class="time">December 21, 2016</div>
		                  </div>
		                </div>
		              </div>
		            </article>
		            <article class="article-mini">
		              <div class="inner">
		                <figure>
			                <a href="single.php">
			                  <img src="images/news/img13.jpg">
		                  </a>
		                </figure>
		                <div class="padding">
		                  <h1><a href="single.php">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
		                  <div class="detail">
		                    <div class="category"><a href="category.php">International</a></div>
		                    <div class="time">December 20, 2016</div>
		                  </div>
		                </div>
		              </div>
		            </article>
		          </div>
		        </aside>
		      </div>
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
														<img src="images/'.$row['gambar'].'" alt="Sample Article">
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