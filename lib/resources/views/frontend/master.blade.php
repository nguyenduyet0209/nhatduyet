<!DOCTYPE html>
<html lang="en">
<head>
	<base href="{{asset('public/frontend')}}/" />
	<title>@yield('title')</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta content="Giá xe Maserati 2019 Mới Nhất dòng Sedan Quattroporte, Ghibli, SUV Levante; giá siêu xe coupe Granturismo, xe mui trần thể thao GranCabrio lăn bánh bao nhiêu? Hotline 0919 265 888" name="keywords">
	<meta content="Giá xe Maserati 2019 Mới Nhất dòng Sedan Quattroporte, Ghibli, SUV Levante; giá siêu xe coupe Granturismo, xe mui trần thể thao GranCabrio lăn bánh bao nhiêu? Hotline 0919 265 888" name="description">
	<link href='images/logo.png' rel='shortcut icon'>

	<link href='http://fonts.googleapis.com/css?family=Maven+Pro:400,700%7CRaleway:300,400,700%7CPlayfair+Display:700' rel='stylesheet'>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/magnific-popup.css" />
	<link rel="stylesheet" href="css/font-icons.css" />
	<link rel="stylesheet" href="css/sliders.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/animate.min.css" />
	<link rel="shortcut icon" href="img/favicon.ico">
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png.html">
	<link rel="apple-touch-icon" sizes="72x72" href="img/apple-touch-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="114x114" href="img/apple-touch-icon-114x114.png">

</head>

<body class="relative">

	
	<div class="loader-mask">
		<div class="loader">
			<div></div>
			<div></div>
		</div>
	</div>

	<main class="content-wrapper oh">

		<header class="nav-type-1">
			<nav class="navbar navbar-static-top">
				<div class="navigation" id="sticky-nav">
					<div class="container relative">

						<div class="row">

							<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse">
									<span class="sr-only">Toggle navigation</span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
									<span class="icon-bar"></span>
								</button>
								
								<div class="nav-cart mobile-cart hidden-lg hidden-md">
									<div class="nav-cart-outer">
										<div class="nav-cart-inner">
											<a href="#" class="nav-cart-icon">2</a>
										</div>
									</div>
								</div>
							</div> 

							<div class="header-wrap">
								<div class="header-wrap-holder">
									<div class="nav-search hidden-sm hidden-xs">
										<form method="get" action="{{asset('search/')}}">
											<input type="text" name="result" class="form-control mb-0" placeholder="Search">
											<button type="submit" class="search-button">
												<i class="icon icon_search"></i>
											</button>
										</form>
									</div>

									
									<div class="logo-container">
										<div class="logo-wrap text-center">
											<a href="{{asset('/')}}">
												<img class="logo" src="img/logo_dark.png" alt="logo">
											</a>
										</div>
									</div>

									
									<div class="nav-cart-wrap hidden-sm hidden-xs">
										<div class="nav-cart right">
											<div class="nav-cart-outer">
												<div class="nav-cart-inner">
													<a href="{{asset('cart/show')}}" class="nav-cart-icon">
														{{Cart::count()}}
													</a>
												</div>
											</div>
										</div>
										<div class="menu-cart-amount right">
											<span>
												Cart
											</span>
										</div>
									</div>

								</div>
							</div>

							<div class="nav-wrap">
								<div class="collapse navbar-collapse" id="navbar-collapse">

									<ul class="nav navbar-nav">

										<li id="mobile-search" class="hidden-lg hidden-md">
											<form method="get" class="mobile-search relative">
												<input type="search" class="form-control" placeholder="Search...">
												<button type="submit" class="search-button">
													<i class="icon icon_search"></i>
												</button>
											</form>
										</li>

										@foreach($categories as $listcate)
										<li>
											<a href="{{asset('category/'.$listcate->cate_id.'/'.$listcate->cate_slug.'.html')}}">
												{{$listcate->cate_name}}
											</a>
										</li>
										@endforeach

									</ul> 
								</div> 
							</div> 

						</div> 
					</div> 
				</div> 
			</nav> 
		</header>

		@yield('main')
		
		<footer class="footer footer-type-1 bg-white">
			<div class="container">
				<div class="footer-widgets top-bottom-dividers pb-mdm-20">
					<div class="row">

						<div class="col-md-4">
							<div class="widget footer-get-in-touch">
								<h5 class="widget-title uppercase">Mr.Duyet Shop</h5>
								<address class="footer-address">
									<span>Địa chỉ:</span>
									Hồ Tùng Mậu, Cầu Giấy, Hà Nội
								</address>
								<p>
									Điện thoại: <a href="tel:+84969131921">0969.131.921</a>
								</p>
								<p>Email: <a href="mailto:hello@nhatduyet.me">hello@nhatduyet.me</a></p>
								<div class="social-icons rounded mt-20">
									<a href="index.html#"><i class="fa fa-twitter"></i></a>
									<a href="index.html#"><i class="fa fa-facebook"></i></a>
									<a href="index.html#"><i class="fa fa-google-plus"></i></a>
									<a href="index.html#"><i class="fa fa-linkedin"></i></a>
									<a href="index.html#"><i class="fa fa-vimeo"></i></a>
								</div>
							</div>
						</div> 

						<div class="col-md-4">
							<div class="widget footer-links">
								<h5 class="widget-title uppercase">Thông tin</h5>
								<ul class="list-no-dividers">
									<li><a href="{{asset('gioi-thieu')}}">Về chúng tôi</a></li>
									<li><a href="{{asset('lien-he')}}">Liên hệ</a></li>
								</ul>
							</div>
						</div>

						<div class="col-md-4">
							<div class="widget footer-links">
								<h5 class="widget-title uppercase">Bản đồ</h5>
								<div class="maps">
									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59587.97785448771!2d105.80194413492788!3d21.02273601629448!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab9bd9861ca1%3A0xe7887f7b72ca17a9!2zSMOgIE7hu5lpLCBIb8OgbiBLaeG6v20sIEjDoCBO4buZaQ!5e0!3m2!1svi!2s!4v1542295822759" width="100%" height="175px" frameborder="0" style="border:0" allowfullscreen></iframe>
								</div>
							</div>
						</div>

						

					</div>
				</div>    
			</div> 

			<div class="bottom-footer bg-white">
				<div class="container">
					<div class="row">
						<div class="col-sm-offset-4 col-sm-4 copyright sm-text-center">
							<span>
								&copy; 2017 Mr.Duyet Shop, Made by <a href="http://devteam.nhatduyet.me/">DEV TEAM</a>
							</span>
						</div>

						<div class="col-sm-4 text-center">
							<div id="back-to-top">
								<a href="index.html#top">
									<i class="fa fa-angle-up"></i>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div> 
		</footer> 
	</main> 

	<script type="text/javascript" src="js/jquery.min.js"></script>
	{{-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> --}}
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/plugins.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
	<script src="js/confirm.js"></script>
</body>
</html>