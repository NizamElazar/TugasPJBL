<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>ZELASTORE</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="assets/css/bootstrap.min.css"/>
		<!-- CSS only -->

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="assets/css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="assets/css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="assets/css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="assets/css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="assets/css/style.css"/>

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
		<header>
			

			<!-- MAIN HEADER -->
			<div id="header">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<!-- LOGO -->
						<div class="col-md-3">
							<div class="header-logo">
								<a href="index.php" class="logo">
									<img src="assets/img/zelastore.png" style="width: 80px; height:auto" alt="">
								</a>
							</div>
						</div>
						<!-- /LOGO -->

						<!-- SEARCH BAR -->
						<div class="col-md-6">
							<div class="header-search ">
								<form>
									<select class="input-select">
										<option value="0">Kategori</option>
										<option value="1">Joystick</option>
										<option value="1">Headset</option>
									</select>
									<input class="input" placeholder="Search here">
									<button class="search-btn">Cari</button>
								</form>
							</div>
						</div>
						<!-- /SEARCH BAR -->

						<!-- ACCOUNT -->
						<div class="col-md-3 clearfix">
							<div class="header-ctn">
							
								<!-- Wishlist -->
								<div>
									<a href="#">
										Keranjang	
									</a>
								</div>
								<!-- /Wishlist -->

								<!-- Cart -->
								<div class="dropdown">
									
										<a href="profile.php"> Profile Anda</a>
										
									
								</div>
								<!-- /Cart -->

								<!-- Menu Toogle -->
								
								<!-- /Menu Toogle -->
							</div>
						</div>
						<!-- /ACCOUNT -->
					</div>
					<!-- row -->
				</div>
				<!-- container -->
			</div>
			<!-- /MAIN HEADER -->
		</header>
		<!-- /HEADER -->

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="homepage.php">Home</a></li>
						<li><a href="store.php">Toko</a></li>
						<li><a href="carttest.php">Keranjang</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Produk</h3>
							<div class="section-nav">
								
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="assets//img/product01.png" alt="">
											</div>
											<div class="product-body">												
												<p class="product-category">Laptop</p>
												<h3 class="product-name"><a href="products.php">HP Laptop</a></h3>
												<h4 class="product-price">Rp4.500.000</h4>
												
												<div class="product-btns">
													
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Lihat</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="assets/img/product02.png" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Headset</p>
												<h3 class="product-name"><a href="products.php">Gaming Headset</a></h3>
												<h4 class="product-price">Rp80.000</h4>
												
												<div class="product-btns">
													
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Lihat</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="assets/img/product03.png" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Laptop</p>
												<h3 class="product-name"><a href="#">Acer Laptop</a></h3>
												<h4 class="product-price">Rp2.500.000</h4>
												
												<div class="product-btns">
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Lihat</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="assets/img/product04.png" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">tablet</p>
												<h3 class="product-name"><a href="#">Asus Tablet</a></h3>
												<h4 class="product-price">Rp2.000.000</h4>
												
												<div class="product-btns">
													
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Lihat</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="assets/img/product05.png" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Headset</p>
												<h3 class="product-name"><a href="#">Normal Headset</a></h3>
												<h4 class="product-price">Rp 95.000</h4>
												
												<div class="product-btns">
													
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Lihat</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		
		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab2" class="tab-pane fade in active">
									<div class="products-slick" data-nav="#slick-nav-2">
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="assets/img/product06.png" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Laptop</p>
												<h3 class="product-name"><a href="#">ASUS Gaming Laptop</a></h3>
												<h4 class="product-price">Rp 6.000.000</h4>
												
												<div class="product-btns">
													
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Lihat</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="assets/img/product07.png" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Handphone</p>
												<h3 class="product-name"><a href="#">Samsung Handphone</a></h3>
												<h4 class="product-price">Rp. 4.000.000</h4>
												
												<div class="product-btns">
													
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Lihat</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="assets/img/product08.png" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Laptop</p>
												<h3 class="product-name"><a href="#">ASUS Office Laptop</a></h3>
												<h4 class="product-price">Rp 5.000.000</h4>
												
												<div class="product-btns">
													
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Lihat</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										<!-- /product -->


										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="assets/img/product01.png" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Laptop</p>
												<h3 class="product-name"><a href="#">ASUS Laptop</a></h3>
												<h4 class="product-price">Rp 4.500.000</h4>
												
												<div class="product-btns">
													
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">Lihat</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</div>
										<!-- /product -->
									</div>
									<div id="slick-nav-2" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- /Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		

		<!-- FOOTER -->
		<footer id="footer">
			<!-- top footer -->
			<div class="section">
				<!-- container -->
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">TENTANG KAMI</h3>
								<p>Gaming Store Terpercaya Anda.</p>
								<ul class="footer-links">
									<li><a href="#"><i class="fa fa-map-marker"></i> Java, Indonesia</a></li>
									<li><a href="#"><i class="fa fa-phone"></i>+62821-216-111-022</a></li>
									<li><a href="#"><i class="fa fa-envelope-o"></i> nizam@gmail.com</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-3 col-xs-6">
							<div class="footer">
								<h3 class="footer-title">KATEGORI</h3>
								<ul class="footer-links">
									<li><a href="#">Joystick</a></li>
									<li><a href="#">Headsets</a></li>
								</ul>
							</div>
						</div>

						<div class="clearfix visible-xs"></div>

					</div>
					<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /top footer -->

			<!-- bottom footer -->
			<div id="bottom-footer" class="section">
				<div class="container">
					<!-- row -->
					<div class="row">
						<div class="col-md-12 text-center">
							
							<span class="copyright">
								<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
								Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
							<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
							</span>
						</div>
					</div>
						<!-- /row -->
				</div>
				<!-- /container -->
			</div>
			<!-- /bottom footer -->
		</footer>
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="assets/js/jquery.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		<script src="assets/js/slick.min.js"></script>
		<script src="assets/js/nouislider.min.js"></script>
		<script src="assets/js/jquery.zoom.min.js"></script>
		<script src="assets/js/main.js"></script>
		<!-- JavaScript Bundle with Popper -->
	</body>
</html>
