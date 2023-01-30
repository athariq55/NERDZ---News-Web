<!DOCTYPE html>
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
									<li><a href="Category.php">Teknologi</a></li>
									<li><a href="category.php">Bussiness</a></li>
									<li><a href="single.php">Goverment</a></li>
									<li><a href="page.php">Law & Crime</a></li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</nav>
			<!-- End nav -->
		</header>

		<section class="single">
			<div class="container">
				<div class="row">
					<!-- <div class="col-md-4 sidebar" id="sidebar">
						<aside>
							<div class="aside-body">
								<figure class="ads">
									<img src="images/ad.png">
									<figcaption>Advertisement</figcaption>
								</figure>
							</div>
						</aside>
						<aside>
							<h1 class="aside-title">Recent Post</h1>
							<div class="aside-body">
								<article class="article-fw">
									<div class="inner">
										<figure>
											<a href="single.html">												
												<img src="images/news/img16.jpg">
											</a>
										</figure>
										<div class="details">
											<h1><a href="single.html">Lorem Ipsum Dolor Sit Amet Consectetur Adipisicing Elit</a></h1>
											<p>
											Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
											tempor incididunt ut labore et dolore magna aliqua.
											</p>
											<div class="detail">
												<div class="time">December 26, 2016</div>
												<div class="category"><a href="category.html">Lifestyle</a></div>
											</div>
										</div>
									</div>
								</article>
								<div class="line"></div>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="images/news/img05.jpg">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
											<div class="detail">
												<div class="category"><a href="category.html">Lifestyle</a></div>
												<div class="time">December 22, 2016</div>
											</div>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="images/news/img02.jpg">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Fusce ullamcorper elit at felis cursus suscipit</a></h1>
											<div class="detail">
												<div class="category"><a href="category.html">Travel</a></div>
												<div class="time">December 21, 2016</div>
											</div>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="images/news/img13.jpg">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Duis aute irure dolor in reprehenderit in voluptate velit</a></h1>
											<div class="detail">
												<div class="category"><a href="category.html">International</a></div>
												<div class="time">December 20, 2016</div>
											</div>
										</div>
									</div>
								</article>
							</div>
						</aside>
						<aside>
							<div class="aside-body">
								<form class="newsletter">
									<div class="icon">
										<i class="ion-ios-email-outline"></i>
										<h1>Newsletter</h1>
									</div>
									<div class="input-group">
										<input type="email" class="form-control email" placeholder="Your mail">
										<div class="input-group-btn">
											<button class="btn btn-primary"><i class="ion-paper-airplane"></i></button>
										</div>
									</div>
									<p>By subscribing you will receive new articles in your email.</p>
								</form>
							</div>
						</aside>
					</div> -->
					<div class="col-md-8">
						<ol class="breadcrumb">
						  <li><a href="#">Home</a></li>
						  <li class="active">Film</li>
						</ol>
						<article class="article main-article">
							<header>
								<h1>Pellentesque elementum tellus id mauris faucibus</h1>
								<ul class="details">
									<li>Posted on 31 December, 2016</li>
									<li><a>Film</a></li>
									<li>By <a href="#">John Doe</a></li>
								</ul>
							</header>
							<div class="main">
								<p>Pellentesque elementum tellus id mauris faucibus, id sagittis mauris rhoncus. Donec ac iaculis dui, id convallis mauris. Fusce faucibus purus eu risus pulvinar, vel rutrum velit hendrerit. Sed urna nunc, efficitur faucibus sollicitudin non.</p>
								<div class="featured">
									<figure>
										<img src="images/news/img01.jpg">
										<figcaption>Image by pexels.com</figcaption>
									</figure>
								</div>

								<p>Nulla facilisi. Aenean pharetra fringilla nunc a finibus. Nulla vitae pretium nunc. Pellentesque sagittis sollicitudin turpis id aliquam. Cras lobortis diam in nunc posuere, et malesuada sem gravida. Curabitur ornare massa id orci faucibus elementum. Phasellus pharetra, velit <a href="#">in egestas rutrum,</a> metus dolor maximus massa, feugiat molestie eros mauris sit amet massa. Maecenas blandit diam lacus, in luctus nulla efficitur nec. Sed sit amet quam sit amet odio scelerisque vestibulum vel sit amet ante. Cras fringilla efficitur lacinia. Cras posuere, arcu id consequat ultrices, urna urna cursus massa, at sollicitudin elit lacus quis dui. In laoreet nulla a turpis blandit sollicitudin. Donec in risus eu lorem volutpat hendrerit quis non lorem. Nulla in metus ipsum.
								<p>Etiam sit amet augue non velit aliquet consectetur. Proin gravida, odio in facilisis pharetra, neque enim aliquam eros, vitae gravida orci elit vel magna. Integer viverra a purus id gravida. Donec laoreet mi ac auctor ultricies. Pellentesque ullamcorper est et erat ullamcorper gravida. In hac habitasse platea dictumst. Pellentesque justo mauris, mollis at tortor ut, commodo venenatis elit. Curabitur suscipit pellentesque nunc, id tempus mi facilisis sed. Curabitur molestie eu odio vitae condimentum. Donec placerat tristique neque a blandit. Nullam commodo massa ut eros elementum, in suscipit libero aliquam.</p>

								<h4>Sed id sodales sapien. Interdum et malesuada fames ac ante ipsum primis in faucibus. Nulla facilisi.</h4>
								<p>Nulla facilisi. Duis auctor fringilla sagittis. Fusce ornare, dui id consequat volutpat, nibh metus viverra nibh, vitae bibendum diam velit in libero. Sed dignissim quam sit amet nibh porttitor, non pellentesque metus tincidunt. Maecenas non velit sapien. </p>
								<p>Maecenas vel dolor sit amet ligula interdum tempor id eu ipsum. Suspendisse pharetra risus ut metus elementum pulvinar. Mauris eget varius tellus. Cras et lorem vel nunc gravida porttitor.</p>
								<blockquote>
									Free Responsive HTML5 &amp; CSS3 Magazine Template
								</blockquote>
								<p>Ut est elit, vehicula tempus volutpat ut, sodales eget odio. Nunc placerat, orci ac iaculis feugiat, sem tellus efficitur tortor, mollis iaculis lacus ante nec risus. Sed consequat vehicula pretium.</p>
							</div>
							<footer>
								<div class="col">
									<ul class="tags">
										<li><a href="#">Free Themes</a></li>
										<li><a href="#">Bootstrap 3</a></li>
										<li><a href="#">Responsive Web Design</a></li>
										<li><a href="#">HTML5</a></li>
										<li><a href="#">CSS3</a></li>
										<li><a href="#">Web Design</a></li>
									</ul>
								</div>
								<div class="col">
									<a href="#" class="love"><i class="ion-android-favorite-outline"></i> <div>1220</div></a>
								</div>
							</footer>
						</article>
						<div class="sharing">
						<div class="title"><i class="ion-android-share-alt"></i> Sharing is caring</div>
							<ul class="social">
								<li>
									<a href="#" class="facebook">
										<i class="ion-social-facebook"></i> Facebook
									</a>
								</li>
								<li>
									<a href="#" class="twitter">
										<i class="ion-social-twitter"></i> Twitter
									</a>
								</li>
								<li>
									<a href="#" class="googleplus">
										<i class="ion-social-googleplus"></i> Google+
									</a>
								</li>
								<li>
									<a href="#" class="linkedin">
										<i class="ion-social-linkedin"></i> Linkedin
									</a>
								</li>
								<li>
									<a href="#" class="skype">
										<i class="ion-ios-email-outline"></i> Email
									</a>
								</li>
								<li class="count">
									20
									<div>Shares</div>
								</li>
							</ul>
						</div>
						<div class="line">
							<div>Author</div>
						</div>
						<div class="author">
							<figure>
								<img src="images/img01.jpg">
							</figure>
							<div class="details">
								<div class="job">Web Developer</div>
								<h3 class="name">John Doe</h3>
								<p>Nulla sagittis rhoncus nisi, vel gravida ante. Nunc lobortis condimentum elit, quis porta ipsum rhoncus vitae. Curabitur magna leo, porta vel fringilla gravida, consectetur in libero. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum.</p>
								<ul class="social trp sm">
									<li>
										<a href="#" class="facebook">
											<svg><rect/></svg>
											<i class="ion-social-facebook"></i>
										</a>
									</li>
									<li>
										<a href="#" class="twitter">
											<svg><rect/></svg>
											<i class="ion-social-twitter"></i>
										</a>
									</li>
									<li>
										<a href="#" class="youtube">
											<svg><rect/></svg>
											<i class="ion-social-youtube"></i>
										</a>
									</li>
									<li>
										<a href="#" class="googleplus">
											<svg><rect/></svg>
											<i class="ion-social-googleplus"></i>
										</a>
									</li>
								</ul>
							</div>
						</div>
						<div class="line"><div>You May Also Like</div></div>
						<div class="row">
							<article class="article related col-md-6 col-sm-6 col-xs-12">
								<div class="inner">
									<figure>
										<a href="#">
											<img src="images/news/img03.jpg">
										</a>
									</figure>
									<div class="padding">
										<h2><a href="#">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
										<div class="detail">
											<div class="category"><a href="category.html">Lifestyle</a></div>
											<div class="time">December 26, 2016</div>
										</div>
									</div>
								</div>
							</article>
							<article class="article related col-md-6 col-sm-6 col-xs-12">
								<div class="inner">
									<figure>
										<a href="#">
											<img src="images/news/img08.jpg">
										</a>
									</figure>
									<div class="padding">
										<h2><a href="#">Duis aute irure dolor in reprehenderit in voluptate</a></h2>
										<div class="detail">
											<div class="category"><a href="category.html">Lifestyle</a></div>
											<div class="time">December 26, 2016</div>
										</div>
									</div>
								</div>
							</article>
						</div>
						<div class="line thin"></div>
						<div class="comments">
							<h2 class="title">3 Responses <a href="#">Write a Response</a></h2>
							<div class="comment-list">
								<div class="item">
									<div class="user">                                
										<figure>
											<img src="images/img01.jpg">
										</figure>
										<div class="details">
											<h5 class="name">Mark Otto</h5>
											<div class="time">24 Hours</div>
											<div class="description">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore <a href="#">magna</a> aliqua. Ut enim ad minim veniam,
												quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
											</div>
											<footer>
												<a href="#">Reply</a>
											</footer>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="user">                                
										<figure>
											<img src="images/img01.jpg">
										</figure>
										<div class="details">
											<h5 class="name">Mark Otto</h5>
											<div class="time">24 Hours</div>
											<div class="description">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore <a href="#">magna</a> aliqua. Ut enim ad minim veniam,
												quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
											</div>
											<footer>
												<a href="#">Reply</a>
											</footer>
										</div>
									</div>
									<div class="reply-list">
										<div class="item">
											<div class="user">                                
												<figure>
													<img src="images/img01.jpg">
												</figure>
												<div class="details">
													<h5 class="name">Mark Otto</h5>
													<div class="time">24 Hours</div>
													<div class="description">
														Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
														consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
														cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
														proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
													</div>
													<footer>
														<a href="#">Reply</a>
													</footer>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="user">                                
										<figure>
											<img src="images/img01.jpg">
										</figure>
										<div class="details">
											<h5 class="name">Mark Otto</h5>
											<div class="time">24 Hours</div>
											<div class="description">
												Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
												tempor incididunt ut labore et dolore <a href="#">magna</a> aliqua. Ut enim ad minim veniam,
												quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.
											</div>
											<footer>
												<a href="#">Reply</a>
											</footer>
										</div>
									</div>
								</div>
							</div>
							<form class="row">
								<div class="col-md-12">
									<h3 class="title">Leave Your Response</h3>
								</div>
								<div class="form-group col-md-4">
									<label for="name">Name <span class="required"></span></label>
									<input type="text" id="name" name="" class="form-control">
								</div>
								<div class="form-group col-md-4">
									<label for="email">Email <span class="required"></span></label>
									<input type="email" id="email" name="" class="form-control">
								</div>
								<div class="form-group col-md-4">
									<label for="website">Website</label>
									<input type="url" id="website" name="" class="form-control">
								</div>
								<div class="form-group col-md-12">
									<label for="message">Response <span class="required"></span></label>
									<textarea class="form-control" name="message" placeholder="Write your response ..."></textarea>
								</div>
								<div class="form-group col-md-12">
									<button class="btn btn-primary">Send Response</button>
								</div>
							</form>
						</div>
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
									<img src="images/logo-light.png" class="img-responsive" alt="Logo">
								</figure>
								<p class="brand-description">
									Magz is a HTML5 &amp; CSS3 magazine template based on Bootstrap 3.
								</p>
								<a href="page.html" class="btn btn-magz white">About Us <i class="ion-ios-arrow-thin-right"></i></a>
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
						<div class="line"></div>
						<div class="block">
							<h1 class="block-title">Newsletter</h1>
							<div class="block-body">
								<p>By subscribing you will receive new articles in your email.</p>
								<form class="newsletter">
									<div class="input-group">
										<div class="input-group-addon">
											<i class="ion-ios-email-outline"></i>
										</div>
										<input type="email" class="form-control email" placeholder="Your mail">
									</div>
									<button class="btn btn-primary btn-block white">Subscribe</button>
								</form>
							</div>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 col-xs-12">
						<div class="block">
							<h1 class="block-title">Latest News</h1>
							<div class="block-body">
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="images/news/img12.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Donec consequat lorem quis augue pharetra</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="images/news/img14.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">eu dapibus risus aliquam etiam ut venenatis</a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="images/news/img15.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Nulla facilisis odio quis gravida vestibulum </a></h1>
										</div>
									</div>
								</article>
								<article class="article-mini">
									<div class="inner">
										<figure>
											<a href="single.html">
												<img src="images/news/img16.jpg" alt="Sample Article">
											</a>
										</figure>
										<div class="padding">
											<h1><a href="single.html">Proin venenatis pellentesque arcu vitae </a></h1>
										</div>
									</div>
								</article>
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
									<li><a href="index.html">Home</a></li>
									<li><a href="#">Partner</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="page.html">About</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="copyright">
							COPYRIGHT &copy; MAGZ 2017. ALL RIGHT RESERVED.
							<div>
								Made with <i class="ion-heart"></i> by <a href="http://kodinger.com">Kodinger</a>
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