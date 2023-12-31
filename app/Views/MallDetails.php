<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

	<!-- title -->
	<title>Healthy Grams</title>

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="assets/img/images/logo.jpg">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="assets/css/responsive.css">

</head>
<body>

	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->
		<div class="top-header-area" id="sticker">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-sm-12 text-center">
						<div class="main-menu-wrap">
							<!-- logo -->
							<div class="site-logo">
								<a href="/">
									<img src="assets/img/images/LOGO.png" alt="">
								</a>
							</div>
							<!-- logo -->

							<!-- menu start -->
							<nav class="main-menu">
								<ul>
									<li class="current-list-item"><a href="/">Home</a>

									</li>
									<li><a href="shop.html">Shop</a></li>
									<li><a href="about.html">About</a>
									<li><a href="news.html">News</a>

									</li>
									<li><a href="contact.html">Contact</a>

									</li>

									<li>
										<div class="header-icons">
											<a class="shopping-cart" href="cart.html"><i class="fas fa-shopping-cart"></i></a>
											<a class="mobile-hide search-ba-icon" href="#"><i class="fas fa-search"></i></a>
											<a href="/logout">
											<img src="" alt="">Logout</a>
										</div>
									</li>
								</ul>
							</nav>
							<a class="mobile-show search-bar-icon" href="#"><i class="fas fa-search"></i></a>
							<div class="mobile-menu"></div>
							<!-- menu end -->
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- end header -->

		<!-- search area -->
		<div class="search-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<span class="close-btn"><i class="fas fa-window-close"></i></span>
						<div class="search-bar">
							<div class="search-bar-tablecell">
								<h3>Search For:</h3>
								<input type="text" placeholder="Keywords">
								<button type="submit">Search <i class="fas fa-search"></i></button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- hero area -->
								<div class="hero-area hero-bg">

								  <div class="container">
								    <div class="row">
								      <div class="col-lg-9 offset-lg-2 text-center">
								        <div class="hero-text">
								          <div class="hero-text-tablecell">
								              <img src="img/images/s.jpg" alt=""  width= 50%>
								            <p class="subtitle">Fresh & Organic</p>
								            <h1>Delicious Nuts</h1>
								              <div class="hero-btns">
								              <a href="shop.html" class="boxed-btn">Nuts Collection</a>
								              <a href="contact.html" class="bordered-btn">Contact Us</a>

								            </div>
								          </div>
								        </div>
								      </div>
								    </div>
								  </div>
								</div>
								<!-- end hero area -->

	<!-- features list section -->
	<div class="list-section pt-80 pb-80">
		<div class="container">

			<div class="row">
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-shipping-fast"></i>
						</div>
						<div class="content">
							<h3>Free Shipping</h3>
							<p>When order over $75</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
					<div class="list-box d-flex align-items-center">
						<div class="list-icon">
							<i class="fas fa-phone-volume"></i>
						</div>
						<div class="content">
							<h3>24/7 Support</h3>
							<p>Get support all day</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="list-box d-flex justify-content-start align-items-center">
						<div class="list-icon">
							<i class="fas fa-sync"></i>
						</div>
						<div class="content">
							<h3>Refund</h3>
							<p>Get refund within 3 days!</p>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	<!-- end features list section -->

										<!-- product section -->
			<div class="product-section mt-150 mb-150">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 offset-lg-2 text-center">
								<div class="section-title">
									<h3><span class="orange-text">Our</span> Products</h3>
									<p>Whether you're looking for a fresh nuts platter for your next party or a healthy snack for your kids, we have the perfect nuts for you!</p>
			                    </div>
							</div>
						</div>

			            <div class="row">

			                <?php foreach ($mall as $m):?>
			                    <div class="col-lg-3 col-md-6 text-center">
			                        <div class="single-product-item">
			                            <div class="product-image">
			                                <a href="single-product.html"><img src="<?= $m['image']?>" alt=""></a>
			                            </div>
			                            <h3><?= $m['name']?></h3>
			                            <p class="product-price">₱<?= $m['price']?></p>
			                            <p> <?= $m['description']?></p>
			                            <p> <?= $m['category']?></p>
			                            <p> <?= $m['quantity']?> kilos</p>

			                            <a href="#" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
			                        </div>
			                    </div>
			                    <?php endforeach; ?>
			            </div>

			    </div>
			</div>






							<!-- cart banner section -->
							<section class="cart-banner pt-100 pb-100">
							    <div class="container">
							        <div class="row clearfix">
							            <!--Image Column-->
							            <div class="image-column col-lg-6">
							                <div class="image">
							                    <div class="price-box">
							                        <div class="inner-price">
							                              <span class="price">
							                                  <strong>30%</strong> <br> off per kg
							                              </span>
							                          </div>
							                      </div>
							                    <img src="assets/img/images/pla.png" alt="">
							                  </div>
							              </div>
							              <!--Content Column-->
							              <div class="content-column col-lg-6">
							        <h3><span class="orange-text">Deal</span> of the month</h3>
							                  <h4>Roasted Almond</h4>
							                  <div class="text">Almonds are rich in important nutrients for your body, including magnesium, vitamin E, and fiber. Almonds have both calcium and phosphorus, which are good for bone health. Almonds seem to help curb blood sugar spikes after meals, which is key for people with diabetes</div>
							                  <!--Countdown Timer-->
							                  <div class="time-counter"><div class="time-countdown clearfix" data-countdown="2020/2/01"><div class="counter-column"><div class="inner"><span class="count">00</span>Days</div></div> <div class="counter-column"><div class="inner"><span class="count">00</span>Hours</div></div>  <div class="counter-column"><div class="inner"><span class="count">00</span>Mins</div></div>  <div class="counter-column"><div class="inner"><span class="count">00</span>Secs</div></div></div></div>
							                <a href="cart.html" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
							              </div>
							          </div>
							      </div>
							  </section>
							  <!-- end cart banner section -->

	<!-- testimonail-section -->
	<div class="testimonail-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-10 offset-lg-1 text-center">
					<div class="testimonial-sliders">
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/avaters/avatar1.png" alt="">
							</div>
							<div class="client-meta">
								<h3>Maricor Toress <span>Local shop owner</span></h3>
								<p class="testimonial-body">
									" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/avaters/avatar2.png" alt="">
							</div>
							<div class="client-meta">
								<h3>David Niph <span>Local shop owner</span></h3>
								<p class="testimonial-body">
									" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
						<div class="single-testimonial-slider">
							<div class="client-avater">
								<img src="assets/img/avaters/avatar3.png" alt="">
							</div>
							<div class="client-meta">
								<h3>Jacob Sikim <span>Local shop owner</span></h3>
								<p class="testimonial-body">
									" Sed ut perspiciatis unde omnis iste natus error veritatis et  quasi architecto beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium "
								</p>
								<div class="last-icon">
									<i class="fas fa-quote-right"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- end testimonail-section -->

	<!-- advertisement section -->
	<div class="abt-section mb-150">
	  <div class="container">
	    <div class="row">
	      <div class="col-lg-6 col-md-12">
	        <div class="abt-bg">
	          <a href="https://www.youtube.com/watch?v=xqiLBVdo7lA" class="video-play-btn popup-youtube"><i class="fas fa-play"></i></a>
	        </div>
	      </div>
	      <div class="col-lg-6 col-md-12">
	        <div class="abt-text">
	          <p class="top-sub">Since Year 2020</p>
	          <h2>We are <span class="orange-text">Health Grams</span></h2>
	          <p> Very known two terms to us are the word ‘health’ and ‘fitness’. Many times we tell or use these words whenever we say phrases like ‘health is wealth’ and ‘fitness is the key’. What does the word health really mean? It implies the idea of ‘being well’.</p>
	          <p>A healthy and fit person is the one when he/she can function well physically as well as mentally. Proper health and fitness do not depend on our own but also on our physical environment and the quality of food intake.</p>
	          <a href="about.html" class="boxed-btn mt-4">know more</a>
	        </div>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- end advertisement section -->


	<<style type="text/css"> /*Initializing CSS code*/
	img { float: right; }
	</style>
	<!-- shop banner -->
	<section class="shop-banner">
	    <div class="container">
	        <img src="assets/img/images/p.jpg" alt=""  width= 30%>
	        <h3>December sale is on! <br> with big <span class="orange-text">Discount...</span></h3>
	          <div class="sale-percent"><span>Sale! <br> Upto</span>50% <span>off</span></div>
	         <a href="shop.html" class="cart-btn btn-lg">Shop Now</a>
	      </div>
	  </section>
	<!-- end shop banner -->

	<!-- latest news -->
	<div class="latest-news pt-150 pb-150">
	  <div class="container">

	    <div class="row">
	      <div class="col-lg-8 offset-lg-2 text-center">
	        <div class="section-title">
	          <h3><span class="orange-text">Our</span> News</h3>
	          <p>The Latest news in healthy lifestyle </p>
	        </div>
	      </div>
	    </div>

	    <div class="row">
	      <div class="col-lg-4 col-md-6">
	        <div class="single-latest-news">
	          <a href="single-news.html"><div class="latest-news-bg news-bg-1"></div></a>
	          <div class="news-text-box">
	            <h3><a href="single-news.html">Is it good to drink chia seeds everyday?</a></h3>
	            <p class="blog-meta">
	              <span class="author"><i class="fas fa-user"></i> Admin</span>
	              <span class="date"><i class="fas fa-calendar"></i> October 1, 2023</span>
	            </p>
	            <p class="excerpt">Chia seeds are highly nutritious, boast a long list of health benefits and can be a healthy dietary addition for most.</p>
	            <a href="single-news.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
	          </div>
	        </div>
	      </div>
	      <div class="col-lg-4 col-md-6">
	        <div class="single-latest-news">
	          <a href="single-news.html"><div class="latest-news-bg news-bg-2"></div></a>
	          <div class="news-text-box">
	            <h3><a href="single-news.html">A man's worth has its season, like tomato.</a></h3>
	            <p class="blog-meta">
	              <span class="author"><i class="fas fa-user"></i> Admin</span>
	              <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
	            </p>
	            <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi. Praesent vitae mattis nunc, egestas viverra eros.</p>
	            <a href="single-news.html" class="read-more-btn">read more <i class="fas fa-angle-right"></i></a>
	          </div>
	        </div>
	      </div>

				<!-- footer -->
				<div class="footer-area">
					<div class="container">
						<div class="row">
							<div class="col-lg-3 col-md-6">
								<div class="footer-box about-widget">
									<h2 class="widget-title">About us</h2>
									<p>CAVITE | MAKATI | PASIG This is your go to store for healthy yet affordable snacks and baking needs.</p>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="footer-box get-in-touch">
									<h2 class="widget-title">Get in Touch</h2>
									<ul>
										<li>Masipit Calapan , Oriental Mindoro</li>
										<li>miamorerage@gmail.com</li>
										<li>+00 111 222 3333</li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="footer-box pages">
									<h2 class="widget-title">Pages</h2>
									<ul>
										<li><a href="index.html">Home</a></li>
										<li><a href="about.html">About</a></li>
										<li><a href="services.html">Shop</a></li>
										<li><a href="news.html">News</a></li>
										<li><a href="contact.html">Contact</a></li>
									</ul>
								</div>
							</div>
							<div class="col-lg-3 col-md-6">
								<div class="footer-box subscribe">
									<h2 class="widget-title">Subscribe</h2>
									<p>Subscribe to our mailing list to get the latest updates.</p>
									<form action="index.html">
										<input type="email" placeholder="Email">
										<button type="submit"><i class="fas fa-paper-plane"></i></button>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- end footer -->
				<!-- copyright -->
<div class="copyright">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-12">
				<p>Copyrights &copy; 2019 - <a href="https://imransdesign.com/">Imran Hossain</a>,  All Rights Reserved.</p>
			</div>
			<div class="col-lg-6 text-right col-md-12">
				<div class="social-icons">
					<ul>
						<li><a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
						<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
						<li><a href="#" target="_blank"><i class="fab fa-instagram"></i></a></li>
						<li><a href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
						<li><a href="#" target="_blank"><i class="fab fa-dribbble"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- end copyright -->
	<!-- jquery -->
	<script src="assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="assets/js/main.js"></script>

</body>
</html>
